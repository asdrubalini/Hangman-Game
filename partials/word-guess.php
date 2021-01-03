<div class="row">
    <div class="col-12">
        <div class="row">
            <h3 class="word-guess__title">Parola da indovinare</h3>
        </div>

        <div class="row">
            <pre class="word-guess__word">_____ ______</pre>
        </div>
    </div>
</div>

<div class="row">

    <div class="col">
        <h5 class="word-guess__subtitle">Condannato</h5>

        <img src="images/stages/7.png" class="img-fluid word-guess__condemned">
    </div>

    <div class="col">
        <h5 class="word-guess__subtitle">Cronologia del gioco</h5>

        <div class="word_guess__chronology" id="chronology">
            <?php foreach($_SESSION["tried_words"] as $word) : ?>
                <span><?php echo $word ?></span>
            <?php endforeach ?>
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
                <input type="text" id="phrase-guess-input">
            </div>

            <div class="col">
                <h5 class="word-guess__subtitle">Lettera</h5>
                <input type="text" id="letter-guess-input">
            </div>
        </div>

    </div>

</div>
