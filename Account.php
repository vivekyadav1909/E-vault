<?php
        session_start();
        include("initialize.php");
        $uname = $_SESSION['uname'];
		
		session_start();
		@$log=$_REQUEST['log'];
		if($log)
		{
			unset($_SESSION['uname']);
			header('location:index.php');
		}
		if($uname=="")
		{
			header('location:index.php');
		}

		$query="select * from users where uname='$_SESSION[uname]'";
        $r=mysql_query($query);
        $result=mysql_fetch_array($r);
        if($result)
        {
            
            $a=$result["passw"];
            $b=$result["addr"];
            $c=$result["email"];
            $d=$result["mobile"];
			$propic=$result["photo1"];
        }
		
        $search = $_REQUEST['q'];
        $btn = $_REQUEST['btn'];
    ?>

<html>

<head>
<title></title>
<link rel="stylesheet" href="stylesheet/accounts.css">

<script type="text/javascript">
	window.fbAsyncInit = function() {	//FACEBOOK SDK
    FB.init({
      	appId      : 'your-app-id',
      	xfbml      : true,
    	version    : 'v2.3'
    	});
	};

	(function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   	}(document, 'script', 'facebook-jssdk'));
   	
	$('#fb-share-button').click(function() {
    FB.ui({
          method: 'feed',
          link: "The link you want to share", 
          picture: 'The picture url',
          name: "The name who will be displayed on the post",
          description: "The description who will be displayed"
        }, function(response){
            console.log(response);
        }
    );
78});
   
   
   
   
	window.twttr = (function(d, s, id) {		//TWITTER JS
	var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
	if (d.getElementById(id)) return t;
	js = d.createElement(s);
	js.id = id;
	js.src = "https://platform.twitter.com/widgets.js";
	fjs.parentNode.insertBefore(js, fjs);
 
	t._e = [];
	t.ready = function(f) {
    t._e.push(f);
	};
 
	return t;
	}(document, "script", "twitter-wjs"));
</script>
<style type="text/css">
		.logtextinput{ margin: 0;	padding: 5px 15px;	font-family: Arial, Helvetica, sans-serif;	font-size:14px;	border:1px solid #0076a3; border-right:0px;	border-top-left-radius: 5px 5px;	border-bottom-left-radius: 5px 5px;	}
		.logbutton {	margin: 0;	padding: 5px 15px;	font-family: Arial, Helvetica, sans-serif;	font-size:14px;	outline: none;	cursor: pointer; text-align: center; text-decoration: none;
		color: #ffffff; border: solid 1px #FF383B; border-right:0px; background: #FF383B; background: -webkit-gradient(linear, left top, left bottom, from(#FF383B), to(#A30002)); background: -moz-linear-gradient(top,  #FF383B,  #A30002);
		border-top-right-radius: 3px 3px; border-top-left-radius: 3px 3px; border-bottom-right-radius: 3px 3px;	border-bottom-left-radius: 3px 3px;	}
		.logbutton:hover { text-decoration: none;	background: #FF383B; background: -webkit-gradient(linear, left top, left bottom, from(#FF0004), to(#A30002)); background: -moz-linear-gradient(top,  #FF0004,  #A30002);}
		/* Fixes submit button height problem in Firefox */
		.logbutton::-moz-focus-inner { border: 0;	}
		.logclear{	clear:both;	}
		
		.custom-upload { background-color: #008000;  border: 1px solid #006400;  border-radius: 4px;  cursor: pointer;  color: #fff;  padding: 4px 10px;}
		.custom-upload input { left: -9999px; position: absolute;}
		
		#prof{padding:5px; border:2px solid #ccc; -webkit-border-radius: 5px;  border-radius: 5px;}
		#prof:focus {border-color:#007ead; }
		
		table.passchange td { font-family: 'Bree Serif', serif; color: #414848; }
		table.passchange {margin-top:80px;}
</style>
</head>

<body style="background-image:url(stylesheet/images/DarkPattern.jpg); background-repeat:repeat; background-size: 1920px 1080px">

<!--<div id="acchead">
		<p align="center"><img src="stylesheet/images/EVLOGO.jpg"></p>
</div>-->
<?php	include('header.php'); ?>
<div class="push">
<div class="maindiv" >
	<table style="background-image:url(stylesheet/images/locationback.jpg); background-repeat:no-repeat; background-size:1300px 730px;" CELLPADDING='1' cellspacing='1' width='1300' border='0' align='center'>
    	<tr>
        	<td width='150px' height="120px" style="padding-left:20px;"><center><img style="width: 80px; height: 80px; border-radius: 50%; color:#007ead; border-style:dashed; border-color: "#1780A6"; background-repeat: no-repeat; background-position: center center;  background-image:url('Userpics/<?php echo $propic; ?>')" src="Userpics/<?php echo $propic; ?>"><br><?php echo $uname;?><center></td>
			<td align="center" style="padding-bottom:20px; padding-top:20px; padding-right:15px;">
				<form><p align='right'><input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton" name="btn"></p></form>
			</td>
     	</tr>
        
        <tr>
        	<td style="padding-left:40px;"><a style="text-decoration:none;" href="Account.php?log=logout"><input name="btn"  class="logbutton" style="width:120px; height:35px;" type="submit" value="Logout" /></a><!--<a href="Account.php?log=logout"><img src="stylesheet/images/logout.png" style="width:110; height:45;" /></a>--></td>
    	    <td align="CENTER">
            	<a href='Account.php?upload=true'><img src="stylesheet/images/upload.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            	<a href='Account.php?upload=false'><img src="stylesheet/images/sendfiles.png" /></a>    
            </td>
        </tr>
        
        <tr>
	        <td height='650' valign='top' style="padding-left:38px; padding-top:25px;">
                       <div id="header">
                            <br><br>
              <a href='Account.php?file=IMAGES'><img src="stylesheet/images/imgbutton.jpg" /></a><br><br>
              <a href='Account.php?file=DOCUMENTS'><img src="stylesheet/images/docbutton.jpg" /></a><br><br>
              <a href='Account.php?file=VIDEOS'><img src="stylesheet/images/vidbutton.jpg" /></a><br><br>
              <a href='Account.php?membership=true'><img src="stylesheet/images/membutton.jpg" /></a><br><br>
              <a href='Account.php?settings=true'><img src="stylesheet/images/settbutton.jpg" /></a><br><br>
              <?php
               	$dir = scandir("users/$uname");
              	unset($dir[0], $dir[1]);
				foreach ($dir as $subdir) {
                	if ($subdir == "documents" || $subdir == "images" || $subdir == "videos")
                    	continue;
              ?>
              				
              <a style="text-decoration:none; margin-left:-6px; font-size:20px; color:#0A0090" href="Account.php?file=<?php echo $subdir ?>">
              	&nbsp;&nbsp;<input name="btn" class="fbutton" style="width:110px; border-radius:10px; height:35px;" type="submit" value="<?php echo $subdir; ?>" />
              </a><br>
               <?php } ?>
               <br>
               <a href='Account.php?manage=true' style="text-decoration:none; padding-left:5px;"><input name="btn" class="fbutton" style="width:110px; border-radius:10px; height:35px;" type="submit" value="Manage Files" /></a>
               <br /><br />
               
              </div>
             </td>
             <td valign='top' >
                        
						<?php include('files.php'); ?>
						
						<?php		//UPLOAD CHECK AND INCLUDE
							$uploadchk = $_REQUEST['upload'];
							if($uploadchk == "true")
							{
									include('upload.php');
							}
						?>
                        
                        <?php
                                    //Manage CHECK AND INCLUDE
                                    $uploadchk = $_REQUEST['manage'];
                                    if ($uploadchk == "true") {
                                        include('manageFolders.php');
                                    }
                        ?>
                        
                        <?php		//SEND FILES CHECK AND INCLUDE
							$uploadchk = $_REQUEST['upload'];
							if($uploadchk == "false")
							{
									include('send.php');
							}
						?>
						
                        <?php		//MEMBER CHECK AND INCLUDE
							$uploadchk = $_REQUEST['membership'];
							if($uploadchk == "true")
							{
									include('premember.php');
							}
						?>
                        
                        <?php		//MEMBER CHECK AND INCLUDE
							$uploadchk = $_REQUEST['settings'];
							if($uploadchk == "true")
							{
									include('settings.php');
							}
						?>
                        
                        <?php		//MEMBER CHECK AND INCLUDE
							$uploadchk = $_REQUEST['update'];
							if($uploadchk == "true")
							{
									include('profile.php');
							}
						?>
						
                        <?php		//CREATE CUSTOM FOLDER AND INCLUDE
							$uploadchk = $_REQUEST['update'];
							if($uploadchk == "false")
							{
									include('createfolder.php');
							}
						?>
						
						<?php		//SEARCH FILES
						
						if(isset($btn))
						{
                        	include('search.php');
						}
                        ?>
                        
                        <?php		//TWEET CHECK AND INCLUDE
							$uploadchk = $_REQUEST['tweet'];
							if($uploadchk == "true")
							{
									include('tweet.php');
							}
						?>
                    </td>
                </tr>
            </table>
        </div>
</div>
<?php	include('footer.php'); ?>
       
    </body>
</html>
