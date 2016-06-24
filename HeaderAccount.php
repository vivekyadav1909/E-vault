<?php
session_start();
$name = $_SESSION['uname'];
include('initialize.php');

//$query = mysql_query("select photo1 from users where uname='$name'");

//$fetch = mysql_fetch_array($query);
//$img = $fetch['photo1'];
?>

<html>
    <head>

    <!--    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <link href="css/jquery.bxslider.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript">
            $(document).ready(function() {
                $('.bxslider').bxSlider();
                setInterval(function() {
                    $(".bx-next").trigger("click");
                }, 3000);
            });
        </script>
	-->
    </head>

    <!--<body bgcolor="#F2F2F2">
        <div id="top">
            <div align="right" style="margin:0 auto; width:100%">
                <span><img src="image/mainlogo.png" style="width:500px;height:100px;"></span>
                <div id="subtop">
                                <span style="padding-left:1220px; position:relative; top:4px;"><img src="images1/logoff.png" style="width:20px; height:20px;"></span>
                                <span><b><a style="padding-left:1250px; position:relative; top:-22px; text-decoration:none; font-size:120%; color:black" href="logout.php">|<u>Logout</u>|</a></b></span>
                                <p><u>Logout</u></p>
                </div>
                                <p style="font-size:120%">--><!--<span style="position:relative; top:4px" ><img src="images1/logoff.png" style="width:20px; height:20px;"></span><span style="font-size:120%;"><a style="text-decoration:none; color:black" href="logout.php"><b><u>|Logout|</u></b></a></span>-->
    <!--        </div>
        </div>

        <div class="container">
            <!--<div id="text">
                Welcome!
            </div>
            <div style="clear:both">Welcome!</div>-->
   <!--         <div class="midhead" align="right" >
                <table>
                    <tr><td style="padding-top:60px; padding-right:5px; font-size:120%; font-family:Comic Sans MS"><i>User</i></td><td style="border: 2px groove #8A0808;"><span><img style="width:70px; height:80px" src="Upload/"></span></td></tr>
                </table>
                <br />-->
    <!--    <span><img src="image/logo.png"></span>-->
    <!--        </div>
            <div style="clear:both"></div>
            <div id="account-menu">
                <div class="menu">
                    <ul class="main">
                        <li class="list" style="position:relative; left:150px"><img class="line" src="image/dotdivider.png"><a class="link" href="Account.php">HOME</a><img class="line" src="image/dotdivider.png"></li>
                        <li class="list" style="position:relative; left:220px"><img class="line" src="image/dotdivider.png"><a class="link" href="#">MANAGE FILES</a><img style="position:relative; height:13px; left:-25px; top:1px;"  src="image/arrow-right-white.gif"><img class="line" src="image/dotdivider.png">
                            <ul class="hover">
                                <li><a href="Upload.php">Upload Files</a></li>
                                <li><a href="Retrieve.php">Retrieve Files</a></li>
                            </ul>
                        </li>
                        <li class="list" style="position:relative; left:290px"><img class="line" src="image/dotdivider.png"><a class="link" href="#">FILE SENDER</a><img style="position:relative; height:13px; left:-25px; top:1px;" src="image/arrow-right-white.gif"><img class="line" src="image/dotdivider.png">
                            <ul class="hover">
                                <li><a href="Send.php">Send Files To Users</a></li>
                                <li><a href="Received.php">Received Files From Users</a></li>
                            </ul>
                        </li>
                        <li class="list" style="position:relative; left:360px"><img class="line" src="image/dotdivider.png"><a class="link" href="#">MANAGE PROFILE</a><img  style="position:relative; height:13px; left:-25px; top:1px;" src="image/arrow-right-white.gif"><img class="line" src="image/dotdivider.png">
                            <ul class="hover">
                                <li><a href="Profile.php">View Profile</a></li>
                                <li><a href="premember.php">Manage membership</a></li>
                            </ul>
                        </li>                       
                    </ul>
                </div>
            </div>
            <div id="banner">    
                <ul style="margin-top:initial" class="bxslider">
                    <li><img src="slider-images/picto.png" /></li>
                    <li><img src="slider-images/houses.jpg" style="height:330px" /></li>
                    <li><img src="slider-images/hillside.jpg" /></li>
                </ul>
            </div>
    </body>-->
</HTML>