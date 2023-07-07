<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login2.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login2.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./style2.css">
</head>
<body>
   
<?php
if(isset($message)){
   foreach($messages as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<div class="container">
<nav class="nav">
   <div class="contain">
   <img src="images/logo.svg" alt="Logo" class="siteLogo">

   <?php
      $select_user = mysqli_query($conn, "SELECT * FROM `user_info` 
      WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch_user = mysqli_fetch_assoc($select_user);
      };
   ?>
   <div class="userInfo">
      <button>Shop</button>
      <button>Your Prescriptions</button>
      <a href="index2.php?logout=<?php echo $user_id; ?>" 
         onclick="return confirm('are your sure you want to logout?');" class="logOut">Log out</a>
      <span><?php echo $fetch_user['name']; ?></span>
   </div>
   </div>
   
</nav>
<div class="hero">
   <div class="contain">
      <h1 class="hero-h1" >ORDER MEDICINE ONLINE <br>FROM <img src="images/logo.svg" alt="Logo" style="display: inline; height: 30px; " class="siteLogo"></h1>
      <br>
      <p class="hero-p" >A trusted medicine bank for all,
         offering affordable drugs and top level doctor prescription to treat
         you to quickly.
      </p>
      <br>
      <a href="#" class="cta-button">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
  <path d="M19.8333 21C20.4521 21 21.0456 21.2458 21.4832 21.6834C21.9208 22.121 22.1666 22.7145 22.1666 23.3333C22.1666 23.9522 21.9208 24.5457 21.4832 24.9832C21.0456 25.4208 20.4521 25.6667 19.8333 25.6667C19.2145 25.6667 18.621 25.4208 18.1834 24.9832C17.7458 24.5457 17.5 23.9522 17.5 23.3333C17.5 22.0383 18.5383 21 19.8333 21ZM1.16663 2.33333H4.98163L6.07829 4.66667H23.3333C23.6427 4.66667 23.9395 4.78958 24.1583 5.00837C24.377 5.22717 24.5 5.52391 24.5 5.83333C24.5 6.03167 24.4416 6.23 24.36 6.41667L20.1833 13.965C19.7866 14.6767 19.0166 15.1667 18.1416 15.1667H9.44996L8.39996 17.0683L8.36496 17.2083C8.36496 17.2857 8.39569 17.3599 8.45039 17.4146C8.50508 17.4693 8.57927 17.5 8.65663 17.5H22.1666V19.8333H8.16663C7.54779 19.8333 6.9543 19.5875 6.51671 19.1499C6.07913 18.7123 5.83329 18.1188 5.83329 17.5C5.83329 17.0917 5.93829 16.7067 6.11329 16.38L7.69996 13.5217L3.49996 4.66667H1.16663V2.33333ZM8.16663 21C8.78546 21 9.37896 21.2458 9.81654 21.6834C10.2541 22.121 10.5 22.7145 10.5 23.3333C10.5 23.9522 10.2541 24.5457 9.81654 24.9832C9.37896 25.4208 8.78546 25.6667 8.16663 25.6667C7.54779 25.6667 6.9543 25.4208 6.51671 24.9832C6.07913 24.5457 5.83329 23.9522 5.83329 23.3333C5.83329 22.0383 6.87163 21 8.16663 21ZM18.6666 12.8333L21.91 7H7.16329L9.91663 12.8333H18.6666Z" fill="black"/>
</svg>
        Go to Shop
    </a>

   </div>
   <div class="hero-image">
      
   </div>
</div>
<div class="section2">
   
</div>
</body>
</html>