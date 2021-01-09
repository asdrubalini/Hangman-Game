<?php session_start() ?>

<html>
    <head>
        <?php $titleExtra = "Regole" ?>
        <?php include_once __DIR__ . "/partials/head.php" ?>
    </head>

    <body>
        <?php include_once __DIR__ . "/partials/navbar.php" ?>

        <div class="container rules">
            <div class="row">
                <div class="col-sm">
                    <?php include_once __DIR__ . "/partials/rules.php" ?>
                </div>
            </div>
        </div>

        <?php include_once __DIR__ . "/partials/javascript.php" ?>
    </body>

</html>
