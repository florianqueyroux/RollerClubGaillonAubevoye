<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Administration</title>
        <link rel="stylesheet" href="/assets/css/admin.css">
    </head>
    <body>
        <div class="d-flex">
            <?php if($isConnected): ?>
                <div class="w-20 aside">
                    <?php include_once __DIR__ . '/header.php'; ?>
                </div>
            <?php endif; ?>
            <div class="w-80 mx-auto">
                <?= $view; ?>
            </div>
        </div>
    </body>
</html>