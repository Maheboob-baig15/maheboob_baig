<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location:../");
    }
?>



<html>
    <head>
        <title>Online Voting System - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>

    <div>
        <button id="backbtn">Back</button>
        <button id="logoutbtn">Logout</button>
        <h1>Online Voting System</h1>
    </div>
        <hr>
        <div id="profile"></div>
        <div id="Group"></div>
    </body>
</html>