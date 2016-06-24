<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
       <?php
         include("initialize.php");
       session_start();
        $passw=$_REQUEST["txtPassword"];
        $email=$_REQUEST["txtEmail"];
        $addr=$_REQUEST["txtAddress"];
        $mobile=$_REQUEST["txtMobile"];
		$photo=$_REQUEST["txtUpload"];
		
        $query="update users set passw='$passw',email='$email',addr='$addr',mobile='$mobile' where uname='$_SESSION[uname]'";
        mysql_query($query);
        	echo "<script type=text/javascript>";
			echo "if(confirm('Profile is Successfully Updated'))";
			echo "{";
			echo "location.href='Account.php'";
			echo "}";
			echo "</script>";
        ?>
    </body>
</html>
