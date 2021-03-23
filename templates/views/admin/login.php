<main>
    <?php if(!empty($error)): ?>
    <div>
        <?= $error ?>
    </div>
    <?php endif; ?>
    <?= $form -> toHTML() ?>
</main>