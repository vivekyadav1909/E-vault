<?php

        include("initialize.php");
        include("class.phpmailer.php");
        session_start();
        $a=$_REQUEST[txtUserName];
        $b=$_REQUEST[txtSecurity];
        $c=$_REQUEST[txtAnswer];
        
            
        $query="select * from users where uname='$a' and ques='$b' and ans='$c'";
        $r=  mysql_query($query);
        
                if($result=mysql_fetch_array($r))
                {

                    



$mail             = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  
$mail->SMTPSecure = "ssl";                 
$mail->Host       = "smtp.gmail.com";      
$mail->Port       = 465;                   

$mail->Username   = "evault19@gmail.com";  
$mail->Password   = "vivekyadavv";            

$mail->From       = "evault19@gmail.com";
$mail->FromName   = "Group";

$mail->Subject    = "Your Password from Evault";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 
$mail->WordWrap   = 50; 

$mail->MsgHTML("Your Password is : ".$result["passw"]);

$mail->AddAddress($result["email"]);

$mail->IsHTML(true); 

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else 
    {
                    echo "<script type=text/javascript>";
                    echo "if(confirm('Password is Successfully Sent To Your Email ID'))";
                    echo "{";
                    echo "location.href='index.php'";
                    echo "}";
                    echo "</script>";
  
    }

                    
                    
                    
                }
                else
                {
                    echo "<script type=text/javascript>";
                    echo "if(confirm('Wrong Information You Provided .... Try Again ...'))";
                    echo "{";
                    echo "location.href='Passwordforgot.php'";
                    echo "}";
                    echo "</script>";
                    return;
                }


?>
