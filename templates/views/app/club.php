<?php $title = 'Roller Club Gaillon Aubevoye (RCGA)' ?>
<main class="container-xl">
    <h1>
        <span><span>R</span>oller </span>
        <span><span>C</span>lub </span>
        <span><span>G</span>aillon </span>
        <span><span>A</span>ubevoye</span>
    </h1>
    <div class="d-flex">
        <div class="w-25 p-1 d-md-none">
            <div class="sidebar">
                <h2>Événements</h2>
                <div class="sidebar-container">
                    <?php $first = true ?>
                    <?php foreach ($events as $categorie) :?>
                        <?php if(empty($categorie)){
                            continue;
                        } ?>
                        <?php if(!$first):?>
                            <hr>
                        <?php endif; $first = false?>
                        <div class="sidebar-category">
                            <h3><?= $categorie[array_key_first($categorie)]->getCategory()->getName() ?></h3>
                            <div class="sidebar-items">
                                <?php foreach ($categorie as $event) :?>
                                <div class="sidebar-item">
                                    <div class="d-flex sb">
                                        <p class="item-title"><?= $event->getTitle() ?></p>
                                        <p class="item-date"><?= $event->getDate()->format('d/m/Y') ?></p>
                                    </div>
                                    <p class="item-description"><?= $event->getDescription() ?></p>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

            </div>
        </div>
        <div class="w-75 p-1 w-md-100">
            <div class="carousel">
                <figure class="icon-cards mt-3">
                    <div class="icon-cards__content">
                        <div class="icon-cards__item d-flex align-items-center justify-content-center">
                            <img src="/assets/img/logo/logo-roller.webp" alt="Roller">
                        </div>
                        <div class="icon-cards__item d-flex align-items-center justify-content-center">
                            <img src="/assets/img/logo/logo-sr-jr.webp" alt="">
                        </div>
                        <div class="icon-cards__item d-flex align-items-center justify-content-center">
                            <img src="/assets/img/logo/logo-cupkidz.webp" alt="">
                        </div>
                        <div class="icon-cards__item d-flex align-items-center justify-content-center">
                            <img src="/assets/img/logo/logo-rcga.webp" alt="">
                        </div>
                    </div>
                </figure>
            </div>
            <div class="presentation py-1 px-2">
                <h2>Présentation du club</h2>
                <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate distinctio dolorem
                        dolores doloribus error esse eveniet incidunt inventore itaque laboriosam magni maiores, nihil
                        quam quas quo repudiandae saepe soluta, sunt?</span><span>Accusamus accusantium alias
                        asperiores beatae debitis delectus deleniti dicta distinctio eaque earum error, explicabo fuga
                        in ipsa ipsum modi necessitatibus nostrum nulla odit quae ratione, repellat repudiandae
                        temporibus vitae voluptatibus.</span><span>Animi architecto, cum ea fugiat illum ipsam ipsum
                        iusto maxime minus molestiae, natus nemo nesciunt nobis non nulla quia quo veritatis. Alias aut
                        dolorem exercitationem facilis ipsam minima nihil nulla?</span><span>Deleniti distinctio
                        expedita illo, ipsam iste laborum officia quo ratione velit? Consequuntur dignissimos in
                        laborum maiores mollitia possimus quibusdam sunt ullam voluptas. Amet culpa ea fugit impedit
                        iusto quas, repellendus.</span><span>Aliquid dolore, ducimus eaque earum eius expedita
                        laboriosam laborum modi nesciunt nostrum officia, qui rem. Amet at cupiditate deserunt ea, esse
                        impedit incidunt ipsam laboriosam nostrum omnis qui quia voluptas.</span><span>Aspernatur dolor
                        ducimus ex magnam maiores sapiente sequi sunt? Ab alias asperiores eligendi enim error
                        explicabo facere, facilis fugit illo maiores minima natus neque obcaecati officiis placeat
                        quaerat vel veritatis?</span><span>Aliquam esse eum id illo, iste necessitatibus non quas sint
                        sunt velit. Ab accusantium fugiat labore praesentium provident tempora vitae! Aliquid animi
                        debitis hic illum non omnis possimus sunt veniam!</span><span>Adipisci atque cupiditate ducimus
                        eos hic, illum ipsum iusto obcaecati quidem, quis quo tempora tempore unde velit, veritatis!
                        Eius est iusto maxime rem. Asperiores debitis quibusdam recusandae sunt totam voluptatum?</span>
                    <span>Accusantium animi architecto consequuntur corporis, eius facilis fugiat hic iusto magnam
                        magni necessitatibus neque nobis non nostrum officia officiis velit voluptas voluptates! Hic
                        id illo natus odio, perspiciatis tenetur vero.</span><span>Aliquam cumque deleniti, dolor eius
                        esse, fuga in numquam obcaecati odit placeat quasi, qui quia quo repellat repellendus sint
                        unde! Ad cupiditate in incidunt laudantium nostrum officiis, tempore veniam vero.</span></p>
            </div>
            <div class="section d-flex my-2">
                <div class="w-33 p-0-5 w-md-50">
                    <a class="d-block w-100 h-100" href="<?= $router->get('roller') ?>">
                        <figure class="border radius bg w-100 h-100 p-1">
                            <img src="/assets/img/logo/logo-roller.webp" alt="roller">
                            <figcaption>Le Roller</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="w-33 p-0-5 w-md-50">
                    <a class="d-block w-100 h-100" href="<?= $router->get('rollerHockey') ?>">
                        <figure class="border radius bg w-100 h-100 p-1">
                            <img src="/assets/img/logo/logo-roller-hockey-senior-roller-club-gaillon-aubevoye.webp"
                                 alt="Vikings Roller Hockey Sr">
                            <figcaption>Roller Hockey Sr</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="w-33 p-0-5 w-md-50">
                    <a class="d-block w-100 h-100" href="<?= $router->get('rollerHockey') ?>">
                        <figure class="border radius bg w-100 h-100 p-1">
                            <img src="/assets/img/logo/logo-roller-hockey-jeunesse-roller-club-gaillon-aubevoye.webp"
                                 alt="Vikings Roller Hockey Jr">
                            <figcaption>Roller Hockey Jr</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="w-33 p-0-5 w-md-50">
                    <a class="d-block w-100 h-100" href="<?= $router->get('tournois.valhallacup') ?>">
                        <figure class="border radius bg w-100 h-100 p-1">
                            <img src="/assets/img/logo/logo-valhallacup-roller-club-gaillon-aubevoye.webp"
                                 alt="Valhalla CUP">
                            <figcaption>Valhalla CUP</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="w-33 p-0-5 w-md-50">
                    <a class="d-block w-100 h-100" href="<?= $router->get('tournois.valhallakidz') ?>">
                        <figure class="border radius bg w-100 h-100 p-1">
                            <img src="/assets/img/logo/logo-valhallakidz-roller-club-gaillon-aubevoye.webp"
                                 alt="Valhalla Kid'Z">
                            <figcaption>Valhalla Kid'Z</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="w-33 p-0-5 w-md-50">
                    <a class="d-block w-100 h-100" href="<?= $router->get('boutique') ?>">
                        <figure class="border radius bg w-100 h-100 p-1">
                            <img src="/assets/img/logo/shop.webp" alt="Boutique RCGA">
                            <figcaption>La boutique</figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="leader my-2 py-1 px-2">
                <h2>L'équipe dirigeante du RCGA</h2>
                <div class="d-flex team-list">
                    <figure class="w-33 p-1 w-sm-100">
                        <img src="/assets/img/equipe/team2.jpg" alt="Florian QUEYROUX">
                        <figcaption>Florian QUEYROUX</figcaption>
                        <p>Président</p>
                    </figure>
                    <figure class="w-33 p-1 w-sm-100">
                        <img src="/assets/img/equipe/team1.jpg" alt="Frédérique LUC">
                        <figcaption>Frédérique LUC</figcaption>
                        <p>Trésorière</p>
                    </figure>
                    <figure class="w-33 p-1 w-sm-100">
                    <img src="/assets/img/equipe/team3.jpg" alt="François CABRERA">
                        <figcaption>François CABRERA</figcaption>
                        <p>Secrétaire</p>
                    </figure>
                </div>
                <div class="text-center">
                    <a class="btn" href="<?= $router->get('equipe') ?>">Voir plus...</a>
                </div>
            </div>
            <div class="partners py-1 px-2">
                <h2>Nos partenaires</h2>
                <div class="d-flex">
                    <a class="d-block w-50 p-2 w-sm-100" href="https://bauer-hockey.fr">
                        <img src="/assets/img/partenaires/logo-mission-hockey.webp" alt="MISSION">
                    </a>
                    <a class="d-block w-50 p-2 w-sm-100" href="http://creation.cdn.free.fr">
                        <img src="/assets/img/partenaires/logo-creation-design-numerique.webp" alt="CDN">
                    </a>
                    <a class="d-block w-50 p-2 w-sm-100" href="https://bauer-hockey.fr">
                        <img src="/assets/img/partenaires/logo-bauer-hockey.webp" alt="BAUER">
                    </a>
                    <a class="d-block w-50 p-2 w-sm-100" href="https://promoglace.com">
                        <img src="/assets/img/partenaires/logo-promoglace.webp" alt="MISSION">
                    </a>
                    <a class="d-block w-33 p-2 w-sm-100" href="https://www.normandie.fr">
                        <img src="/assets/img/partenaires/logo-region-normandie.webp" alt="Region Normandie">
                    </a>
                    <a class="d-block w-33 p-2 w-sm-100" href="https://eureennormandie.fr">
                        <img src="/assets/img/partenaires/logo-departement-eure.webp" alt="Département de l'Eure">
                    </a>
                    <a class="d-block w-33 p-2 w-sm-100" href="https://www.agglo-seine-eure.fr">
                        <img src="/assets/img/partenaires/logo-agglo-seine-eure.webp" alt="Agglo Seine Eure">
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
