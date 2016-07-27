<?php
session_start();
include('../include/connectdb.php');

//echo md5(12345678);

if($_POST['submit'])
{
        // รับค่าจากฟอร์ม
        $email         = $_POST['email'];
        $password  = md5($_POST['password']);

        if(!empty($email) and !empty($password))
        {
            // เช็คสิทธิ์
            $sql = "SELECT email,password FROM user 
                        WHERE email='$email' and password='$password'";
            $query = $dbh->query($sql);
            $count_row = $query->rowCount();

            if($count_row)
            {
                // สร้างตัวประเภท session ไว้เช็คหน้า dashboard
                $_SESSION['session_login'] = $email;
                // ส่งไปหน้า Dashboard
                header('location:dashboard.php');
            }else{
                    $msg = "<div class='alert alert-danger'>ข้อมูลเข้าระบบไม่ถูกต้อง</div>";            
            }

        }else{
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

    <title>Login - Clean Blog</title>

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
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="index.php" role="form">
                            <fieldset>
                                <?php echo $msg; ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                  <a href="forgotpassword.php">ลืมรหัสผ่าน ?</a>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" value="Login" 
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
