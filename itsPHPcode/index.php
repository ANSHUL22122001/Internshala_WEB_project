<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
    <head>
<?php
require 'files.php'; 
?>
        <title>Home Page</title>
        <style>
            nav{
                color: #eeeeee;
            }
            .space{
                margin-right: 10px;
            }
            .banner-img{
                background-image: url('images/intro-bg_1.jpg');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 109vh; 
            }
            .inbetween{                
                margin-top: 12%;
                margin-bottom: 12%;
                background-color: rgba(0,0,0,0.7);
                color: white;
                padding: 50px;
                padding-bottom: 80px;
            }
            .content h1{
                padding: 5px;
                font-size: 40px;
            }
            .content p{
                padding: 2px;
                font-size: 15px;
            }
            footer{
                background-color: black;
                color: #ededed;
                text-align: center;
                line-height:40px;
                font-size: 12px;
                height:40px;
            }
        </style>
    </head>
    <body>
<?php
include 'navbar.php'; 
?>

        <div class="banner-img">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 inbetween">
                        <center class="content">
                            <h1>We sell lifestyle</h1>
                            <p>Flat 40% OFF on premium brands</p>
                            <br>
                            <a href="Product.php"><button class="btn btn-lg btn-danger">Shop Now</button></a>
                        </center>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>

<?php
include 'footer.php'; 
?>
    </body>
</html>




<!-- classes of bootstrap -->

<!-- visible-lg          block will be visible only when screen size is large -->
<!-- hidden-lg           block will be hidden only when screen size is large -->
<!-- same for medium(md), small(sm), extrasmall(xs) -->


<!-- table class -->
<!-- table table-striped table-bordered table-hover table-responsive -->


<!-- container and container-fluid row col_screentype_number          class make a container for adding content-->
<!-- offset-screentype-number  leave as many number of block out of 12 section of container form starting-->


<!-- image classes -->
<!-- img-fluid img-thumbnail rounded  -->


<!-- form classes -->
<!-- form-group form-control disabled input-lg -->
