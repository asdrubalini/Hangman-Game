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
    <?php include_once __DIR__ . "/partials/navbar.php" ?>

    <div class="container rules">
        <div class="card padded-card">
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
                                <th scope="col">Modalità</th>
                                <th scope="col">Durata</th>
                                <th scope="col">Errori</th>
                                <th scope="col">Data</th>
                                <th scope="col">Frase</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php foreach ($data as $row) : ?>
                                <?php
                                
                                $durationMinutes = floor($row["duration"] / 60);
                                $durationSeconds = round($row["duration"] - ($durationMinutes * 60));

                                ?>

                                <tr>
                                    <td scope="row"><?php echo htmlspecialchars($row["username"]) ?></td>
                                    <td><?php echo ucwords($row["gamemode"]) ?></td>
                                    <td><?php echo $durationMinutes . "m " . $durationSeconds . "s" ?></td>
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
    </div>

    <?php include_once __DIR__ . "/partials/javascript.php" ?>
    <script src="js/leaderboard.js"></script>
</body>

</html>
