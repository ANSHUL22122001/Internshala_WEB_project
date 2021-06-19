<?php
    session_start();

    require 'connection.php';
    if (!isset($_SESSION['email'])) {
        header('location:Login.php');
    }
    if (isset($_POST['add_to_cart'])) {
        $user_email = $_SESSION['email'];
        $sql = "select * from users where email='$user_email' ";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($query);

        
        $user_id = $row['id'];
        $item_id = $_POST['add_to_cart'];
        $quantity = "1";
        $status = "Add to cart";
        
        $sql1 = "select * from user_items where user_id='$user_id' and item_id='$item_id'";
        $query1 = mysqli_query($con, $sql1);
        $count1 = mysqli_num_rows($query1);
        if($count1){
?>
            <script>
                if (confirm("Already added to your cart")) {
                    window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/Product.php");
                } 
            </script>
<?php
        }
        else{
            $sql2 = "insert into user_items(user_id, item_id, Quantity, status) VALUES ('$user_id','$item_id','$quantity','$status')";
            $query2 = mysqli_query($con, $sql2);
        }
        
        
    }
    
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Page</title>

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

        .main {
            background-color: rgb(194, 191, 191);
            text-align: center;
            margin: 60px 0px;
            padding: 60px 10px;
        }

        .main h1 {
            font-size: 50px;
        }

        .check {
            height: 300px;
            width: 275px;
            border: 1px solid black;
        }
        h3{
            font-size:20px;
        }
        h6{
            font-size: 12px;
        }
    </style>
</head>

<body>
<?php
include 'navbar.php'; 
?>
    <div class="container">
        <div class="row main">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirt for you. No need to hunt arounder
                ,we have all in one place.
            </p>
        </div>
        <!-- <div class="row"> -->
        <div class="row">

        
        <?php
                    include 'connection.php';
                    $query = "select * from items order by id";
                    $result = mysqli_query($con, $query);

                    if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                            
                            <div class="col-lg-3 col-md-6">
                                <div class="card" style="padding: 2px;margin: 10px;">
                                    <form method="POST">
                                        <img src=<?php echo $row['image']?> alt="" class="card-img-top rounded">
                                        <div class="card-body">
                                            <h3 class="text-center"><?php echo $row['name']?></h3>
                                            <h6 class="text-center">Price: Rs. <?php echo $row['price']?></h6>
                                            <input type="submit" name="add_to_cart"class="btn btn-block btn-primary" style="width: 90%;margin: 10px;" value="<?php echo $row['name']?>">
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>
                </div>
            
            
    </div>

<?php
include 'footer.php'; 
?>
</body>

</html>