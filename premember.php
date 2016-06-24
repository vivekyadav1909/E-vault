<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>e-vault</title>
		<link rel="stylesheet" href="css/style.css">
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
        include("initialize.php");
        $query="select newdate from users where uname='$_SESSION[uname]'";
        $r=mysql_query($query);
        $result=mysql_fetch_array($r);
        if($result)
        {
            $NewDate=$result["newdate"];
        }

        ?>
        &nbsp;&nbsp;
        
        &nbsp;&nbsp;
        <div id="page">
            <div class="box">
                <center>
                    
        &nbsp;&nbsp;&nbsp;&nbsp;
                <form action="membership.php" method="post">
                <table align="center" style=" height: 130px; width: 400px; margin-top: 50px;">
                	<tr>
						<td align="center" style="font-family: 'Bree Serif', serif; padding-top: 20px; padding-bottom: 5px; background: #007ead; border: 2px groove #414848; border-radius: 5px; height: 40px; width: 440px" colspan="3">
							<h3 style="color:#FAFAFA;">Update Membership<h3>
						</td>
							
					</tr>
                    <tr>
                        <td style="color: #414848; border-left: dashed; border-right: dashed" colspan="3" align="center"><img src="stylesheet/images/paymentimg.jpg" style="height:50px; width=:100px"/></td>
                    </tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
                    <tr style="font-family: 'Bree Serif', serif; color: #414848; ">
                        <td style="padding-left: 20px; border-left: dashed;">Select</td><td></td>
                        <td style="border-right: dashed;"><input type="radio" name="memberselect" id="memberselect" value="90"/>90 Days($5.45)</td>
                    </tr>
                    <tr style="font-family: 'Bree Serif', serif; color: #414848; ">
                        <td style="padding-left: 20px; border-left: dashed; ">Additional</td><td>:</td>
                        <td style="border-right: dashed;"><input type="radio" name="memberselect" id="memberselect" value="180"/>180 Days($9.50)</td>
                    </tr>
                    <tr style="font-family: 'Bree Serif', serif; color: #414848;">
                        <td style="border-left: dashed; padding-left: 20px; border-bottom:dashed">Days</td><td style="border-bottom:dashed"></td>
                        <td style="border-right: dashed; border-bottom:dashed">
                            <input type="radio" name="memberselect" value="360" />360 Days($17.95)
                        </td>
                    </tr>
                    
                    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                    <tr>
                        <td colspan="3" align="center">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="btn"  class="fbutton" type="submit" value="Update"/>

                    </tr>

                </table>

                    </form>
            </fieldset>
                    </center>

            </div>
			<br />
		&nbsp;&nbsp;
        <center>
                <h2 style="color:black; font-family:Comic Sams MS;"><i>&nbsp;Your membership expires on <?php echo $NewDate;?> (yy-mm-dd).</i></h2>
        </center>
        &nbsp;&nbsp;

        </div>
        
    </body>
</html>
