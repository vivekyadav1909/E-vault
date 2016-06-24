<!doctype html>
<html>
    <?php
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>e-vault</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" href="css/style.css">
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
    <body>
        <?php
        include_once 'HeaderAccount.php';
        session_start();
        include("initialize.php");
        $query = "select * from users where uname='$_SESSION[uname]'";
        $r = mysql_query($query);
        $result = mysql_fetch_array($r);
        if ($result) {

            $a = $result["passw"];
            $b = $result["addr"];
            $c = $result["email"];
            $d = $result["mobile"];
            
        }
	
        ?>
	
        <div id="page">
            <div class="box">
                <center>
                    &nbsp;&nbsp;&nbsp;
                    <form action="ProfileUpdate.php" method="post" enctype="multipart/form-data">
                        <table class="passchange" style="height: 130px; width: 440px; margin-top: 50px;">
                            <tr>
                                <td align="center" style="font-family: 'Bree Serif', serif; padding-top:20px; padding-bottom:10px; background:#007ead; border:2px groove #414848; border-radius:5px; height:40px; width:440px" colspan="3">
                                    <h3 style="color:#FAFAFA;">File Upload</h3>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center" style="padding-left: 15px; border-left:dashed">Password</td><td>:</td>
                                <td style=" border-right: dashed;"><input value="<?php echo $a; ?>" style="width: 200px" type="password" name="txtPassword" id="prof"/></td>
                            </tr>
                            <tr>
                                <td align="center" style="padding-left: 15px; border-left:dashed">Email ID</td><td>:</td>
                                <td style=" border-right: dashed;"><input value="<?php echo $c; ?>" style="width: 200px" type="text" name="txtEmail" id="prof"/></td>
                            </tr>
                            <tr>
                                <td align="center" style="padding-left: 15px; border-left:dashed">Mobile</td><td>:</td>
                                <td style=" border-right: dashed;">
                                    <input value="<?php echo $d; ?>" id="prof" style="width: 200px" type="text" name="txtMobile" />
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="padding-left: 15px; border-left:dashed">Profile Pic</td><td>:</td>
                                <td style=" border-right: dashed;">
                                	<input id="ev_button" style="width: 240px" class="fbutton" name="txtPhoto" type="file" size="20" />
                                    
                                </td>
                            </tr>
                            <tr></tr><tr></tr><tr></tr><tr></tr>
                            <tr>
                                <td colspan="3" style="border-right: dashed; border-left: dashed;  border-bottom:dashed">
                            <center>                
                                <input name="btn"  class="fbutton" type="submit" value="Update" />
                            </center>
                            </td>
                            </tr>
                        </table>
                    </form>
                </center>
            </div>
            <br>
        </div>
    </body>
</html>

