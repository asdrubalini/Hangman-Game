<div class="row">
    <div class="col ">
        <h3 class="word-guess__title">Parola da indovinare</h3>
    </div>
</div>

<div class="row">
    <div class="col ">
        <div class="card padded-card">
            <div class="d-flex justify-content-center">
                <pre class="word-guess__word" id="word"><?php echo get_hidden_phrase(); ?></pre>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col ">
        <div class="card padded-card">
            <h5 class="word-guess__subtitle">Condannato</h5>

            <div class="word-guess__condemned">
                <img src="<?php echo get_condemned_image() ?>" id="condemned" class="img-fluid">
                <p>Tentativi rimasti: <span id="remaining-attempts"><?php echo get_remaining_attempts() ?></span></p>
            </div>
        </div>
    </div>

    <div class="col ">
        <div class="card padded-card">
            <h5 class="word-guess__subtitle">Cronologia del gioco</h5>

            <div class="word-guess__chronology" id="chronology">
                <?php include_once __DIR__ . "/guesses_list.php" ?>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col ">
        <div class="card padded-card">

            <div class="row">
                <div class="col ">
                    <h5 class="word-guess__subtitle">Gioca</h5>
                </div>
            </div>

            <div class="row">

                <div class="col">
                    <div class="card padded-card">
                        <h5 class="word-guess__subtitle">Soluzione</h5>

                        <div class="d-flex flex-row">
                            <input type="text" class="form-control" id="phrase-guess-input">
                            <button class="btn btn-primary" type="button" id="guess-phrase" style="margin-left: 5px">Invia</button>
                        </div> 
                    </div>
                </div>

                <div class="col">
                    <div class="card padded-card">
                        <h5 class="word-guess__subtitle">Lettera</h5>

                        <div class="d-flex flex-row">
                            <input type="text" class="form-control" id="letter-guess-input">
                            <button class="btn btn-primary" type="button" id="guess-letter" style="margin-left: 5px">Invia</button>
                        </div> 
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
