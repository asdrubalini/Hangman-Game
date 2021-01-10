<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php include_once __DIR__ . "/../../logic.php" ?>

<div class="card padded-card">
    <span>Lettere:</span>

    <?php if (count($_SESSION["tried_chars"]) === 0) : ?>

        <span class="word-guess__chronology__empty">Nessuna lettera</span>

    <?php else : ?>

        <div class="word-guess__chronology__list">
            <?php foreach ($_SESSION["tried_chars"] as $char) : ?>
                <span class="badge badge-primary letter-badge"><?php echo strtoupper($char) ?></span>
            <?php endforeach ?>
        </div>

    <?php endif ?>
</div>

<div class="card padded-card">
    <span>Frasi:</span>


    <?php if (count($_SESSION["tried_phrases"]) === 0) : ?>

        <span class="word-guess__chronology__empty">Nessuna frase</span>

    <?php else : ?>

        <div class="word-guess__chronology__list">
            <?php foreach ($_SESSION["tried_phrases"] as $char) : ?>
                <span class="badge badge-primary phrase-badge"><?php echo ucwords($char) ?></span>
            <?php endforeach ?>
        </div>

    <?php endif ?>
</div>
