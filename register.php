<?php

    include("connect.php");

    $name = $_p['name'];
   $mobile = $_POST['mobile'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
   $address = $_POST['address'];
   $image = $_FILES['photo']['name'];
   $tmp_name = $_FILES['photo']['tmp_name'];
   $role  = $_post['role'];
    

   if($password==$cpassword){
        move_uploaded_file($tmp_name, "../uploads/$image");
        $insert = mysqli_query($connect, "INSERT INTO user(	f_name,mobile,address,password,photo,role, status,votes) VALUES('$name','$mobile','$address','$password','$image','$role',0,0)");
        if($insert){
            echo ' 
            <script>
                     alert("Registration Successfull!");
                     window.location = "../";
              </script>';
        }
        else{
            echo ' 
            <script>
                     alert("Some erroe occured!");
                     window.location = "../routes/register.html";
              </script>';
        }
   }
   else{
    echo ' 
         <script>
                  alert("password and confirm password does not match!");
                  window.location = "../routes/register.html";
           </script>';
   }


?>