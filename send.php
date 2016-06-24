<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
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
		</style>
    </head>
    <body>
        <?php
        include_once 'HeaderAccount.php';
        session_start();
        ?>
       
        &nbsp;&nbsp;

        <div id="page">
            <div class="box">
                <center>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <form name="" onsubmit="" enctype="multipart/form-data" action="SendAuthenticate.php" method="post">
                <table style="height: 130px; width: 460px; margin-top: 50px;">
                <tr>
                 	<td align="center" style="font-family: 'Bree Serif', serif; padding-top:20px; padding-bottom:10px; background:#007ead; border:2px groove #414848; border-radius:5px; height:40px; width:440px" colspan="3">
                    	<h3 style="color:#FAFAFA;">Send Files<h3>
                    </td>
                </tr>    
                
                <tr><td></td></tr>
                
                <tr>
	                <td style="padding-left: 15px; font-family: 'Bree Serif', serif; color: #414848; border-left: dashed;">Select File Category</td>
    	            <td>:</td>
        	        <td style="color: #414848; border-right: dashed;">
            	        <select name="txtCategory">
							<option value="Documents">Documents</option>
                    	    <option value="Images">Images</option>
                        	<option value="Videos">Videos</option>
	                    </select>
    	            </td>
				</tr>
            
            <tr>
                <td style="padding-left: 15px; font-family: 'Bree Serif', serif; color: #414848; border-left: dashed;">Select Users</td>
                <td>:</td>
                <td style="color: #414848; border-right: dashed;">
                    <select name="txtUser">                        
                        <?php
	                        include 'initialize.php';
    						$query="select * from users where uname not in ('$_SESSION[uname]')";
						    $r=mysql_query($query);
							while($result=mysql_fetch_array($r))
        					{
            			?>
                            <option value="<?php echo $result["uname"]?>"><?php echo $result["uname"]?></option>
        				<?php
        					}
						?>
                  </select>
                </td>
            </tr>
            <tr>
                <td style="padding-left: 15px; color: #414848; border-left: dashed; border-bottom:dashed">Select Files</td>
                <td>:</td>
                <td style="color: #414848; border-right: dashed; border-bottom:dashed"><input id="ev_button" style="width: 260px" class="fbutton" name="txtUpload" type="file" size="20" /></td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <td colspan="3">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input name="btn" style="width: 110px" class="fbutton" type="submit" value="Send" />
            </tr>
        </table>
       </form>
      </center>
      </div>
<br /><br />
        </div>
        
	</body>
</html>
