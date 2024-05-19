<?php


?>

<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/all.css" rel="stylesheet"/>
        <script src="js/bootstrap.bundle.js"></script>
    </head>
    <body>
    <div class="row p-5">
        <div class="col-sm-2 text-center ">Online Voting System</div>
        <div class="col-sm-2 text-primary"> <a href="register.php">Register</a></div>


       
        <div class="col-sm-2 text-primary"> <a href="login.php">Login</a></div>
        <?php
      
        if($_SESSION['user']!=""){?>
            <div class="col-sm-2 text-primary"> <a href="logout.php">Logout</a></div>
        <?php
        }
        ?>
        <div class="col-sm-2 text-primary"> <a href="vote.php">Vote</a></div>
        <div class="col-sm-2 text-primary"> <a href="seeVote.php">See Votes</a></div>
      
   
    </div>