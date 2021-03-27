<header>
    <img class="p-1" src="/assets/img/logo/logo-rcga.webp" alt="rcga">
    <nav>
        <ul class="nav-items">
            <li><a class="nav-item" href="<?= $router->get('admin.events') ?>">Événements</a></li>
            <li><a class="nav-item" href="<?= $router->get('admin.results.senior') ?>">Résultats Sr</a></li>
            <li><a class="nav-item" href="<?= $router->get('admin.results.junior') ?>">Résultats Jr</a></li>
            <li><a class="nav-item" href="<?= $router->get('admin.effectifs.senior') ?>">Seniors</a></li>
            <li><a class="nav-item" href="<?= $router->get('admin.effectifs.junior') ?>">Juniors</a></li>
        </ul>
    </nav>
</header>
