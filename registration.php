<HTML>
<HEAD>
	<TITLE>Welcome to Evault</TITLE>
	<link rel="stylesheet" href="stylesheet/reg.css">
     <style type="text/css">
		.ftextinput{ margin: 0;	padding: 5px 15px;	font-family: Arial, Helvetica, sans-serif;	font-size:14px;	border:1px solid #0076a3; border-right:0px;	border-top-left-radius: 5px 5px;	border-bottom-left-radius: 5px 5px;	}
		.fbutton {	margin: 0;	padding: 5px 15px;	font-family: Arial, Helvetica, sans-serif;	font-size:14px;	outline: none;	cursor: pointer; text-align: center; text-decoration: none;
		color: #ffffff; border: solid 1px #0076a3; border-right:0px; background: #56c2e1; background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#56c2e1)); background: -moz-linear-gradient(top,  #00adee,  #56c2e1);
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
</HEAD>

<BODY bgcolor="#D1DEE8">
	<!--<div class="accounthead">
		<p align="center"><img src="stylesheet/images/EVLOGO.jpg"></p>
	</div>-->
    <?php	include('header.php') ?>
	<div id="primary">
		<div id="primarysub">
			<form name="SignupForm" onsubmit="return Validate();" enctype="multipart/form-data" action="RegistrationAuthenticate.php" method="post" class="login-form" method="post">

			<div class="loginheader">
			<h1 align="center"><img src="stylesheet/img/loginicon.png">Sign Up</h1>
			</div>
	
			<div class="logincontent">
			<table>
			<tr>
				<td class="certain">Username</td>
				<td width="200px" style="padding-left:15px;"><input name="txtUserName" type="text" class="input username" placeholder="Username" /></td>
			</tr>
			<tr>
				<td class="certain">Password</td>
				<td style="padding-left:15px;"><input name="txtPassword" type="password" class="input password" placeholder="Create Password" /></td>
			</tr>
			<tr>
				<td class="certain">Confirm Password</td>
				<td style="padding-left:15px;"><input name="password" type="password" class="input password" placeholder="Confirm Password" /></td>
			</tr>
			<tr>
				<td class="certain">Email</td>
				<td style="padding-left:15px;"><input name="txtEmail" type="text" class="input password" placeholder="Email Address" /></td>
			</tr>
			<tr>
				<td class="certain">Contact No.</td>
				<td style="padding-left:15px;"><input name="txtMobile" type="text" class="input password" placeholder="Phone Number" /></td>
			</tr>
			<tr>
				<td class="certain">Security Answer</td>												
				<td class="field" style="padding-left:15px;"><input name="txtAnswer" type="text" class="input password" placeholder="Place of Birth" /></td>
			</tr>
            <tr>
				<td class="certain">Profile Pic</td>												
				<td class="field"><input id="ev_button" style="width: 240px" class="fbutton" name="txtUpload" type="file" size="20" /></td>
			</tr>
			<tr><td></td><td></td>
			</tr>
			<tr>
				<td colspan="2" style="padding-left:25px;">&nbsp;&nbsp;
				<div class="loginfooter">
					<input type="submit" name="submit" value="SignUp" class="loginbutton" />
					<input type="reset" name="submit" value="RESET" class="generatepin" />
                    <style="color:RED">Already a member?</style><a href="index.php" id="forgotpass">Sign In</a>
				</div>
				</td>
			</tr>
			<input type="hidden" value="Place of Birth" name="txtSecurity">
		</table>
		</form>
		</div>
	</div>
    </div>
    <?php	include('footer.php') ?>
	<!--<div id="bottom">
		<h3 style="color:#646464;" align="center">Copyright EVault</h3>
	</div>-->
</BODY>

</HTML>