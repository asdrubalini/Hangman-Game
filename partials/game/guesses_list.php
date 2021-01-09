<?php session_start() ?>
<?php include_once __DIR__ . "/../../logic.php" ?>

<div class="card padded-card">
    <span>Lettere:</span>

    <div class="word-guess__chronology__list">
        <?php foreach ($_SESSION["tried_chars"] as $char) : ?>
            <span class="badge badge-primary letter-badge"><?php echo strtoupper($char) ?></span>
        <?php endforeach ?>
    </div>
</div>

<div class="card padded-card">
    <span>Frasi:</span>
    
    <div class="word-guess__chronology__list">
        <?php foreach ($_SESSION["tried_phrases"] as $char) : ?>
            <span class="badge badge-primary phrase-badge"><?php echo ucwords($char) ?></span>
        <?php endforeach ?>
    </div>
</div>
