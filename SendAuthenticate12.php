<?php
		include("initialize.php");
        include("class.phpmailer.php");
        session_start();
        $cat=$_REQUEST[txtCategory];
        $touser=$_REQUEST[txtUser];
        $email="";
        
        $query="select * from users where uname='$touser'";
        $r=mysql_query($query);
        if($result=mysql_fetch_array($r))
        {
            $email=$result["email"];
        }
       
  if($cat=="Images")
  {
    $allowedExts = array("gif", "jpeg", "jpg", "png","bmp");
	$temp = explode(".", $_FILES["txtUpload"]["name"]);
	$extension = end($temp);
	if ((($_FILES["txtUpload"]["type"] == "image/gif")
		|| ($_FILES["txtUpload"]["type"] == "image/jpeg")
		|| ($_FILES["txtUpload"]["type"] == "image/jpg")
		|| ($_FILES["txtUpload"]["type"] == "image/pjpeg")
		|| ($_FILES["txtUpload"]["type"] == "image/x-png")
		|| ($_FILES["txtUpload"]["type"] == "image/png")
		|| ($_FILES["txtUpload"]["type"] == "image/bmp"))
		&& in_array($extension, $allowedExts))
		{
		 if ($_FILES["txtUpload"]["error"] > 0)
		 {
                    echo "<script type=text/javascript>";
                    echo "if(confirm('Error in Uploading File ...'))";
                    echo "{";
                    echo "location.href='Account.php?upload=false";
                    echo "}";
                    echo "</script>";
                    return;
    	 }
	  	else
    	{
          move_uploaded_file($_FILES["txtUpload"]["tmp_name"],
    	  "Upload/" . $_FILES["txtUpload"]["name"]);
	      $filename=$_FILES["txtUpload"]["name"];
          
$mail             = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  
$mail->SMTPSecure = "ssl";                 
$mail->Host       = "smtp.gmail.com";      
$mail->Port       = 465;                   

$mail->Username   = "evault19@gmail.com";  
$mail->Password   = "vivekyadavv";            

$mail->From       = "evault19@gmail.com";
$mail->FromName   = "Evault";

$mail->Subject    = "Filename : ".$filename." is Successfully Sent From Username - ".$_SESSION[uname]." on Evaultg13";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 
$mail->WordWrap   = 50; 

$mail->MsgHTML("Filename : ".$filename." is Successfully Sent From Username - ".$_SESSION[uname]." on Evaultg13");

$mail->AddAddress($email);

$mail->IsHTML(true); 


$mail->AddAttachment("Upload\\".$filename);

if(!$mail->Send()) 
{
    
     echo "<script type=text/javascript>";
                    echo "if(confirm('Connect To Internet or Slow Speed Cause'))";
                    echo "{";
                    echo "location.href='Account.php?upload=false";
                    echo "}";
                    echo "</script>";
  
} else 
    {
                   $query1 = "insert into files_sent(fromuname,touname,file_cat,file_name) values('$_SESSION[uname]','$touser','$cat','$filename')";
                    mysql_query($query1);
                    echo "<script type=text/javascript>";
                    echo "if(confirm('Image File is Successfully Sent.'))";
                    echo "{";
                    echo "location.href='Account.php?upload=false";
                    echo "}";
                    echo "</script>";
  
    }
      
                    
      
    }
  }
                

      
      
  }
  
  
  
  if($cat=="Videos")
  {
      
      $allowedExts = array("avi", "mpeg", "mpg", "mov","wmv","rm","mp4");
$temp = explode(".", $_FILES["txtUpload"]["name"]);
$extension = end($temp);

  if ($_FILES["txtUpload"]["error"] > 0)
    {
                    echo "<script type=text/javascript>";
                    echo "if(confirm('Error in Uploading File ...'))";
                    echo "{";
                    echo "location.href='Send.php'";
                    echo "}";
                    echo "</script>";
                    return;
    }
  else
    {
    
      move_uploaded_file($_FILES["txtUpload"]["tmp_name"],
      "Upload/" . $_FILES["txtUpload"]["name"]);
      $filename=$_FILES["txtUpload"]["name"];
$mail             = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  
$mail->SMTPSecure = "ssl";                 
$mail->Host       = "smtp.gmail.com";      
$mail->Port       = 465;                   

$mail->Username   = "evault19@gmail.com";  
$mail->Password   = "vivekyadavv";            

$mail->From       = "evault19@gmail.com";
$mail->FromName   = "Evault";

$mail->Subject    = "Filename : ".$filename." is Successfully Sent From Username - ".$_SESSION[uname]." on Evaultg13";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 
$mail->WordWrap   = 50; 

$mail->MsgHTML("Filename : ".$filename." is Successfully Sent From Username - ".$_SESSION[uname]." on Evaultg13");

$mail->AddAddress($email);

$mail->IsHTML(true); 


$mail->AddAttachment("Upload\\".$filename);

if(!$mail->Send()) 
{
    
     echo "<script type=text/javascript>";
                    echo "if(confirm('Connect To Internet or Slow Speed Cause'))";
                    echo "{";
                    echo "location.href='Send.php'";
                    echo "}";
                    echo "</script>";
  
} else 
    {
                   $query1 = "insert into files_sent(fromuname,touname,file_cat,file_name) values('$_SESSION[uname]','$touser','$cat','$filename')";
                    mysql_query($query1);
                     echo "<script type=text/javascript>";
                    echo "if(confirm('Video File is Successfully Sent.'))";
                    echo "{";
                    echo "location.href='Send.php'";
                    echo "}";
                    echo "</script>";
  
    }
      
      
    }
      
      
  }
  
  
  
  
  
  
  if($cat=="Documents")
  {
      
      $allowedExts = array("doc", "docx", "txt", "pdf","rtf","odt");
$temp = explode(".", $_FILES["txtUpload"]["name"]);
$extension = end($temp);

  if ($_FILES["txtUpload"]["error"] > 0)
    {
                    echo "<script type=text/javascript>";
                    echo "if(confirm('Error in Uploading File ...'))";
                    echo "{";
                    echo "location.href='Send.php'";
                    echo "}";
                    echo "</script>";
                    return;
    }
  else
    {
    
      move_uploaded_file($_FILES["txtUpload"]["tmp_name"],
      "Upload/" . $_FILES["txtUpload"]["name"]);
      $filename=$_FILES["txtUpload"]["name"];
      $mail             = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  
$mail->SMTPSecure = "ssl";                 
$mail->Host       = "smtp.gmail.com";      
$mail->Port       = 465;                   

$mail->Username   = "evault19@gmail.com";  
$mail->Password   = "vivekyadavv";            

$mail->From       = "evault19@gmail.com";
$mail->FromName   = "Evault";

$mail->Subject    = "Filename : ".$filename." is Successfully Recieved From User - ".$_SESSION[uname]." on Evaultg13";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 
$mail->WordWrap   = 50; 

$mail->MsgHTML("Filename : ".$filename." is Successfully Sent From User - ".$_SESSION[uname]." on Evault");

$mail->AddAddress($email);

$mail->IsHTML(true); 


$mail->AddAttachment("Upload\\".$filename);

if(!$mail->Send()) 
{
    
     echo "<script type=text/javascript>";
                    echo "if(confirm('Connect To Internet or Slow Speed Cause'))";
                    echo "{";
                    echo "location.href='Send.php'";
                    echo "}";
                    echo "</script>";
  
} else 
    {
                   $query1 = "insert into files_sent(fromuname,touname,file_cat,file_name) values('$_SESSION[uname]','$touser','$cat','$filename')";
                    mysql_query($query1);
                     echo "<script type=text/javascript>";
                    echo "if(confirm('Document File is Successfully Sent.'))";
                    echo "{";
                    echo "location.href='Send.php'";
                    echo "}";
                    echo "</script>";
  
    }
      
       
    }
      
      
  }
  
  
                   
?>
