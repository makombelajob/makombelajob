<?php
$certificates = [];

if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $name = htmlspecialchars($_GET['certificate'] ?? '');
    if($name === 'coursera' || $name === 'ica' || $name === 'devops' || $name === 'school'){
        require_once 'includes/dbconnect.php';

        $sql = 'SELECT name, school FROM certificate WHERE school = :school';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':school', $name, PDO::PARAM_STR);
        if($stmt->execute()){
            $certificates = $stmt->fetchAll();

        }
    }
}
include_once 'includes/header.php';
?>
    <main class="container mt-5">
        <div class="mt-5 mb-0 row">
            <section>
                <div class="text-center mt-4">
                    <h1 class="text-uppercase fs-1 fw-semibold text-primary">Certificat</h1>
                </div>
                <?php foreach ($certificates as $certificate) : ;?>
                    <article class="alert alert-secondary">
                        <p>
                            <a class="text-decoration-none text-black" href="assets/Certificate/<?= htmlspecialchars($certificate['name']); ?>" target="">
                                Voir le certificat : <?= htmlspecialchars($certificate['name']); ?>
                            </a>
                        </p>
                    </article>
                <?php endforeach;?>

            </section>
        </div>
    </main>
<?php include_once 'includes/footer.php'; ?>