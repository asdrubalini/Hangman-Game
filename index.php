<html>

<head>

    <?php include "partials/head.php" ?>

</head>

<body>

    <!-- Multiplayer modal -->
    <div class="modal fade" id="multiplayer-modal" tabindex="-1" role="dialog" aria-labelledby="multiplayer-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="multiplayer-modal-label">Modalità multiplayer</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Gioca contro un'altro giocatore. La frase verrà inserita dal player 2.</p>
                    <form>
                        <div class="form-group">
                            <input class="form-control" id="userInputPhrase" placeholder="Inserisci la frase da indovinare">
                            <small class="form-text text-muted" id="modal-other-player-hint">Assicurati che l'altro giocatore non veda la frase che hai scritto!</small>
                            <small class="form-text text-danger" id="modal-empty-error-hint" style="display: none">Devi inserire una o più parole!</small>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                    <button type="button" class="btn btn-primary" id="multiplayer-launch-game">Avvia la partita</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Singleplayer modal -->
    <div class="modal fade" id="singleplayer-modal" tabindex="-1" role="dialog" aria-labelledby="singleplayer-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="singleplayer-modal-label">Modalità singleplayer</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Gioca contro il computer. La frase verrà generata automaticamente.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                    <button type="button" class="btn btn-primary" id="singleplayer-launch-game">Avvia la partita</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Hidden form used to simulate a GET-like POST redirect so we can hide parameters -->
    <form method="POST" action="game.php" style="display: none" id="submitGame">
        <input type="text" id="gamemode" name="gamemode">
        <input type="text" id="phrase" name="phrase">
    </form>

    <div class="container welcome">

        <div class="row">
            <p class="welcome__title">Impiccato</p>
        </div>

        <div class="row">

            <div class="col-sm">
                <img class="img-fluid" src="images/logo.png">
            </div>

            <div class="col-sm">
                <h2>Regole del gioco</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et metus et eros vestibulum dictum sed vel purus. Morbi ante enim, placerat vitae finibus a, mollis eu mauris. Aliquam erat volutpat. Nulla vel diam quis felis lacinia vulputate id et libero. Cras maximus, tortor tempor aliquam auctor, massa nibh facilisis lectus, quis cursus nulla tortor in turpis. Aenean sed iaculis ipsum. Aliquam ut mi felis. Proin sed efficitur orci. Donec vestibulum purus in sodales aliquam. Quisque aliquet volutpat accumsan. Nam euismod urna eu massa laoreet blandit.</p>
                <p>Sed non dui id lacus eleifend posuere ut ac justo. Donec et nulla eget orci pulvinar tempor. Proin id ante dictum, interdum eros id, gravida ligula. Etiam pulvinar massa in elit tempor, id bibendum ligula scelerisque. Donec eget sollicitudin est. Vivamus scelerisque posuere massa, at malesuada erat feugiat sed. Mauris velit tortor, gravida at gravida vestibulum, lobortis cursus nisl. Pellentesque bibendum quis lectus a mattis. Nam ultrices orci ut nisi aliquam, non varius massa efficitur. Vestibulum ac nulla posuere, maximus nibh vitae, feugiat diam. Sed a pellentesque metus, vitae vestibulum justo. Phasellus mauris augue, scelerisque in sollicitudin sed, aliquet sed risus. Duis pretium turpis ut tortor iaculis, sit amet malesuada neque rhoncus. Quisque non risus vel mauris pulvinar pretium vel sed velit. Curabitur vel odio in quam lobortis porttitor.</p>

                <ul>
                    <li>Ciao</li>
                    <li>Ciao</li>
                    <li>Ciao</li>
                    <li>Ciao</li>
                    <li>Ciao</li>
                </ul>
            </div>

        </div>

        <div class="row">
            <div class="col welcome__button welcome__button--single">
                <button type="button" class="btn btn-primary" id="start-singleplayer">Single player</button>
            </div>

            <div class="col welcome__button welcome__button--multi">
                <button type="button" class="btn btn-primary" id="start-multiplayer">Multiplayer</button>
            </div>

        </div>

    </div>

    <?php include "partials/javascript.php" ?>
    <script src="js/welcome.js"></script>
</body>

</html>
