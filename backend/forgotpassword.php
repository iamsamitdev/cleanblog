<?php
include('../include/connectdb.php');
require "PHPMailer/class.phpmailer.php";
require 'PHPMailer/class.smtp.php';
require 'PHPMailer/class.pop3.php';

if($_POST['submit'])
{
    $email = $_POST['email'];
    if(!empty($email))
    {
        $sql = "SELECT email FROM user WHERE email='$email'";
        $query = $dbh->query($sql);
        $count_row = $query->rowCount();

        if($count_row)
        {
            // Random new password and send mail
            $new_password = rand(1000,9999);
            $new_password_encypt = md5($new_password);

            $sql_update = "UPDATE user SET password=:password 
                                    WHERE email='$email'";
            $stmt = $dbh->prepare($sql_update);
            $stmt->bindParam(':password',$new_password_encypt);
            
            if($stmt->execute())
            {
                // Send mail to user
                /*$to = $email;
                $from = "admin@geniusshop.tk";
                $subject = "=?utf-8?B?".base64_encode("แจ้งลืมรหัสผ่านจาก Genius Shop")."?=";
                $message = "คุณได้ขอรหัสผ่านใหม่จากระบบไว้<br>
                                    รหัสผ่านใหม่ที่ได้คือ: <b>$new_password</b>";
                $headers = "From:Genius Shop <$from>\n"; // I suggest you try using only \n 
                $headers .= "MIME-Version: 1.0\n";
                $headers .= "Content-Type: text/html; charset=utf-8\n";
                $headers .= "Reply-To: Genius Shop <$from>\n";
                $headers .= "X-Priority: 1\n"; // Urgent message!
                $headers .= "X-MSmail-Priority: High\n";
                $headers .= "X-mailer: 27.254.99.61";

                $sendmail = @mail($to, $subject, $message, $headers) or die("Unable to send the Email");
                if($sendmail)
                {
                        $msg = "<div class='alert alert-success'>ส่งรหัสผ่านไปที่อีเมล์แล้ว</div>";            
                }
                */

                $message = "คุณได้ขอรหัสผ่านใหม่จากระบบไว้<br>
                                    รหัสผ่านใหม่ที่ได้คือ: <b>$new_password</b>";

                $mail  = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth     = true;
                $mail->SMTPSecure = "tls";
                $mail->Host               = "smtp.gmail.com";
                $mail->Port                = 587;
                
                $mail->Username     = "samitkoyom@gmail.com";    
                $mail->Password      = "xxx";

                $mail->SetFrom('samitkoyom@gmail', 'Samit Koyom');
                $mail->CharSet          = "utf-8";
                $mail->Subject           = "แจ้งลืมรหัสผ่าน";
                $mail->MsgHTML($message);

                // อีเมล์ผู้รับ
                $mail->AddAddress($email,'John Doe');

                if(!$mail->Send()) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                        $msg = "<div class='alert alert-success'>ส่งรหัสผ่านไปที่อีเมล์แล้ว</div>";
                }
                
            }

        }else{
            $msg = "<div class='alert alert-danger'>ไม่มีอีเมล์นี้ในระบบ</div>";            
        }

    }else{
            $msg = "<div class='alert alert-danger'>ป้อนอีเมล์ก่อน</div>";            
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ลืมรหัสผ่าน - Clean Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ขอรหัสผ่านใหม่</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="forgotpassword.php" role="form">
                            <fieldset>
                                <?php echo $msg; ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <input type="submit" name="submit" value="Submit" 
                                class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
