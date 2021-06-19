<?php
        $con = mysqli_connect("localhost","root","anshulsharma","store");
        if (!$con) {
?>
            <script>
                alert('Connection Failed');
            </script>
<?php
            header('location: Sign_up.php');
        }
        else{
?>
            <!-- <script>
                alert('Connection Successfull');
            </script> -->
<?php
        }
?>