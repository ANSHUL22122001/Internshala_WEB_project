<?php
session_start();

?>



<?php
        include 'connection.php';
        
        if(isset($_POST['submit_registration'])){
            $Name = mysqli_real_escape_string($con,$_POST['Name']);
            $Email = mysqli_real_escape_string($con,$_POST['Email']);
            $Password = mysqli_real_escape_string($con,$_POST['Password']);
            $Contact = mysqli_real_escape_string($con,$_POST['Contact']);
            $City = mysqli_real_escape_string($con,$_POST['City']);
            $Address = mysqli_real_escape_string($con,$_POST['Address']);

            $user_email_check_query = "select * from users where email='$Email'";
            $query = mysqli_query($con, $user_email_check_query);
            $count = mysqli_num_rows($query);

            if($count){
?>
                <script>
                    if (confirm("This Email has already been registered try a new one")) {
                        window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/Sign_up.php");
                    } 
                </script>
<?php
            }

            $user_email_check_query = "select * from users where contact='$Contact'";
            $query = mysqli_query($con, $user_email_check_query);
            $count = mysqli_num_rows($query);

            if($count){
?>
                <script>
                    if (confirm("This Contact has already been registered try a new one")) {
                        window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/Sign_up.php");
                    } 
                </script>
<?php
            }

            $user_registration_query = "insert into users( name, email, password, contact, city, address) VALUES ('$Name','$Email','$Password','$Contact','$City','$Address')";
            
            $user_registration_submit = mysqli_query($con, $user_registration_query);
            
            
            if (!$user_registration_submit) {
?>
                    <script>
                        alert('Insertion Failed. Plzz try again');
                    </script>
<?php
                // header('location: Sign_up.php');
            }
            else{
?>
                <script>
                    if (confirm("Sign up Success. Go to Login page to login")) {
                        window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/Login.php");
                    } 
                </script>
<?php
            }
        }





















        if(isset($_POST['change_password'])){


            $Email = $_SESSION['email'];
            $Oldpassword = mysqli_real_escape_string($con,$_POST['oldpassword']);
            $Newpassword = mysqli_real_escape_string($con,$_POST['newpassword']);
            $Renewpassword = mysqli_real_escape_string($con,$_POST['renewpassword']);
            if($Newpassword != $Renewpassword){
?>
                    <script>
                        if (confirm("New password and re-type new password doesn't match")) {
                            window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/Setting.php");
                        } 
                        else{
                            window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/Setting.php");
                        }
                    </script>
<?php
            }

            $user_change_password_query = "select * from users where email='$Email' and password='$Oldpassword'";
            $user_query = mysqli_query($con, $user_change_password_query);
            $row = mysqli_fetch_assoc($user_query);
            if ($row['password'] != $Oldpassword) {
?>
                    <script>
                        if (confirm("Old Password doesn't match")) {
                            window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/Setting.php");
                        } 
                        else{
                            window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/Setting.php");
                        }
                    </script>
<?php
                // header('location: Sign_up.php');
            }

            $sql = "update users set password='$Newpassword' WHERE email='$Email'";
            $query = mysqli_query($con, $sql);
            if ($query) {
?>
                    <script>
                        if (confirm("Password Channged Successfully")) {
                            window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/Product.php");
                        } 
                        else{
                            window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/Product.php");
                        }
                    </script>
<?php
                // header('location: Sign_up.php');
            }

        }




















        
        if(isset($_POST['submit_Login'])){
            $Email = mysqli_real_escape_string($con,$_POST['Email']);
            $Password = mysqli_real_escape_string($con,$_POST['Password']);
            $user_Login_query = "select * from users where email='$Email' and password='$Password'";
          
            $user_Login_submit = mysqli_query($con, $user_Login_query);
            $count = mysqli_num_rows($user_Login_submit);
            $_SESSION['email'] = $Email;

            if (!$count) {
?>
                    <script>
                        if (confirm("Email Id or Password is incorrect")) {
                            window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/Login.php");
                        } 
                        else{
                            window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/Login.php");
                        }
                    </script>
<?php
                // header('location: Sign_up.php');
            }
            else{
?>
                <script>
                    if (confirm("Successfull login")) {
                        window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/index.php");
                    } 
                    else{
                        window.location.replace("http://127.0.0.1/phpmyadmin/myprojects/internshala/PHPPROJECT/index.php");

                    }
                </script>
<?php
            }
        }
?>