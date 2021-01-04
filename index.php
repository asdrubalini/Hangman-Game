<?php include_once __DIR__ . "/logic.php" ?>

<html>

    <head>
        <?php include_once __DIR__ . "/partials/head.php" ?>
    </head>

    <body>
        <?php include_once __DIR__ . "/partials/header.php" ?>

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
                        <p>Gioca contro il computer. La frase verrà generata automaticamente</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                        <button type="button" class="btn btn-primary" id="singleplayer-launch-game">Avvia la partita</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resume modal -->
        <div class="modal fade" id="resume-modal" tabindex="-1" role="dialog" aria-labelledby="resume-modal-label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="resume-modal-label">Riprendi la partita</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p>Riprendi la partita che stavi giocando</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                        <button type="button" class="btn btn-primary" id="resume-launch-game">Avvia la partita</button>
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

                    <div class="row">
                        <div class="col welcome__buttons">
                            <button type="button" class="btn btn-primary welcome__button" id="start-singleplayer">Singleplayer</button>                

                            <button type="button" class="btn btn-primary welcome__button" id="start-multiplayer">Multiplayer</button>

                            <?php if (is_playing()) : ?>
                                <button type="button" class="btn btn-primary welcome__button" id="start-resume">Continua</button>
                            <?php endif ?>
                        </div>
                    </div>

                    <div class="row">
                        <img class="img-fluid" src="images/logo.png">
                    </div>
                    
                </div>

                <div class="col-sm">
                    <?php include_once __DIR__ . "/partials/rules.php" ?>
                </div>

            </div>


        </div>

        <?php include_once __DIR__ . "/partials/javascript.php" ?>
        <script src="js/welcome.js"></script>
    </body>

</html>
