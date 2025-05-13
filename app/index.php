# Contenu complet corrigé du fichier PHP avec orthographe et formulation améliorées
full_corrected_php_content = """<?php
session_start();
include_once 'includes/header.php';
?>
<main class="container mt-5">
    <div class="mt-5 mb-0">
        <?php if(isset($_SESSION['successfully']['sent'])) : ;?>
            <div class="bg-warning my-3 rounded-3 text-center fs-2 p-1 mt-5 mb-0">
                <?= $_SESSION['successfully']['sent'];?>
            </div>
        <?php endif;?>
    </div>
    <div class="row">
        <div class="text-center my-3">
            <h1 class="fs-1 text-uppercase text-primary fw-bold">Développeur web et mobile</h1>
        </div>
        <section id="presentation" class="mt-3" itemscope itemtype="https://schema.org/Person">
            <div class="card alert alert-primary w-100 w-md-75" style="width: 18rem;">
                <img src="assets/images/jobb.jpg" class="card-img-top" alt="Photo de profil de Job MAKOMBELA, auteur du site" itemprop="image">
                <div class="card-body">
                    <h5 class="card-title fs-1 fw-bold">Job MAKOMBELA</h5>
                    <p class="card-text">Je suis à la recherche d’un poste me permettant d’évoluer et de perfectionner mes compétences dans un environnement professionnel adapté, dans le domaine du développement web et mobile.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">412 Route de Saint Simon</li>
                    <li class="list-group-item">31100 Toulouse</li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="card-link">07-61-07-80-91</a>
                    <a href="#" class="card-link">makombelajob@gmail.com</a>
                </div>
            </div>
        </section>
    </div>
    <div class="row justify-content-between">
        <section id="expert-professionel">
            <div class="text-center my-3">
                <h2 class="fs-1 text-uppercase fw-semibold text-primary">Expériences professionnelles</h2>
            </div>
            <div class="row justify-content-between">
                <article class="card alert alert-success m-auto my-2 col-md-5">
                    <div class="card-body">
                        <h5 class="card-title">Intégrateur Cabine Aéronefs</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">AIRBUS SAS - Toulouse</h6>
                        <h6>Février 2024 - Janvier 2025</h6>
                        <p class="card-text">Intégration de cabine au sein d'AIRBUS (Colomiers, FAL A350 poste 20I), travail de finition cabine.</p>
                    </div>
                </article>
                <article class="card alert alert-secondary m-auto my-2 col-md-5">
                    <div class="card-body">
                        <h5 class="card-title">Agent Polyvalent</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Burger King - Brest</h6>
                        <h6>Septembre 2022 - Janvier 2023</h6>
                        <p class="card-text">Postes variés : accueil, cuisine, entretien. Adaptation au rythme soutenu du service client.</p>
                    </div>
                </article>
                <article class="card alert alert-info m-auto my-2 col-md-5">
                    <div class="card-body">
                        <h5 class="card-title">Manœuvre TP</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Armor BTP - Brest</h6>
                        <h6>Février 2022 - Juillet 2022</h6>
                        <p class="card-text">Travaux manuels sur chantiers de travaux publics, aide aux équipes techniques.</p>
                    </div>
                </article>
                <article class="card alert alert-danger m-auto my-2 col-md-5">
                    <div class="card-body">
                        <h5 class="card-title">Opérateur Géomètre</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">IVEA SARL - Mayotte</h6>
                        <h6>Janvier 2021 - Décembre 2021</h6>
                        <p class="card-text">Relevés topographiques sur différents types de terrains.</p>
                    </div>
                </article>
            </div>
        </section>
    </div>
    <div class="row">
        <section id="formations" class="col-12">
            <div class="text-center my-3">
                <h2 class="fs-1 text-uppercase fw-semibold text-primary">Formations</h2>
            </div>
            <div class="col-11 m-auto">
                <div class="row justify-content-between">
                    <article class="alert alert-info col-12 col-md-5">
                        <p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#devOps">
                                Développeur Web
                            </button>
                        </p>
                        <div class="collapse" id="devOps">
                            <p>Formation 100% en ligne à l’École Européenne du Numérique en développement Web et mobile (RNCP 37674).</p>
                        </div>
                        <form action="certificate.php" method="get">
                            <input type="hidden" name="certificate" value="devops">
                            <button class="btn btn-secondary text-white">Certificat</button>
                        </form>
                    </article>
                    <article class="alert alert-info col-12 col-md-5">
                        <p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#airplane">
                                Intégrateur Cabine Aéronefs
                            </button>
                        </p>
                        <div class="collapse" id="airplane">
                            <p>Formation intensive de 6 mois à l’AFPA Balma, avec obtention du CQPM.</p>
                        </div>
                        <form action="certificate.php" method="get">
                            <input type="hidden" name="certificate" value="ica">
                            <button class="btn btn-secondary text-white">Certificat</button>
                        </form>
                    </article>
                    <article class="alert alert-info col-12 col-md-5">
                        <p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#school">
                                Formation Scolaire
                            </button>
                        </p>
                        <div class="collapse" id="school">
                            <p>Cours suivis au niveau terminal sans obtention de diplôme.</p>
                        </div>
                        <form action="certificate.php" method="get">
                            <input type="hidden" name="certificate" value="school">
                            <button class="btn btn-secondary text-white">Certificat</button>
                        </form>
                    </article>
                    <article class="alert alert-info col-12 col-md-5">
                        <p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#coursera">
                                Autres Formations
                            </button>
                        </p>
                        <div class="collapse" id="coursera">
                            <p>Formations en ligne suivies sur <a href="https://coursera.org" class="text-secondary">Coursera</a> dans le domaine numérique. Ces cours ont éveillé ma passion pour le développement.</p>
                        </div>
                        <form action="certificate.php" method="get">
                            <input type="hidden" name="certificate" value="coursera">
                            <button class="btn btn-secondary text-white">Certificat</button>
                        </form>
                    </article>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <section id="langues">
            <div class="text-center my-3 col-12">
                <h2 class="fs-1 text-uppercase fw-semibold text-primary">Langues parlées</h2>
            </div>
            <div class="col-11 m-auto">
                <div class="row justify-content-between">
                    <article class="alert alert-secondary col-12 col-md-5 col-lg-3">
                        <h3 class="fs-3 fw-semibold">Anglais</h3>
                        <p class="fs-5 text-secondary">Bien à l’écrit et à l’oral</p>
                    </article>
                    <article class="alert alert-secondary col-12 col-md-5 col-lg-3">
                        <h3 class="fs-3 fw-semibold">Français</h3>
                        <p class="fs-5 text-secondary">Très bon niveau à l’écrit et à l’oral</p>
                    </article>
                    <article class="alert alert-secondary col-12 col-md-5 col-lg-3">
                        <h3 class="fs-3 fw-semibold">Autres langues</h3>
                        <p class="fs-5 text-secondary">4 langues africaines (parlées)</p>
                    </article>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <section>
            <div class="text-center my-3 col-12">
                <h2 class="fs-1 text-uppercase fw-semibold text-primary">Centres d’intérêt</h2>
            </div>
            <div class="col-11 m-auto">
                <div class="row justify-content-between">
                    <article class="alert alert-warning col-12 col-md-5 col-lg-3">
                        <h3 class="fs-3 fw-semibold">Basketball</h3>
                        <p class="fs-4">Jouer en équipe, faire des rencontres et relever des défis.</p>
                    </article>
                    <article class="alert alert-warning col-12 col-md-5 col-lg-3">
                        <h3 class="fs-3 fw-semibold">Randonnée</h3>
                        <p class="fs-4">Explorer la nature tout en pratiquant une activité physique.</p>
                    </article>
                    <article class="alert alert-warning col-12 col-md-5 col-lg-3">
                        <h3 class="fs-3 fw-semibold">Lecture</h3>
                        <p class="fs-4">Passionné par la géopolitique et la compréhension du monde.</p>
                    </article>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <section id="contact">
            <div class="text-center my-3">
                <h2 class="fs-1 text-uppercase fw-semibold text-primary">Me contacter</h2>
            </div>
            <?php if(isset($_SESSION['message'])) : ;?>
                <div class="bg-warning my-3 rounded-3 text-center fs-2 p-1">
                    <?= $_SESSION['message'];?>
                </div>
            <?php endif;?>
            <?php if(isset($_SESSION['errors'])) : ;?>
                <?php foreach($_SESSION['errors'] as $error) : ;?>
                    <div class="bg-danger text-white my-3 rounded-3 text-center fs-2 p-1">
                        <?= $error;?>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
            <div class="col-12 m-auto">
                <form action="message_treatment.php" method="post">
                    <div>
                        <label class="form-label fs-1 my-3" for="email">Email</label>
                        <input class="form-control fs-2" type="email" id="email" name="email" placeholder="Entrez votre email">
                    </div>
                    <div>
                        <label class="form-label fs-1 my-3" for="subject">Sujet</label>
                        <select class="form-select fs-2 text-center" name="subject" id="subject">
                            <option value="">Choisissez un sujet</option>
                            <option value="devis">Devis</option>
                            <option value="Informations">Informations</option>
                        </select>
                    </div>
                    <div>
                        <label class="form-label fs-1 my-3" for="message">Message</label>
                        <textarea class="form-control fs-2" name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <input type="checkbox" id="gpdr" name="gpdr">
                        <label class="form-label fs-5 my-3" for="gpdr">J'accepte les conditions générales</label>
                    </div>
                    <div class="text-center my-3">
                        <button class="btn btn-primary" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <?php unset($_SESSION['message']);?>
    <?php unset($_SESSION['errors']);?>
    <?php unset($_SESSION['successfully']);?>
</main>
<?php include_once 'includes/footer.php'; ?>

