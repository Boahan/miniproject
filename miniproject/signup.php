<?php

$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['send'])){

   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmpassword = $_POST['confirmpassword'];


   $insert = "INSERT INTO `sign_up_form`(`fname`,`lname`,`email`, `password`, `confirmpassword`) VALUES ('$fname','$fname','$email','$password','$confirmpassword')";

   mysqli_query($conn, $insert);

   header('location:contact.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Signup</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="contact">

   <h1 class="heading">Sign up</h1>

   <form action="" method="post">

      <div class="flex">

         <div class="inputBox">
            <span>firstname</span>
            <input type="text" placeholder="enter your firstname" name="fname" required>
         </div>

         <div class="inputBox">
            <span>lastname</span>
            <input type="text" placeholder="enter your lastname" name="lname" required>
         </div>

         <div class="inputBox">
            <span>email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>

         <div class="inputBox">
            <span>password</span>
            <input type="text" placeholder="enter your password" name="password" required>
         </div>


         <div class="inputBox">
            <span>confirm password</span>
            <input type="text" placeholder="enter your password" name="confirmpassword" required>
         </div>



      
      </div>

      <input type="submit" value="confirm" name="send" class="btn">

   </form>

</section>

<?php @include 'footer.php'; ?>

</div>


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>