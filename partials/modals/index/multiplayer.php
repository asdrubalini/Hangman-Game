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
                <p>Gioca contro un altro giocatore. La frase verrà inserita dal player 2.</p>
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