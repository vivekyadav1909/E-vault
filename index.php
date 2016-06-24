<HTML>
<HEAD>
	<TITLE>Welcome to Evault</TITLE>
	<link rel="stylesheet" href="stylesheet/primary.css">
</HEAD>

<BODY bgcolor="#D1DEE8">
	<!--<div class="accounthead">
		<p align="center"><img src="stylesheet/images/EVLOGO.jpg"></p>
	</div>-->
    <?php include('header.php');  ?>
	<div id="primary">
    	<h3 style="padding-top:75px; color:#414848" align="center">Not a Member? <a style="text-decoration:none; color:#00039F" href="registration.php">Sign UP</a></h3>
		<div id="primarysub">
			<form name="login-form" class="login-form" action="LoginAuthenticate.php" method="post">

			<div class="loginheader">
			<h1 align="center"><img src="stylesheet/img/loginicon.png">Login</h1>
			</div>
	
			<div class="logincontent">
			<input name="txtUserName" type="text" class="input username" placeholder="Username" />
			<div class="user-icon"></div>
			<input name="txtPassword" type="password" class="input password" placeholder="Password" />
			<div class="pass-icon"></div>	
			<input name="txtPin" type="password" class="input password" placeholder="PIN" />
			<div class="gen-icon"></div>
			</div>

		<div class="loginfooter">
		<input type="submit" name="btn" value="Login" class="loginbutton" />
		<input type="submit" name="btn" value="Generate Pin" class="generatepin" />
		<a href="Passwordforgot.php" id="forgotpass">Forgot Password</a>
		</div>
	
		</form>
		</div>
	</div>
    <?php	include('footer.php'); ?>
	<!--<div id="bottom">
		<h3 style="color:#646464;" align="center">Copyright EVault</h3>
	</div>-->
</BODY>

</HTML>