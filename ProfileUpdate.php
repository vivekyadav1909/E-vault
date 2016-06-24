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

        $uname = $_SESSION['uname'];
        $img = '';
        $query = "select * from users where uname='$uname'";
        $r = mysql_query($query);
        $result = mysql_fetch_array($r);

        if (!empty($result)) {
            $img = $result['photo1'];
        }
        
        $i=0;
        $query2 = "select * from users";
        $rslt = mysql_query($query2);
        while ($result1 = mysql_fetch_array($rslt)) {
            if ($result1['photo1'] == $img) {
                $i++;
            }
        }
        
        $passw = $_REQUEST["txtPassword"];
        $email = $_REQUEST["txtEmail"];
        $addr = $_REQUEST["txtAddress"];
        $mobile = $_REQUEST["txtMobile"];
        $photo = $_FILES["txtPhoto"]["name"];

        if ($photo == '') {
            $photo = $img;
        }
        $query1 = "update users set passw='$passw',email='$email',addr='$addr',mobile='$mobile',photo1='$photo' where uname='$uname'";
        mysql_query($query1);
        move_uploaded_file($_FILES["txtPhoto"]["tmp_name"], "Userpics/" . $_FILES["txtPhoto"]["name"]);

        if ($img != '' && $photo != $img && $i<=1) {
            unlink("Userpics/$img");
        }
        echo "<script type=text/javascript>";
        echo "if(confirm('Profile is Successfully Updated'))";
        echo "{";
        echo "location.href='Account.php'";
        echo "}else{";
	echo "location.href='Account.php'";
	echo "}";
        echo "</script>";
        ?>
    </body>
</html>
