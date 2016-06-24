
<?php

include("initialize.php");
include("class.phpmailer.php");
$uname = $_REQUEST['txtUserName'];
$passw = $_REQUEST['txtPassword'];
$email = $_REQUEST['txtEmail'];
$photo = $_REQUEST['txtUpload'];
$address = "NIL";
$ques = $_REQUEST['txtSecurity'];
$ans = $_REQUEST['txtAnswer'];
$mobile = $_REQUEST['txtMobile'];
$currentdate = date('y-m-d');
$NewDate = Date('y-m-d', strtotime("+10 days"));

$query = "select * from users where uname='$uname'";
$r = mysql_query($query);
$result = mysql_fetch_array($r);

if ($result) 
{
    echo "<script type=text/javascript>";
    echo "if(confirm('User Name is already Registered .... Try Another Username'))";
    echo "{";
    echo "location.href='Registration.php'";
    echo "}";
    echo "</script>";
    return;
} 
else 
{
   	$allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["txtUpload"]["name"]);
    $extension = end($temp);
    if ((($_FILES["txtUpload"]["type"] == "image/gif") || ($_FILES["txtUpload"]["type"] == "image/jpeg") || ($_FILES["txtUpload"]["type"] == "image/jpg") || ($_FILES["txtUpload"]["type"] == "image/pjpeg") || ($_FILES["txtUpload"]["type"] == "image/x-png") || ($_FILES["txtUpload"]["type"] == "image/png")) && in_array($extension, $allowedExts)) 
	{
        if ($_FILES["txtUpload"]["error"] > 0) 
		{
            echo "<script type=text/javascript>";
            echo "if(confirm('Error in Uploading File ...'))";
            echo "{";
            echo "location.href='Registration.php'";
            echo "}";
            echo "</script>";
            return;
        } 
		else 
		{
			if (file_exists("Userpics/" . $_FILES["txtUpload"]["name"])) 
			{
                echo "<script type=text/javascript>";
                echo "if(confirm('Image File already Exists .... Try Another Image File ....'))";
                echo "{";
                echo "location.href='Registration.php'";
                echo "}";
                echo "</script>";
                return;
            }
			else 
			{
				move_uploaded_file($_FILES["txtUpload"]["tmp_name"], "Userpics/" . $_FILES["txtUpload"]["name"]);
               	$filename = $_FILES["txtUpload"]["name"];
                $query1 = "insert into users(uname,passw,addr,email,mobile,ques,ans,photo1,curdate,newdate) values('$uname','$passw','$address','$email','$mobile','$ques','$ans','$filename','$currentdate','$NewDate')";
                mysql_query($query1);

                $mail = new PHPMailer();

                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "ssl";
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465;

                $mail->Username = "evault19@gmail.com";
                $mail->Password = "vivekyadavv";

                $mail->From = "evault19@gmail.com";
                $mail->FromName = "E-Vault";

                $mail->Subject = "Registration Successfull";

                $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
                $mail->WordWrap = 50;

                $mail->MsgHTML("Your Login Information is : \nUsername : " . $uname . "\nPassword : " . $passw);

                $mail->AddAddress($email);

                $mail->IsHTML(true);

                if (!$mail->Send()) 
				{
                    echo "<script type=text/javascript>";
                    echo "if(confirm('Connect To Internet or Check your connection'))";
                    echo "{";
                    echo "location.href='Registration.php'";
                    echo "}";
                    echo "</script>";
                }
				else 
				{
                    echo "<script type=text/javascript>";
                    echo "if(confirm('You have Successfully Registered Yourself. Login Information has been sent to your Email ID for Future Use.'))";
                    echo "{";
                    echo "location.href='index.php'";
                    echo "}";
                    echo "</script>";

                    mkdir("users/$uname");
                    mkdir("users/$uname/documents");
                    mkdir("users/$uname/images");
                    mkdir("users/$uname/videos");
                }
			}
		}
	}
}
?>