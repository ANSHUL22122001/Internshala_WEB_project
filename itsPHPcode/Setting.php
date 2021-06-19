<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
require 'files.php'; 
?>
    <title>Setting Page</title>
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

        input{
            margin-bottom: 15px;
        }
    </style>
</head>
<?php
    if(isset($_POST['change_password'])){


        ?>
        <script>
            alert('hello');
        </script>
        
        
        <?php
        // include 'connection.php';
        // $Email = $_SESSION['email'];
        // $Oldpassword = mysqli_real_escape_string($con,$_POST['oldpassword']);
        // $Newpassword = mysqli_real_escape_string($con,$_POST['newpassword']);
        // $Renewpassword = mysqli_real_escape_string($con,$_POST['renewpassword']);


        // echo $Email;
        // echo $Oldpassword;
        // echo $Newpassword;
        // echo $Renewpassword;
    }
?>
<body>
<?php
include 'navbar.php'; 
?>

    <div class="container-fluid" style="margin:30px 0px">
        <div class="row" id="btnsection">
            <div class="col-lg-2 col-md-1"></div>
            <div class="col-lg-8 col-md-10">
                <h1>Settings</h1>
                <br>
                <button id="changepasswordbtn" class="btn btn-block btn-secondary" style="width: 100%;background-color:rgb(209, 209, 209);color:black;text-align:left">Change Password</button>
            </div>
            <div class="col-lg-2 col-md-1"></div>
        </div>
        
        <div class="row" id="changepasswordsection">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8">
                <h1>Change Password</h1>
                <br>
                <form method="POST" action="LoginSignConnection.php">
                    <input type="password" class="form-control" placeholder="Old password" name="oldpassword">
                    <input type="password" class="form-control" placeholder="New password" name="newpassword">
                    <input type="password" class="form-control"placeholder="Re-type new password" name="renewpassword">
                    <input type="submit" class="btn btn-block btn-success" style="width: 100%;" name="change_password">
                    <button class="btn btn-block btn-danger" style="width: 100%;" id="goback">Go Back</button>
                </form>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>
    <footer class="text-center fixed-bottom">
    <p>Copyright &copy LifestyleStore. All Rights Reserved | Contact Us: +91 90000 00000</p>
</footer>

<script>
    $('body').css('zoom','100%'); /* Webkit browsers */
        $(document).ready(()=>{   
            $('#changepasswordsection').hide();
            $('#changepasswordbtn').click(()=>{
                $('#changepasswordsection').show();
                $('#btnsection').hide();
            });
            $('#goback').click(()=>{
                $('#changepasswordsection').hide();
                $('#btnsection').show();
            });
        });

        
    </script>
</body>

</html>



<!--  -->


<!-- 
 -->