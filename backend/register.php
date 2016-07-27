<?php 
include('../include/connectdb.php');

if($_POST['submit'])
{
    // รับค่าจากฟอร์ม
    $fullname     = trim(strip_tags($_POST['fullname']));
    $email          = trim(strip_tags($_POST['email']));
    $password   = trim(strip_tags($_POST['password']));
    $tel               = trim(strip_tags($_POST['tel']));
    $password_encrypt = md5($password);

    /*echo $password_encrypt;
    echo $fullname."<br>";
    echo $email."<br>";
    echo $password."<br>";
    echo $tel."<br>";*/

    if(!empty($fullname) and !empty($email) 
        and !empty($password) and !empty($tel))
    {
        // บันทึกลงตาราง user
        $cur_status = 1;
        $cur_date = date('Y-m-d');
        $sql = "INSERT INTO user(fullname,email,password,tel,status,dateregis) 
                    VALUES(:fullname,:email,:password,:tel,:status,:dateregis)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':fullname',$fullname);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password_encrypt);
        $stmt->bindParam(':tel',$tel);
        $stmt->bindParam(':status',$cur_status);
        $stmt->bindParam(':dateregis',$cur_date);

        if($stmt->execute())
        {
            // success
            $msg = "<div class='alert alert-success'>ลงทะเบียนเรียบร้อยแล้ว</div>";
            // Redirect with PHP
            //header('location:index.php');
            // Redirect with HTML
            echo "<META http-equiv='refresh' content='3;URL=index.php'>";
        }else{
            // fail
            $msg = "<div class='alert alert-danger'>ผิดพลาด ลงทะเบียนไม่สำเร็จ</div>";
        }
    }else{
        // แสดงข้อความแจ้งเตือน
            $msg = "<div class='alert alert-danger'>กรอกข้อมูลให้ครบก่อน</div>";
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

    <title>Register - Clean Blog</title>

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
                        <h3 class="panel-title">Register free</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="register.php" role="form">
                            <fieldset>
                                <?php echo $msg; ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Fullname" name="fullname" type="text">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Tel" name="tel" type="text">
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" value="Register" 
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
