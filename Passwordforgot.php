<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="stylesheet/forgot.css">
<title></title>
</head>


<BODY bgcolor="#D1DEE8">
	<!--<div class="accounthead">
		<p align="center"><img src="stylesheet/images/EVLOGO.jpg"></p>
	</div>-->
    <?php	include('header.php'); ?>
	<div id="primary">
		<div id="primarysub">
			<form action="PasswordforgotAuthenticate.php" method="post" class="login-form" method="post">
			<div class="loginheader">
			<h1 align="center"><img src="stylesheet/img/forgotpass.png">Forgot Password?</h1>
			</div>
	
			<div class="logincontent">
			<table>
			<tr>
				<td class="certain">Username</td>
				<td width="200px"><input name="txtUserName" type="text" class="input username" placeholder="Username" /></td>
			</tr>
			<tr>
				<td class="certain">Security Answer</td>
				<td><input name="txtAnswer" type="password" class="input password" placeholder="Place of Birth??" /></td>
			</tr>
			
			<tr><td></td><td></td>
			</tr>
			<tr>
				<td colspan="2" style="padding-left:45px;">&nbsp;&nbsp;
				<div class="loginfooter">
					<input type="submit" name="submit" value="RESET Password" class="loginbutton" />
                    <br><br>
                    <a href="index.php" style="padding-top:10px; text-decoration:none" id="forgotpass">SignIn!&nbsp;&nbsp;</a>
				</div>
				</td>
			</tr>
			<input type="hidden" value="Place of Birth" name="txtSecurity">
			</table>
		</form>
		</div>
	</div>
    </div>
    <?php	include('footer.php'); ?>
	<!--<div id="bottom">
		<h3 style="color:#646464;" align="center">Copyright EVault</h3>
	</div>-->
</BODY>

</html>
