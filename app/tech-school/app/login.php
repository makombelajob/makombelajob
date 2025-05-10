<?php
session_start();
include_once 'includes/header.php';
?>
<main class="container">
    <div class="row min-vh-100 d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-8">
            <section>
                <h1 class="fs-1 text-center text-uppercase fw-bolder">Login</h1>
                <?php include_once 'includes/flash_message.php';?>
                <?php include_once 'includes/flash_errors.php';?>
                <form action="login_treatment.php" id="formSignup" method="post" class="alert alert-primary rounded-5">
                    <div id="emailField">
                        <label class="form-label fs-1 my-3" for="email">Email</label>
                        <input class="form-control fs-2" type="text" id="email" placeholder="Entrez votre email" name="email">
                    </div>
                    <div id="pwdField">
                        <label class="form-label fs-1 my-3" for="passwd">Mot de passe</label>
                        <input class="form-control fs-2" type="password" id="passwd" placeholder="Entrez votre Mot de pass" name="password">
                    </div>
                    <div id="dbsField">
                        <label class="form-label fs-2 my-3" for="dbs">Catégorie</label>
                        <select class="form-control text-center fs-2" name="category" id="dbs">
                            <option value="">===catégorie===</option>
                            <option value="student" <?= (!empty($_SESSION['data']['category']) && $_SESSION['data']['category'] === 'student') ? 'selected' : ''; ?>>élève</option>
                            <option value="parent" <?= (!empty($_SESSION['data']['category']) && $_SESSION['data']['category'] === 'parent') ? 'selected' : ''; ?>>Parent</option>
                            <option value="teacher" <?= (!empty($_SESSION['data']['category']) && $_SESSION['data']['category'] === 'teacher') ? 'selected' : ''; ?>>Enseignant</option>
                            <option value="admin" <?= (!empty($_SESSION['data']['category']) && $_SESSION['data']['category'] === 'admin') ? 'selected' : ''; ?>>Administrateur</option>
                        </select>
                    </div>
                    <div class="text-center my-3">
                        <button id="submit" type="submit" class="btn btn-primary fs-1">Connexion</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <?php unset($_SESSION['message']);?>
    <?php unset($_SESSION['errors']);?>
</main>
<?php include_once 'includes/footer.php'; ?>
