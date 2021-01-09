<?php session_start() ?>
<?php include_once __DIR__ . "/logic.php" ?>

<html>
    <head>
        <?php include_once __DIR__ . "/partials/head.php" ?>
    </head>

    <body>
        <?php include_once __DIR__ . "/partials/navbar.php" ?>

        <?php include_once __DIR__ . "/partials/modals/index/multiplayer.php" ?>
        <?php include_once __DIR__ . "/partials/modals/index/singleplayer.php" ?>
        <?php include_once __DIR__ . "/partials/modals/index/resume.php" ?>

        <!-- Hidden form used to simulate a GET-like POST redirect so we can hide parameters -->
        <form method="POST" action="game.php" style="display: none" id="submitGame">
            <input type="text" id="gamemode" name="gamemode">
            <input type="text" id="phrase" name="phrase">
        </form>

        <div class="container welcome">

            <div class="row">
                <div class="col-sm">
                    <p class="welcome__title">Impiccato</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <img class="img-fluid" src="images/logo.png">
                </div>

                <div class="col-sm">
                    <?php include_once __DIR__ . "/partials/rules.php" ?>
                </div>
            </div>

            <div class="row">
                <div class="col welcome__button welcome__button--left">
                    <button type="button" class="btn btn-primary" id="start-singleplayer">Singleplayer</button> 
                </div>

                <div class="col welcome__button welcome__button--right">
                    <button type="button" class="btn btn-primary" id="start-multiplayer">Multiplayer</button>
                </div>

            </div>

        </div>

        <?php include_once __DIR__ . "/partials/javascript.php" ?>
        <script src="js/welcome.js"></script>
    </body>

</html>
