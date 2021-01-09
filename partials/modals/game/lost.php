<!-- Lost modal -->
<div class="modal fade" id="lost-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Hai perso</h5>

                <button type="button" class="close" id="lost-modal-close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        Hai perso la partita in <span class="elapsed-minutes"></span> minuti
                        e <span class="elapsed-seconds"></span> secondi secondi con <span class="errors-count"></span> errori.
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="lost-modal-close-button">Chiudi</button>
            </div>

        </div>
    </div>
</div>
