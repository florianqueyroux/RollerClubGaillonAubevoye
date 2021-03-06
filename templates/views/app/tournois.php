<?php $title = 'Les Tournois - Roller Club Gaillon Aubevoye' ?>
<main id="tournois" class="container">
    <h1>Les Tournois</h1>
    <a href="<?= $router->get('tournois.valhallacup') ?>">
        <div class="d-flex items-center p-2 px-sm-1">
            <img class="w-30 w-sm-100" src="/assets/img/logo/logo-valhallacup-rcga.webp" alt="Logo Valhalla CUP">
            <div class="w-70 w-sm-100">
                <h2>Valhalla CUP</h2>
                <p class="p-1"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore dolorum enim inventore.
                        Accusamus aliquam, assumenda aut distinctio error laborum libero minus modi mollitia
                        perspiciatis placeat quasi quo rerum, sint, suscipit?</span><span>Alias dolor dolorem ducimus
                        maxime quisquam reiciendis suscipit. Aliquid, consequatur cumque ducimus eos esse labore
                        officia officiis quae quisquam, repellendus tempora, vero? Amet, aperiam hic iste magnam minus
                        sit voluptates.</span><span>Architecto deserunt illum iusto maxime possimus, suscipit vitae.
                        Animi consequatur dicta ea fugit laudantium nobis obcaecati, perferendis tempore ullam. Aut
                        blanditiis eveniet ipsam ipsum maiores nihil, odit sapiente sint sunt?</span></p>
            </div>
        </div>
    </a>
    <a href="<?= $router->get('tournois.valhallakidz') ?>">
        <div class="d-flex items-center p-2 px-sm-1 flex-sm-reverse"> <!--mot cle: flex format:sm fonction: reverse-->
            <div class="w-70 w-sm-100">
                <h2>Valhalla Kid'Z</h2>
                <p class="p-1"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore dolorum enim inventore.
                        Accusamus aliquam, assumenda aut distinctio error laborum libero minus modi mollitia
                        perspiciatis placeat quasi quo rerum, sint, suscipit?</span><span>Alias dolor dolorem ducimus
                        maxime quisquam reiciendis suscipit. Aliquid, consequatur cumque ducimus eos esse labore
                        officia officiis quae quisquam, repellendus tempora, vero? Amet, aperiam hic iste magnam minus
                        sit voluptates.</span><span>Architecto deserunt illum iusto maxime possimus, suscipit vitae.
                        Animi consequatur dicta ea fugit laudantium nobis obcaecati, perferendis tempore ullam. Aut
                        blanditiis eveniet ipsam ipsum maiores nihil, odit sapiente sint sunt?</span></p>
            </div>
            <img class="w-30 w-sm-100" src="/assets/img/logo/logo-valhallakidz-rcga.webp" alt="Logo Valhalla Kid'Z">
        </div>
    </a>
</main>