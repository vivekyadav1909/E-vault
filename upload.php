
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
        ?>
        &nbsp;&nbsp;
    
    &nbsp;&nbsp;

    <div id="page">
        <div class="box">
            <center>
                 &nbsp;&nbsp;&nbsp;
                    <form name="" onsubmit="" enctype="multipart/form-data" action="UploadAuthenticate.php" method="post">
                        <table style="height: 130px; width: 440px; margin-top: 50px;">
							<tr>
								<td align="center" style="font-family: 'Bree Serif', serif; padding-top:20px; padding-bottom:10px; background:#007ead; border:2px groove #414848; border-radius:5px; height:40px; width:440px" colspan="3">
									<h3 style="color:#FAFAFA;">File Upload<h3>
								</td>
							
							</tr>
							<tr>
								<td></td>
							</tr>
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
                                <td style="padding-left: 15px; font-family: 'Bree Serif', serif; color: #414848; border-left: dashed; ">Select File</td>
                                <td>:</td>
                                <td style="color: #414848; border-right: dashed;">
									<input id="ev_button" style="width: 240px" class="fbutton" name="txtUpload" type="file" size="20" />
								</td>
                            </tr>
                            
                            <tr>
                                <td style="padding-left: 15px; font-family: 'Bree Serif', serif; color: #414848; border-left: dashed; border-bottom:dashed">Upload To</td>
                                <td>:</td>
                                <td style="color: #414848; border-right: dashed; border-bottom:dashed">
                                    <select name="txtlocation">                                        
                                       <?php
									   		$dir = scandir("users/$uname");
											unset($dir[0], $dir[1]);
											foreach ($dir as $subdir) 
											{        	echo "<option value='".$subdir."'>".$subdir."</option>" ;
											}
										?> 
                                    </select>
                                </td>

                            </tr>

                            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                            <tr>
                                <td colspan="3">
                            <center>                
                                <input name="btn"  class="fbutton" type="submit" value="Upload" />
                            </center>
                            </td>

                            </tr>

                        </table>

                    </form>
            </center>

        </div>

    </div>
    <br /><br />
    
</body>
</html>
