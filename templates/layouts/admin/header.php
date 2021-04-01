<header>
    <img class="p-1" src="/assets/img/logo/logo-rcga.webp" alt="rcga">
    <nav>
        <ul class="nav-items">
            <h2>Le club</h2>
            <li><a class="nav-item" href="<?= $router->get('admin.events') ?>">Événements</a></li>
            <h2>Les seniors</h2>
            <li><a class="nav-item" href="<?= $router->get('admin.results.senior') ?>">Résultats</a></li>
            <li><a class="nav-item" href="<?= $router->get('admin.effectifs.senior') ?>">Effectif</a></li>
            <li><a class="nav-item" href="#">Palmarès</a></li>
            <h2>Les Juniors</h2>
            <li><a class="nav-item" href="<?= $router->get('admin.results.junior') ?>">Résultats</a></li>
            <li><a class="nav-item" href="<?= $router->get('admin.effectifs.junior') ?>">Effectif</a></li>
            <li><a class="nav-item" href="#">Palmarès</a></li>
        </ul>
    </nav>
</header>
