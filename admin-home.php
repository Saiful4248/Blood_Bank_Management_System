<?php
require "connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="Header" align="center"><h2><a href="admin-home.php" style="text-decoration:none; color:white;">Blood Bank Management System</a></h2></div><br>
            <div id="Body">
                <br>
                <?php
                $un = $_SESSION['un'];
                if(!$un){
                    header("Location:index.php");
                }
                ?>
                <h1 align="center" style="border:5px;color:white;background-color:brown">Welcome Admin</h1><br><br>
                <ul>
                    <li><a href="donor-red.php">Donor Registration</a></li>
                    <li><a href="user-list.php">User List</a></li>
                    <li><a href="stock-blood-list.php">Stock Blood List</a></li>
                </ul><br><br><br><br><br><br><br>
                <ul>
                    <li><a href="donor-list.php">Donor List</a></li>
                    <li><a href="Requested-list.php">Requested Blood List</a></li>
                    <li><a href="logout.php">Log Out</a></li>

                </ul>
                
                
            </div>
            <div id="Footer"><h4 align="center">Be the reason for someone’s heartbeat.</h4>
        </div>
        </div>
    </div>
</body>
</html>
