<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location:Login.php');
    }
    require 'Connection.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Cart Page</title>

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

        
    </style>
</head>

<body>
<?php
include 'navbar.php'; 
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-1"></div>
            <div class="col-lg-8 col-md-10">
                <table class="table table-bordered table-hover table-striped table-responsive" style="margin-top: 30px;margin-bottom: 30px">
                
                    <tr>
                        <th>Product Number</th>
                        <th>Image</th>
                        <th>Ouantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <?php
                        $user_email = $_SESSION['email'];
                        $sql = "select * from users where email='$user_email' ";
                        $query = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($query);

                        
                        $user_id = $row['id'];

                        $query = "select * from items where user_id='$user_id' ";
                        $result = mysqli_query($con, $query);

                        if(mysqli_num_rows($result)){
                            while($row1 = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th><button class="btn btn-primary" >Purchase</button></th>
                                </tr>
                    <?php
                        }
                    }
                ?>
                </table>
            </div>
            <div class="col-lg-2 col-md-1"></div>
        </div>
    </div>
    <?php
include 'footer.php'; 
?>
</body>

</html>


