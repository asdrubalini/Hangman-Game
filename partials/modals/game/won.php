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
                        Hai vinto la partita in <span class="elapsed-minutes"></span> minuti
                        e <span class="elapsed-seconds"></span> secondi secondi con <span class="errors-count"></span> errori.
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
