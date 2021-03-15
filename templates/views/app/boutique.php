<main id="shop" class="container">
    <h1>La Boutique du club</h1>
    <a href="<?= $router->get('boutique.rcga') ?>">
        <div class="d-flex items-center p-2 px-sm-1">
            <img class="w-30 w-sm-100" src="/assets/img/boutique/bonnet-rcga.webp" alt="Bonnet RCGA">
            <div class="w-70 w-sm-100">
                <h2>Le textile du club</h2>
                <p class="p-1">Retrouvez toute la gamme textille à l'image du RCGA.</p>
                <p class="p-1">Le club propose une grande variété de produit pour satisfaire petit & grand</p>
                <p class="p-1">Casquette / Bonnet / Echarpe / Sweat / t-shirt / Mug</p>
                <p class="p-1">Demandez votre produit en arrivant à l'accueil du club</p>
            </div>
        </div>
    </a>
    <a href="<?= $router->get('boutique.hockey') ?>">
        <div class="d-flex items-center p-2 px-sm-1 flex-sm-reverse"> <!--mot cle: flex format:sm fonction: reverse-->
            <div class="w-70 w-sm-100">
                <h2>Le coin du hockeyeur</h2>
                <p class="p-1">Retrouvez toute la gamme des produits pour le hockey</p>
                <p class="p-1">Maillot / Pantalon / Crosse / Tape / Roues /</p>
                <p class="p-1">Maillot & Pantalon sur commande</p>
            </div>
            <img class="w-30 w-sm-100" src="/assets/img/boutique/maillot-hockey-senior-vikings-domicile.webp"
                 alt="Maillot hockey vikings senior">
        </div>
    </a>
</main>