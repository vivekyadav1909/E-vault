<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" language="Javascript" src="sign.js"></script>
        <style type="text/css">
		.ftextinput{ margin: 0;	padding: 5px 15px;	font-family: Arial, Helvetica, sans-serif;	font-size:14px;	border:1px solid #0076a3; border-right:0px;	border-top-left-radius: 5px 5px;	border-bottom-left-radius: 5px 5px;	}
		.fbutton {	margin: 0;	padding: 5px 15px;	font-family: Arial, Helvetica, sans-serif;	font-size:14px;	outline: none;	cursor: pointer; text-align: center; text-decoration: none;
		color: #ffffff; border: solid 1px #0076a3; border-right:0px; background: #0095cd; background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5)); background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 3px 3px; border-top-left-radius: 3px 3px; border-bottom-right-radius: 3px 3px;	border-bottom-left-radius: 3px 3px;	}
		.fbutton:hover { text-decoration: none;	background: #007ead; background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e)); background: -moz-linear-gradient(top,  #0095cc,  #00678e);}
		/* Fixes submit button height problem in Firefox */
		.fbutton::-moz-focus-inner { border: 0;	}
		.fclear{	clear:both;	}
		
		.custom-upload { background-color: #008000;  border: 1px solid #006400;  border-radius: 4px;  cursor: pointer;  color: #fff;  padding: 4px 10px;}
		.custom-upload input { left: -9999px; position: absolute;}
		
		#prof{padding:5px; border:2px solid #ccc; -webkit-border-radius: 5px;  border-radius: 5px;}
		#prof:focus {border-color:#007ead; }
		
		table.passchange td { font-family: 'Bree Serif', serif; color: #414848; }
		table.passchange {margin-top:80px;}
		</style>
</head>
<?php

        include_once 'HeaderAccount.php';
        session_start();
        include("initialize.php");
        $query="select * from users where uname='$_SESSION[uname]'";
        $r=mysql_query($query);
        $result=mysql_fetch_array($r);
        if($result)
        {
            
            $a=$result["passw"];
            $b=$result["addr"];
            $c=$result["email"];
            $d=$result["mobile"];
        }
		?>
<body>
<table align="center" style="padding-top:140;">
<tr>
<td><a style="text-decoration:none;" href="Account.php?update=true"><input name="btn"  class="fbutton" style="width:180px; height:50px;" type="submit" value="Update Profile" /></a></td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
<td><a style="text-decoration:none;" href="Account.php?update=false"><input name="btn"  class="fbutton" style="width:180px; height:50px;" type="submit" value="Create Folder" /></a></td>
</tr>
</table>
</body>

</html>