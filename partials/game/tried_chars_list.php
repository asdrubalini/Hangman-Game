<?php include_once __DIR__ . "/../../logic.php" ?>

<?php foreach ($_SESSION["tried_chars"] as $char) : ?>
    <span class="badge badge-primary letter-badge"><?php echo strtoupper($char) ?></span>
<?php endforeach ?>
