<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign Up</title>

<?php
require 'files.php'; 
?>
        <style>
            nav{
                color: #eeeeee;
            }
            .space{
                margin-right: 10px;
            }
            
            footer{
                background-color: black;
                color: #ededed;
                text-align: center;
                line-height:40px;
                font-size: 12px;
                height:40px;
            }
            .login-section{
                margin: 30px;
                height: 560px;
                width: 100%;
                padding: 10px;
                border: 1px solid grey;
            }
            input{
                margin-bottom:20px;
            }
            .signup{
                margin: 40px;
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
                    <div class="signup" >
                        <h1>SIGN UP</h1>
                        <form method="POST" action="LoginSignSetting.php">
                            <input type="text" placeholder="Name" class="form-control" name="Name">
                            <input type="email" placeholder="Email" class="form-control" name="Email">
                            <input type="password" placeholder="Password" class="form-control" name="Password">
                            <input type="tel" pattern="[0-9]{10}" placeholder="Contact No." oninvalid="setCustomValidity('Enter your 10 digit Mobile Number.')" class="form-control" name="Contact">
                            <input type="text" placeholder="City" class="form-control" name="City">
                            <input type="text" placeholder="Address" class="form-control" name="Address">
                            <input type="submit"  class="btn btn-primary" name="submit_registration">
                        </form>
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

