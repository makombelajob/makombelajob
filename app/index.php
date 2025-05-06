<?php
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
                <h1 class="fs-1 text-uppercase text-primary fw-bold">Développeur web et web mobile</h1>
            </div>
            <section id="presentation" class="mt-3" itemscope itemtype="https://schema.org/Person">
                <div class="card alert alert-primary w-100 w-md-75" style="width: 18rem;">
                    <img src="assets/images/jobb.jpg" class="card-img-top" alt="image de profile de MAKOMBELA job l'auteur du site" itemprop="image">
                    <div class="card-body">
                        <h5 class="card-title fs-1 fw-bold">Job MAKOMBELA</h5>
                        <p class="card-text">À la recherche d’un emploi pouvant me permettre de progresser et de maîtriser mes compétences dans un environnement de travail adapté dans le domaine du développement web et web mobile.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">412 Route de Saint Simon</li>
                        <li class="list-group-item">31100</li>
                        <li class="list-group-item">Toulouse</li>
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
                    <article class="card alert alert-success m-auto my-2 col-md-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Intégrateur Cabine Aéronefs</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">AIRBUS SAS - TOULOUSE</h6>
                            <h6>Février 2024 - Janvier 2025</h6>
                            <p class="card-text">Intégration cabine au sein d'AIRBUS (Toulouse, Colomiers fal A350 C64 POSTE 20I), final cabine au poste 20I.</p>
                        </div>
                    </article>
                    <article class="card alert alert-secondary m-auto my-2 col-md-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Agent Polyvalent</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Burger-King - Brest</h6>
                            <h6>Septembre 2022 - janvier 2023</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </article>
                    <article class="card alert alert-info m-auto my-2 col-md-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Manoeuvre TP</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Armor BTP - Brest</h6>
                            <h6>Février 2022 - juillet 2022</h6>
                            <p class="card-text">Différentes tâches en cuisine et en accueil.</p>
                        </div>
                    </article>
                    <article class="card alert alert-danger m-auto my-2 col-md-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Opérateur Géomètre</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">IVEA SARL - Mayotte</h6>
                            <h6>Janvier 2021 - décembre 2021</h6>
                            <p class="card-text">Léver des points dans différents types de terrain</p>
                        </div>
                    </article>
                </div>
            </section>
        </div>
        <div class="row">
            <section id="formations" class="col-12">
                <div class="text-center my-3">
                    <h2 class="fs-1 text-uppercase fw-semibold text-primary">Mes formations</h2>
                </div>
                <div class="row ">
                    <div class="col-11 m-auto">
                        <div class="row justify-content-between">
                            <article class="alert alert-info col-12 col-md-5">
                                <aside>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#devOps" aria-expanded="false" aria-controls="devOps">
                                            Développeur Web
                                        </button>
                                    </p>
                                </aside>
                                <div class="m-auto col-lg-12" style="min-height: 120px;">
                                    <div class="collapse collapse-horizontal" id="devOps">
                                        <div class="" style="width: 300px; box-sizing:border-box">
                                            Formation à l'Ecole Européenne du Numérique, 100% en ligne en développement Web et Web mobile (RNCP 37674).
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <form action="certificate.php" method="get">
                                        <input type="hidden" name="certificate" value="devops">
                                        <button class="btn btn-secondary text-white " >Certificat</button>
                                    </form>
                                </div>
                            </article>
                            <article class="alert alert-info col-12 col-md-5">
                                <aside>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#airplane" aria-expanded="false" aria-controls="airplane">
                                            Intégrateur cabine Aéronefs
                                        </button>
                                    </p>
                                </aside>
                                <div style="min-height: 120px;">
                                    <div class="collapse collapse-horizontal" id="airplane">
                                        <div class="" style="width: 250px;">
                                            Formation d'Intégrateur Cabine Aéronautique accéleré de 6 mois au sein de l'organisme AFPA BALMA, et obtenue mon CQPM.
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <form action="certificate.php?coursera=" method="get">
                                        <input type="hidden" name="certificate" value="ica">
                                        <button class="btn btn-secondary text-white ">Certificat</button>
                                    </form>
                                </div>
                            </article>
                            <article class="alert alert-info col-12 col-md-5">
                                <aside>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#school" aria-expanded="false" aria-controls="school">
                                            Formations Scolaires
                                        </button>
                                    </p>
                                </aside>
                                <div style="min-height: 120px;">
                                    <div class="collapse collapse-horizontal" id="school">
                                        <div class="" style="width: 250px;">
                                            J'ai suivis des cours du niveau terminal sans pour autant aller au bout pour obtenir un diplôme.
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <form action="certificate.php" method="get">
                                        <input type="hidden" name="certificate" value="school">
                                        <button class="btn btn-secondary text-white ">Certificat</button>
                                    </form>
                                </div>
                            </article>
                            <article class="alert alert-info col-12 col-md-5">
                                <aside>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#coursera" aria-expanded="false" aria-controls="coursera">
                                            Autres formations
                                        </button>
                                    </p>
                                </aside>
                                <div style="min-height: 120px;">
                                    <div class="collapse collapse-horizontal" id="coursera">
                                        <div class="" style="width: 250px;">
                                            J'ai suivis différentes formations en ligne sur <a href="https://coursera.org" class="text-secondary">Coursera</a> dans le domaine numérique qui m'a bien initié et m'as permis de trouver ma passion professionnelle.
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <form action="certificate.php" method="get">
                                        <input type="hidden" name="certificate" value="coursera">
                                        <button class="btn btn-secondary text-white " type="submit">Certificat</button>
                                    </form>
                                </div>
                            </article>
                        </div>
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
                            <input class="form-control fs-2" type="email" id="email" name="email" placeholder="Enter your email">
                        </div>
                        <div>
                            <label class="form-label fs-1 my-3" for="subject">Subject</label>
                            <select class="form-select fs-2 text-center" name="subject" id="subject">
                                <option value="">Choose a subject</option>
                                <option value="devis">Devis</option>
                                <option value="Informations">Informations</option>
                            </select>
                        </div>
                        <div>
                            <label class="form-label fs-1 my-3" for="message">Message</label>
                            <textarea class="form-control fs-2" name="message" id="message" cols="30" rows="10" name="message"></textarea>
                        </div>
                        <div>
                            <input type="checkbox" id="gpdr" name="gpdr">
                            <label class="form-label fs-5 my-3" for="gpdr">I agree therms and conditions</label>
                        </div>
                        <div class="text-center my-3">
                            <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <?php unset($_SESSION['message']);?>
        <?php unset($_SESSION['errors']);?>
        <?php unset($_SESSION['successfully']);?>
    </main>
<?php include_once 'includes/footer.php' ;?>