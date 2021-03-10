<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Roller Club Gaillon Aubevoye</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="stylesheet" href="/assets/css/style.css">
        <script src="/assets/js/app.js" defer></script>

    </head>
    <body class="<?= !empty($pageTournois) ? "body-tournois" : "" ?>"> <!--si la page tournoi fut defini et n'est pas vide/faux ?alors body tournoi :sinon body normal-->
        <?php
            include_once __DIR__ . '/header.php';
            echo $view;
            include_once __DIR__ . '/footer.php';
        ?>
    </body>
</html>
