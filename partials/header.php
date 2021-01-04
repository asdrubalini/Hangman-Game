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

        <?php if ($currentFile === "game.php") : ?>
            <button type="button" class="btn btn-danger" id="game-interrupt">Interrompi</button>
        <?php endif ?>

    </form>

</nav>
