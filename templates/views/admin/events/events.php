<main>
    <h1>Liste des événements</h1>

    <?php foreach ($flashes as $flash) : ?>
        <div class="alert alert-<?= $flash->getType() ?>">
            <?= $flash->getMessage() ?>
        </div>
    <?php endforeach; ?>

    <a class="btn" href="<?= $router->get('admin.events.new') ?>">Ajouter un événement</a>
    <div class="d-flex">

        <?php foreach ($events as $event): ?>
            <div class="p-1 w-33">
                <div class="bg border radius p-2 h-100">
                    <div class="p-relatif">

                        <?php if($event->isCancel()) :?> // Si l'event est annulé alors l'image apparait
                            <img class="p-absolute h-100 w-auto" src="/assets/img/logo/cancel.png" alt="Annulé">
                        <?php endif ?>

                        <h3><?= $event->getCategory()->getName() ?></h3>
                        <h4><?= $event->getTitle() ?></h4>
                        <p><?= $event->getDescription() ?></p>
                        <hr>
                        <p>Début : <?= $event->getBegin()->format('d/m/Y') ?></p>
                        <p>Fin : <?= $event->getEnd()->format('d/m/Y') ?></p>
                    </div>
                    <div class="btn-items">
                        <a class="btn" href="<?= $router->get('admin.events.edit', ['id'=>$event->getId()]) ?>">Éditer</a>
                        <form action="<?= $router->get('admin.events.edit.cancel', ['id'=>$event->getId()]) ?>" method="post">
                            <input type="hidden" name="_token" value="<?= $xsrf ?>">
                            <input type="hidden" name="cancel" value="<?= $event->isCancel() ? '0' : '1' ?>">
                            <input class="btn" type="submit" name="submitted"
                                   value="<?= $event->isCancel() ? 'Activer' : 'Annuler' ?>">
                        </form>
                        <a class="btn" href="#">Supprimer</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</main>
