<header>
    <div class="logo">
        <img src="/assets/img/logo/logo-ecriture-roller-club-gaillon-aubevoye.webp" alt="Roller Club Gaillon Aubevoye">
        <img src="/assets/img/logo/logo-rcga.webp" alt="Logo RCGA">
    </div>
    <div>
        <nav id="navBar">
            <buttom id="burger"><i class="fas fa-bars"></i> Menu</buttom>
            <ul class="menu">
                <li class="menu-item<?= $router->isRoute("home") ? " active" : "" ?>">
                    <a href="<?=$router->get('home')?>">Le Club</a>
                </li>
                <li class="menu-item<?= $router->isRoute("roller") ? " active" : "" ?>">
                    <a href="<?=$router->get('roller')?>">Roller</a>
                </li>
                <li class="menu-item<?= $router->isRoute("rollerHockey") ? " active" : "" ?>">
                    <a href="<?=$router->get('rollerHockey')?>">Roller Hockey</a>
                </li>
                <li class="menu-item<?= $router->isRoute("tournois") ? " active" : "" ?>">
                    <a href="<?=$router->get('tournois')?>">Tournois</a>
                </li>
                <li class="menu-item<?= $router->isRoute("boutique") ? " active" : "" ?>">
                    <a href="<?=$router->get('boutique')?>">Boutique</a>
                </li>
                <li class="menu-item<?= $router->isRoute("contact") ? " active" : "" ?>">
                    <a href="<?=$router->get('contact')?>">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>


