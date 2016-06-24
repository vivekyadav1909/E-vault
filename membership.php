
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
<body>
        <?php
        include_once 'HeaderAccount.php';
		session_start();
        include("initialize.php");
		$cdate="$_SESSION[curdate]";
		$newselection=$_REQUEST["memberselect"];
		
		if($newselection==90)
			$NewDates=Date('y-m-d', strtotime("+90 days"));
		
		if($newselection==180)
			$NewDates=Date('y-m-d', strtotime("+180 days"));
		
		if($newselection==360)
			$NewDates=Date('y-m-d', strtotime("+360 days"));
					
					
		$query="update users set newdate='$NewDates' where uname='$_SESSION[uname]'";
        mysql_query($query);
         echo "<script type=text/javascript>";
            echo "if(confirm('Membership is Successfully Updated'))";
            echo "{";
            echo "location.href='Account.php?membership=true'";
            echo "}";
            echo "</script>";
//echo "Membership expires on $NewDate";
//if(strtotime($currentdate)>strtotime($NewDates))
//	echo "Your membership has expired";
//else
//	echo "You're Good!!";
?>

		
        <?php include_once 'Footer.php'; ?>
    </body>
</html>