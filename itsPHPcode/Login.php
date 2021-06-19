<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>

<?php
require 'files.php'; 
?>
    <style>
        nav {
            color: #eeeeee;
        }

        .space {
            margin-right: 10px;
        }

        footer {
            background-color: black;
            color: #ededed;
            text-align: center;
            line-height: 40px;
            font-size: 12px;
            height: 40px;
        }

        .login-section {
            margin: 20px;
            height: 460px;
            width: 100%;
            padding: 10px;
            border: 1px solid grey;
        }

        input {
            margin-bottom: 15px;
        }

        .login-head {
            background-color: #0d6efd;
            padding: 15px;
            padding-left: 20px;
            font-size: 40px;
            margin-bottom: 20px;
            color: white;
            font-family: bold;
            height: 95px;
            line-height: 70px;
            border-radius: 5px;
        }

        .login-footer {
            font-size: 15px;
            margin-top: 25px;
            bottom: 0;
            width: 100%;
            padding: 20px;
            border-radius: 5px;
            background-color: #eeeeee;
        }
    </style>
</head>

<body>
<?php
include 'navbar.php'; 
?>

    <div class="container">
        <div class="row">
            <div class="col-xs-1 col-md-2 col-lg-3"></div>
            <div class="col-xs-10 col-md-8 col-lg-6">
                <div class="login-section rounded">
                    <div class="login-head">
                        Login
                    </div>
                    <p class="text-warning" style="margin-top:50px">Login first to purchase</p>
                    <form  method="POST" action="LoginSignSetting.php">

                        <input type="Email" placeholder='Email' class="form-control form-group" name="Email">
                        <input type="Password" placeholder='Password' class="form-control form-group" name="Password">
                        <input type="submit" class="btn btn-primary btn-lg btn-block " name="submit_Login">
                    </form>
                    <div class="login-footer">
                        Don't have an account? <a href="Sign_up.php" style="color:blue;font-weight:500;">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-1 col-md-2 col-lg-3"></div>
        </div>

    </div>


<?php
include 'footer.php'; 
?>
</body>

</html>