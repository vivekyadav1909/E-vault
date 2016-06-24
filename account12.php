<html>

<head>
	<title></title>
	<link rel="stylesheet" href="stylesheet/accounts.css">
	<link rel="stylesheet" href="stylesheet/upload.css">
</head>

<body bgcolor="#0B0B61">

	<?php
        session_start();
        include("initialize.php");
        $uname = $_SESSION['uname'];

        $search = $_REQUEST['q'];
        $btn = $_REQUEST['btn'];
	?>

<div id="accounthead">
</div>

<div id="maindiv" >
<table style="background-image:url(stylesheet/images/locationback.jpg); background-repeat:no-repeat; background-size:1300px 700px;" CELLPADDING='1' cellspacing='1' width='1300' border='0' align='center'>
	<tr>
		<td width='200' valign='top' ><br><p align='center'>Welcome User..</p></td>
		<td align="center" style="padding-bottom:20px; padding-top:20px; padding-right:15px;">
		<form><p align='right'><input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton"></p></form>
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="CENTER">FILE SEND </td>
	</tr>
	
	<tr>
		<td height='600' valign='top' style="padding-left:38px; padding-top:25px;">
			<div id="header">
				<br><br>
				<a href='Account.php?file=images'><img src="stylesheet/images/imgbutton.jpg" /></a><br><br>
				<a href='Account.php?file=documents'><img src="stylesheet/images/docbutton.jpg" /></a><br><br>
				<a href='Account.php?file=videos'><img src="stylesheet/images/vidbutton.jpg" /></a><br><br>
				<a href='#'> &nbsp; <img src="stylesheet/images/custfolder.jpg" height="20" width="25" /></a><br><br>
				<a href='#'> MEMBERSHIP</a><br><br>
				<a href='#'> SETTINGS</a><br><br>
			</div>
		</td>
		<td valign='top' >
		<?php
            $dir = scandir("users/$uname");
            unset($dir[0], $dir[1]);
            foreach ($dir as $subdir) 
			{
				if ($subdir == "documents" || $subdir == "images" || $subdir == "videos")
                continue;
        ?>
		
		<?php include('files.php'); ?>
		
		
		<?php	//SEARCH
            $dir = scandir("users/$uname");
            unset($dir[0], $dir[1]);
            foreach ($dir as $subdir) 
			{
                $files = scandir("users/$uname/$subdir");
                foreach ($files as $file) 
				{
					if ($file == $search && isset($btn)) 
					{
                        echo "<a href='user/$uname/$subdir/$file'>$file</a>";
                        $data = $file;
                    }
                }
            }
			if ($data == '' && isset($btn)) {
				echo "<p>$search is not found</p>";
        }
        ?>
			<br><br><br>
		</td>
	</tr>
	
</table>


</div>

<div id="accountfoot">
</div>

</body>
</html>