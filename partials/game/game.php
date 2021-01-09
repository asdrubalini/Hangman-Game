<!-- Won modal -->
<div class="modal fade" id="won-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Hai vinto!</h5>

                <button type="button" class="close" id="won-modal-close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        Hai vinto la partita in <span id="elapsed-minutes"></span> minuti
                        e <span id="elapsed-seconds"></span> secondi secondi con <span id="errors-count"></span> errori.
                        Desideri memorizzare il tuo tentativo nella leaderboard?
                    </div>

                    <div class="row leaderboard-username" id="leaderboard-ask-container">
                        <label for="leaderboard-username">Inserisci il tuo username</label>
                        <input type="text" class="form-control" id="leaderboard-username" name="leaderboard-username">

                        <button type="button" class="btn btn-primary leaderboard-username__button" id="leaderboard-username-add-button">Vai</button>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="won-modal-no">No</button>
                <button type="button" class="btn btn-primary" id="won-modal-leaderboard-button">Si</button>
            </div>

        </div>
    </div>
</div>

<!-- Lost modal -->
<div class="modal fade" id="lost-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Hai perso :(</h5>

                <button type="button" class="close" id="lost-modal-close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="lost-modal-no">No</button>
                <button type="button" class="btn btn-primary" id="lost-modal-yes">Si</button>
            </div>

        </div>
    </div>
</div>

<!-- Interrupt modal -->
<div class="modal fade" id="interrupt-modal" tabindex="-1" role="dialog" aria-labelledby="interrupt-modal-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interrupt-modal-label">Interrompi la partita</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>Sei sicuro di voler interrompere la partita?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" id="interrupt-modal-confirm">Si</button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="row">
            <h3 class="word-guess__title">Parola da indovinare</h3>
        </div>

        <div class="row">
            <pre class="word-guess__word" id="word"><?php echo get_hidden_phrase(); ?></pre>
        </div>
    </div>
</div>

<div class="row">

    <div class="col">
        <h5 class="word-guess__subtitle">Condannato</h5>

        <img src="<?php echo get_condemned_image() ?>" id="condemned" class="img-fluid word-guess__condemned">
    </div>

    <div class="col">
        <h5 class="word-guess__subtitle">Cronologia del gioco</h5>

        <div class="word-guess__chronology" id="chronology">
            <?php include_once __DIR__ . "/tried_chars_list.php" ?>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-12">

        <div class="row">
            <div class="col">
                <h5 class="word-guess__subtitle">Gioca</h5>
            </div>
        </div>

        <div class="row">

            <div class="col">
                <h5 class="word-guess__subtitle">Soluzione</h5>
                <input type="text" class="form-control" id="phrase-guess-input">
            </div>

            <div class="col">
                <h5 class="word-guess__subtitle">Lettera</h5>
                <input type="text" class="form-control" id="letter-guess-input">
            </div>
        </div>

    </div>

</div>