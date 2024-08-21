<?php
include "../Includes/connect.php";
include "../Includes/styling-links.php";
include "../Function/main-function.php";

$error = 0;
if(isset($_POST['signin'])){
 
  $username = $_POST['username'];
  $password = $_POST['password'];
  $ip = getIPAddress();

  $userExists = mysqli_query($conn,"SELECT * FROM user WHERE mobile_no = '$username' OR email = '$username'") ;
  
  $user_row = mysqli_num_rows($userExists);
  $userData_row = mysqli_fetch_assoc($userExists);

  $userCart = mysqli_query($conn, "SELECT * FROM cart WHERE ip_address = '$ip'");
  $userCartRow = mysqli_num_rows($userCart);

  if ($user_row > 0){
    $session_email = $_SESSION['email'] = $email;
    $userEmail = $session_email;
     if(password_verify ($password, $userData_row['password'])){
      $useEmail;
      if ($user_row == 1 && $userCartRow == 0 ){
        $useEmail;
        echo "<script> window.open('user_profile.php', '_self') </script>";
      }

      else {
        $useEmail;
        echo "<script> window.open('payment.php', '_self') </script>";
      }

     }

     else {
      $error = 1;
     }

  }

  else {
   $error = 1;
  }

}

?>

<div class="container mt-5 d-flex justify-content-center align-items-center">
  <div class="p-3 mt-5 border border-black rounded  bg-light justify-content-center align-items-center">
    <form action="" method="post">
      <h4 class="mb-4 text-center ">Login</h4>
      <div class="form-group text-center" style="width:fit-content">

      <div class="mt-3 text-center" style="width:400px">
      <?php 
      if ($error) {
       echo "<small class='text-danger mb-2'>Your Email or Password is Incorrect</small>";
      }
      ?>
    
      <input type="text" id="enteremail" name="username" placeholder="Enter Email or Phone Number" class="form-control w-100 text-center" value="<?php 
      if($error) {
        echo"$username";
      }
      ?>">
      </div>
      
      <div class="mt-3 password-container ">
        <div class="password-icon">
          <i class="fa fa-eye fa-l btn btn-show ms-2" style="color:gray"></i>
        </div>
          
        <input type="password" id="enterpass" name="password" placeholder="Enter Password" class="form-control w-100 passwordInput text-center" value="<?php 
      if($error) {
        echo"$password";
      }
      ?>">
      </div>

      <div class="mt-1">
        <a href="" class="text-decoration-none text-primary">Forgot Password?</a>
      </div>
      
      <div class="mt-3">
       <input type="submit" class="btn btn-primary form-control w-75" name="signin" value="Sign In">
      </div>
      
      <div class="mt-3">
       Dont Have an Account? <a href="signup.php" class="text-decoration-none text-primary">Sign Up</a>
      </div>
    
      </div>
    </form>
  </div>
</div>

<script>
   // Password visibility
   let btnShow = document.querySelector('.btn-show');
    let passInput = document.querySelector('.passwordInput')
  
  btnShow.addEventListener("click", () => {
      if(passInput.type === "password") {
        passInput.type = "text";
        btnShow.classList.replace("fa-eye", "fa-eye-slash")
      
      }
      else {
        passInput.type = "password";
        btnShow.classList.replace("fa-eye-slash", "fa-eye");
      }
    })

</script>