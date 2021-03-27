<main>
    <h1>Liste des événements</h1>
    <a class="btn" href="#">Ajouter un événement</a>
    <div class="d-flex">
        <?php foreach ($events as $event): ?>
            <div class="p-1 w-33">
                <div class="bg border radius p-2 h-100">
                    <h3><?= $event->getCategory()->getName() ?></h3>
                    <h4><?= $event->getTitle() ?></h4>
                    <p><?= $event->getDescription() ?></p>
                    <div>
                        <a class="btn" href="#">Éditer</a>
                        <a class="btn" href="#">Annuler</a>
                        <a class="btn" href="#">Supprimer</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</main>
