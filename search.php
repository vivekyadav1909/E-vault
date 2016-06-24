
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
		table.uploadeddis td { height:30px; font-family: 'Bree Serif', serif; color: #414848; border-left: dashed;}
		table.uploadeddis {margin-top:80px;}
		table.uploadeddis a:link {font-family:Arial; color:#21748A;text-decoration:none; font-size:16px;}
		table.uploadeddis a:visited {font-family:Arial; color:#21748A; text-decoration:none}
		table.uploadeddis a:hover {font-size:18px;}
		
</style>
</head>
<body>
<div>
<table class="uploadeddis" align="center" width="450" border="0" cellpadding="1">
  <tbody>
	<tr>
		<td align="center" style="font-family: 'Bree Serif', serif; padding-top:20px; padding-bottom:10px; background:#007ead; border:2px groove #414848; border-radius:5px; height:40px; width:440px" colspan="3">
			<h3 style="color:#FAFAFA;">Search Result!<h3>
		</td>
	</tr>
    <tr style="font-size:18px; font-weight:900;">
      <td align="center" style="padding-left: 15px; border-bottom:dashed; width:80px; ">S.No</td>
      <td align="center" style="padding-left: 15px; border-bottom:dashed; padding-bottom:10px; padding-top:10px; border-right:dashed; ">File Name</td>
      <td align="center" style="padding-left: 15px; border-left:none; border-bottom:dashed; padding-bottom:10px; padding-top:10px; border-right:dashed; ">Location</td>
    </tr>
    <tr></tr><tr></tr>
<?php		//SEARCH FILES
	$dir = scandir("users/$uname");
    unset($dir[0], $dir[1]);
	$it=1;
	foreach ($dir as $subdir) 
	{   $files = scandir("users/$uname/$subdir");
	    foreach ($files as $file) 
		//strpos($file,$search)!==false  $file == $search
		{	if (strpos($file,$search)!==false && isset($btn)) 
		{	
			echo "<tr>";
			echo "<td align='center'>";
			echo $it;
			echo "</td>";
			echo "<td style='padding-left:15px; border-right:dashed;'>";
			echo "<a href='user/$uname/$subdir/$file'>$file</a>";
            $data = $file;
			echo "</td>";	
			echo "<td style='border-right:dashed; border-left:none;' align='center'>";
			echo $subdir;
			echo "</td>";		
			echo "</tr>";
			$it++;
        }
    	}
    }
    if ($data == '' && isset($btn)) 
	{
		echo "<tr>";
		echo "<td align='center'></td>";
		echo "<td style='padding-left:15px; border-right:dashed;'>";
    	echo "$search is not found";
		echo "</td>";
		echo "<td style='border-right:dashed; border-left:none;' align='center'></td>";
		echo "</tr>";
    }
 ?>
 <tr><td colspan="3" style="border-top:dashed; border-left-width:0px;">&nbsp;</td>
        </tr>
 
</table>
</div>
</body>