<?php include_once __DIR__ . "/../logic.php"; ?>
<?php $currentFile = basename($_SERVER['PHP_SELF']) ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Impiccato</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarExtra" aria-controls="navbarExtra" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarExtra">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item <?php echo $currentFile === 'index.php' ? 'active' : '' ?>">
                <a class="nav-link" href="index.php">Gioca</a>
            </li>

            <li class="nav-item <?php echo $currentFile === 'rules.php' ? 'active' : '' ?>">
                <a class="nav-link" href="rules.php">Regole</a>
            </li>

            <li class="nav-item <?php echo $currentFile === 'leaderboard.php' ? 'active' : '' ?>">
                <a class="nav-link" href="leaderboard.php">Leaderboard</a>
            </li>

        </ul>

    </div>

    <form class="form-inline">

        <!-- Stop the current game -->
        <?php if ($currentFile === "game.php") : ?>
            <button type="button" class="btn btn-danger" id="game-interrupt">Interrompi</button>
        <?php endif ?>

        <!-- Restart a game -->
        <?php if (is_playing() && $currentFile !== "game.php") : ?>
            <div class="col welcome__button">
                <button type="button" class="btn btn-primary" id="start-resume">Continua</button>
            </div>
        <?php endif ?>

    </form>

</nav>
