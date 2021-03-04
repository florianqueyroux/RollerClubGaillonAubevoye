<main>
    <div class="container my-5">
        <h1 class="text-center">Page de contact</h1>

        <div class="row my-5">
            <div class="col-12 col-md-8 offset-md-2">
                <?php if(!empty($success)): ?>
                    <div class="alert alert-dismissible alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?= $success ?>
                    </div>
                <?php endif; ?>
                <?= $form->toHTML() ?>
            </div>
        </div>
    </div>
</main>
