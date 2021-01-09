<?php
session_start();

$sort = isset($_GET["sort"]) ? $_GET["sort"] : "duration";

include_once __DIR__ . "/database.php";
$data = database_fetch_results($sort);
?>

<html>

<head>
    <?php $titleExtra = "Leaderboard" ?>
    <?php include_once __DIR__ . "/partials/head.php" ?>
</head>

<body>
    <?php include_once __DIR__ . "/partials/header.php" ?>

    <div class="container rules">
        <div class="row">
            <div class="col">
                <div class="btn-group btn-group-toggle" data-toggle="Sort">
                    <label id="duration" class="selector btn btn-secondary <?php echo $sort === 'duration' ? 'active' : '' ?>"">Durata</label>
                    <label id="attempts" class="selector btn btn-secondary <?php echo $sort === 'attempts' ? 'active' : '' ?>">Tentativi</label>
                    <label id="date" class="selector btn btn-secondary <?php echo $sort === 'date' ? 'active' : '' ?>"">Più recenti</label>
                </div>
            </div>        
        </div>

        <div class="row">
            <div class="col">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Gamemode</th>
                            <th scope="col">Duration (seconds)</th>
                            <th scope="col">Attempts</th>
                            <th scope="col">Date</th>
                            <th scope="col">Phrase</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($data as $row) : ?>
                            <tr>
                                <th scope="row"><?php echo htmlspecialchars($row["username"]) ?></th>
                                <td><?php echo ucwords($row["gamemode"]) ?></td>
                                <td><?php echo round($row["duration"], 3) ?></td>
                                <td><?php echo $row["attempts"] ?></td>
                                <td><?php echo date("Y-m-d H:i:s", $row["date"]) ?></td>
                                <td><?php echo htmlspecialchars($row["phrase"]) ?></td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>

    <?php include_once __DIR__ . "/partials/javascript.php" ?>
    <script src="js/leaderboard.js"></script>
</body>

</html>
