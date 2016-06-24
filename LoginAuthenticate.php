
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>e-vault</title>
    </head>
    <body>
        <?php
        session_start();
        include("initialize.php");
        include("class.phpmailer.php");
        $a = $_REQUEST[txtUserName];
        $b = $_REQUEST[txtPassword];
        $c = $_REQUEST[txtPin];
        $btn = $_REQUEST[btn];
        $num = 0;

        $query = "select * from users where uname='$a' and passw='$b'";
        $r = mysql_query($query);
        if ($result = mysql_fetch_array($r)) {

            if ($btn == "Generate Pin") {
                $num = rand(100000, 999999);
                $query11 = "select * from user_session where uname='$a' and passw='$b'";
                $r11 = mysql_query($query11);
                if ($result11 = mysql_fetch_array($r11)) {
                    mysql_query("update user_session set pin='$num' where uname='$a'");
                } else {
                    mysql_query("insert into user_session(uname,passw,pin) values('$a','$b','$num')");
                }


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

                $mail->Subject = "Your PIN for LOGIN to Evault";

                $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
                $mail->WordWrap = 50;

                $mail->MsgHTML("Your New Security Pin is : " . $num);

                $mail->AddAddress($result["email"]);

                $mail->IsHTML(true);

                if (!$mail->Send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    echo "<script type=text/javascript>";
                    echo "if(confirm('Security Pin is Successfully Sent To Your Email ID'))";
                    echo "{";
                    echo "location.href='index.php'";
                    echo "}";
                    echo "</script>";
                }
            } else if ($btn == "Login") {
                $query1 = "select * from user_session where uname='$a' and passw='$b' and pin='$c'";
                $r1 = mysql_query($query1);
                if ($result1 = mysql_fetch_array($r1)) {
                    $_SESSION['uname'] = $result1["uname"];
                    header("location:Account.php");
                } else {

                    echo "<script type=text/javascript>";
                    echo "if(confirm('Invalid entries Session will now expire'))";
                    echo "{";
                    echo "location.href='index.php'";
                    echo "}";
                    echo "</script>";
                }
            }
        } else {
            echo "<script type=text/javascript>";
            echo "if(confirm('Wrong User Name or Password'))";
            echo "{";
            echo "location.href='index.php'";
            echo "}";
            echo "</script>";
        }
        ?>
    </body>
</html>
