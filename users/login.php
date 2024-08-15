<?php
include "Includes/connect.php";
include "Includes/styling-links.php";
?>

<div class="container mt-5 d-flex justify-content-center align-items-center">
  <div class="p-3 mt-5 border border-black  bg-light justify-content-center align-items-center">
    <form action="" method="get" class="">
      <h4 class="mb-4 text-center ">Login</h4>
      <div class="form-group text-center" style="width:fit-content">

      <div class="mt-3 " style="width:400px">
          <input type="email" id="enteremail" name="username" placeholder="Enter Email or Phone Number" class="form-control w-100 text-center">
      </div>
      
      <div class="mt-3 ">
        <input type="email" id="enterpass" name="password" placeholder="Enter Password" class="form-control w-100  text-center">
      </div>
      <div class="mt-1">
        <a href="" class="text-decoration-none text-primary">Forgot Password?</a>
      </div>
      
      <div class="mt-3">
       <input type="submit" class="btn btn-primary form-control w-75" value="Sign In">
      </div>
      
      <div class="mt-3">
       Dont Have an Account? <a href="users/signup.php" class="text-decoration-none text-primary">Sign Up</a>
      </div>
    
      </div>
    </form>
  </div>
</div>