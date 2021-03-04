<main>
    <div class="container my-5">

        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bien joué !</strong> Le framework est correctement installé.
        </div>

        <?php foreach ($flashes as $flash): ?>
            <div class="alert alert-dismissible alert-<?=$flash->getType()?>">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?= $flash->getMessage() ?>
            </div>
        <?php endforeach; ?>

        <div class="jumbotron">
            <h1 class="display-4">Bienvenue sur le Framework MVC Neutrino</h1>
            <p class="lead">Ce framework a été développé par NeutronStars.</p>
            <hr class="my-4">
            <p>Pour en savoir plus, veuillez-vous référer sur le répertoire GitHub du framework.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="https://github.com/Neutron-Pro/neutrino-framework" role="button"><i class="fab fa-github"></i> GitHub</a>
            </p>
        </div>

    </div>
</main>
