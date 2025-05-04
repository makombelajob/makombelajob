<?php include_once 'includes/header.php'; ?>
<main class="container mt-5">
    <div class="row">
        <div class="text-center my-3">
            <h1 class="fs-1 text-uppercase text-primary fw-bold">Développeur web et web mobile</h1>
        </div>
        <section id="presentation" class="mt-3">
            <div class="card alert alert-primary w-100" style="width: 18rem;">
                <img src="assets/images/jobb.jpg" class="card-img-top" alt="image de profile de MAKOMBELA job l'auteur du site">
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
    <div class="row">
        <section id="expert-professionnel">
            <div class="text-center my-3">
                <h2 class="fs-1 text-uppercase fw-semibold text-primary">Expériences professionnelles</h2>
            </div>
            <div class="card alert alert-success" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Intégrateur Cabine Aéronefs</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">AIRBUS SAS - TOULOUSE</h6>
                    <h6>Février 2024 - Janvier 2025</h6>
                    <p class="card-text">Intégration cabine au sein d'AIRBUS (Toulouse, Colomiers fal A350 C64 POSTE 20I), final cabine au poste 20I.</p>
                </div>
            </div>
            <div class="card alert alert-secondary" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Agent polyvalent</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Burger-King - Brest</h6>
                    <h6>Septembre 2022 - janvier 2023</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card alert alert-info" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Manoeuvre TPCard title</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Armor BTP - Brest</h6>
                    <h6>Février 2022 - juillet 2022</h6>
                    <p class="card-text">Différentes tâches en cuisine et en accueil.</p>
                </div>
            </div>
            <div class="card alert alert-danger" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Opérateur Géomètre</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">IVEA SARL - Mayotte</h6>
                    <h6>Janvier 2021 - décembre 2021</h6>
                    <p class="card-text">Léver des points dans différents types de terrain</p>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <section id="formations" class="">
            <div class="text-center my-3">
                <h2 class="fs-1 text-uppercase fw-semibold text-primary">Mes formations</h2>
            </div>
            <article class="alert alert-info">
                <aside>
                    <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#devOps" aria-expanded="false" aria-controls="devOps">
                            Développeur Web
                        </button>
                    </p>
                </aside>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="devOps">
                        <div class="card card-body" style="width: 250px; box-sizing:border-box">
                            Formation continue à l'Ecole Européenne du Numérique, 100% en ligne en développement Web et Web mobile (RNCP 37674).
                        </div>
                    </div>
                </div>
            </article>
            <article class="alert alert-info">
                <aside>
                    <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#airplane" aria-expanded="false" aria-controls="airplane">
                            Intégrateur cabine Aéronautique
                        </button>
                    </p>
                </aside>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="airplane">
                        <div class="card card-body" style="width: 250px;">
                            Formation d'Intégrateur Cabine Aéronautique accéleré de 6 mois au sein de l'organisme AFPA BALMA, et obtenue mon CQPM.
                        </div>
                    </div>
                </div>
            </article>
            <article class="alert alert-info">
                <aside>
                    <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#coursera" aria-expanded="false" aria-controls="coursera">
                            Autres formations
                        </button>
                    </p>
                </aside>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="coursera">
                        <div class="card card-body" style="width: 250px;">
                            J'ai suivis différentes formations en ligne sur <a href="https://coursera.org" class="text-secondary">Coursera</a> dans le domaine numérique qui m'a bien initié et m'as permis de trouver ma passion professionnelle.
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>
    <div class="row">
        <section id="contact">
            <div class="text-center my-3">
                <h2 class="fs-1 text-uppercase fw-semibold text-primary">Me contacter</h2>
            </div>
            <div>
                <form action="" method="post">
                    <div>
                        <label class="form-label fs-1 my-3" for="email">Email</label>
                        <input class="form-control fs-2" type="email" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div>
                        <label class="form-label fs-1 my-3" for="subject">Subject</label>
                        <select class="form-select fs-2 text-center" name="subject" id="subject">
                            <option value="">Choose a subject</option>
                            <option value="devis">Devis</option>
                            <option value="informations">Informations</option>
                        </select>
                    </div>
                    <div>
                        <label class="form-label fs-1 my-3" for="message">Message</label>
                        <textarea class="form-control fs-2" name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <input type="checkbox" id="gpdr">
                        <label class="form-label fs-5 my-3" for="gpdr">I agree therms and conditions</label>
                    </div>
                    <div class="text-center my-3">
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</main>
<?php include_once 'includes/footer.php' ;?>