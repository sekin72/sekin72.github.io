<?php
session_start();
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
    <a class="navbar-brand" href="#">Football Database</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index_homescreen.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index_players_list.php">Players</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index_club_list.php">Clubs</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index_leagues_list.php">Leagues</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index_games_list.php">Games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index_director_myteam.php">My Team <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index_offer.php">Other Team's Players <span class="sr-only">(current)</span></a>
            </li>
    </div>
    </ul>

    <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Aziz Yıldırım<span class="sr-only">(current)</span></a>
            </li>

            <p><button type="button" class="btn btn-info" data-toggle="modal" data-target="#signup"><b>Edit Profile</b></button></p>

    </form>
</nav>

<div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-primary">Edit Your Profile</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form  method="post" action="" role="form" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-md-3">Your Name *:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" value="" placeholder="Please Enter Your Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email address *:</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password *:</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" value="" placeholder="Please Enter Your password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Retype Password *:</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="repassword" value="" placeholder="Please Enter Retype Your password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <input type="submit" name="Edit" value="Edit" class="btn btn-info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<main role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well login-box">
                    <form action="">
                        <legend>Offer Transfer to Player</legend>
                        <div class="form-group">
                            <label <th>Your Club Budget: 1.000.000</th> </label></br>

                            <label for="Player ID">Player ID</label>
                            <input value='' id="Player ID" placeholder="ID" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="Your Transfer-Fee">Your Transfer-Fee</label>
                            <input id="Your Transfer-Fee" value='' placeholder="Fee" type="text" class="form-control" />
                        </div>
                        <div class="form-group text-center">
                            <p><button type="button" class="btn btn-info" data-toggle="modal" data-target="#offer"><b>Offer!</b></button></p>

                            <button class="btn btn-danger btn-cancel-action">Cancel</button>



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- buraya if else gelecek eğer club budget=> transfer fee offer Sent! else your club budget is not enough for this transfer -->
    <div class="modal fade" id="offer" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-primary">Offer Sent!</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <div class="panel panel-danger" style="min-height:90%" >
        <div class="panel-body" style="text-align:center;margin: auto;width: 100%;   padding: 10px;">
            <div class="col-md-6" style="width:100%">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Person ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Date of Birth</th>
                        <th>Team</th>
                        <th>Uniform Number</th>
                        <th>Nationality</th>
                        <th>Captain</th>
                        <th>Agent</th>
                        <th>Position</th>
                    </tr>
                    </thead>

                    <?php

                    echo "<tbody style= 'text-align:left'>";

                    $printPlayer = "SELECT * FROM player";

                    $mysql = new mysqli('localhost','root', '' ,'mysql');
                    $resultplayer = $mysql->query('SELECT * FROM player,person WHERE person_id=player_id and team != 1 ORDER BY person_id');

                    while($row = $resultplayer->fetch_array()){
                        $playerid = $row['player_id'];
                        $team = $row['team'];
                        $unino = $row['uniform_number'];
                        $nat = $row['nationality'];
                        $cap = $row['captain'];
                        $agent = $row['agent'];
                        $position = $row['position'];
                        $name = $row['first_name'];
                        $surname = $row['last_name'];
                        $age = $row['age'];
                        $birth = $row['date_of_birth'];

                        echo "<tr>
                                        <td>$playerid</td>
                                        <td>$name $surname</td>
                                        <td>$age</td>
                                        <td>$birth</td>
                                        <td>$team </td>
                                        <td>$unino</td>
                                        <td>$nat</td>
                                        <td>$cap</td>
                                        <td>$agent</td>
                                        <td>$position</td>
                                </tr>";
                    }
                    echo "</tbody>";

                    ?>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>





        <!-- Example row of columns -->
    <div class="container">
        <!-- Example row of columns -->

        <div class="row">
            <div class="col-md-4">
                <h2>Injured Players</h2>
                <p>Players that have been injured in recent games...</p>
                <p><a class="btn btn-secondary" href="injured_players.php" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Latest Transfers</h2>
                <p> Overview of the most recent transfers...</p>
                <p><a class="btn btn-secondary" href="latest_transfers.php" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>The Richest Clubs</h2>
                <p> Overview of top 10 richest clubs...</p>
                <p><a class="btn btn-secondary" href="richest_clubs.php" role="button">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->

        <hr>

    </div> <!-- /container -->

</main>

<div class="jumbotron">
    <div class="container ">
        <div class="row">
            <div class="col-md-3"></div>
            <input class="form-control mr-sm-2" type="text" placeholder="Search a Player" aria-label="Search">
            <button type="button" class="btn btn-success">Search</button>
            <button type="button" class="btn btn-primary btn-lg">See All Players</button>
            <div class="col-md-3"></div>

            </form>
        </div>
    </div>


    <footer class="container">
        <p> Group 9</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>