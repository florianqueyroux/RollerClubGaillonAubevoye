<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?=$router->get('home')?>">Neutrino</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item<?=$router->isRoute('home') ? ' active' : ''?>">
                        <a class="nav-link" href="<?=$router->get('home')?>">Accueil
                            <?php if($router->isRoute('home')): ?>
                                <span class="sr-only">(current)</span>
                            <?php endif; ?>
                        </a>
                    </li>

                    <li class="nav-item<?=$router->isRoute('contact') ? ' active' : ''?>">
                        <a class="nav-link" href="<?=$router->get('contact')?>">Contact
                            <?php if($router->isRoute('contact')): ?>
                                <span class="sr-only">(current)</span>
                            <?php endif; ?>
                        </a>
                    </li>
                </ul>
                <div class="my-2 my-lg-0">
                    <a href="https://github.com/Neutron-Pro/framework-mvc" target="_blank" class="ml-1"><i class="fab fa-github"></i></a>
                    <a href="https://discord.gg/vPMzZcu" target="_blank" class="ml-1"><i class="fab fa-discord"></i></a>
                    <a href="https://www.linkedin.com/in/alan-vion/" target="_blank" class="ml-1"><i class="fab fa-linkedin"></i></a>
                    <a href="https://twitter.com/Neutron_Stars_" target="_blank" class="ml-1"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCJCG0McLmkGEBCXf_pROlcw" target="_blank" class="ml-1"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </nav>
</header>
