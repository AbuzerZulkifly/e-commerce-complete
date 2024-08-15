<?php
include "../Includes/connect.php";
include "../Includes/styling-links.php";
include "../Function/main-function.php";


?>

<div class="container mt-5 d-flex justify-content-center align-items-center">
  
  <div class="p-5 mt-5 border border-black rounded bg-light justify-content-center align-items-center">
    <form action="" method="post" enctype="multipart/form-data" class="">
      <h4 class="mb-3 text-center ">Sign Up</h4>
      <div class="mb-4 text-center">
        <img src="../Assets/images/user_icon.png" alt="" style="width:140px"> <br>
        <label for="input-file" class="display-block bg-black text-light p-1 ps-3 pe-3 rounded mt-1 btn ">Add Image
        <input type="file" id="input-file" name="image" hidden>
        </label>
        
      </div>
      <div class="row gy-4" style="width: 800px;">
        <div class=" col-6">
          <input type="text" class="form-control w-100 text-center" placeholder="Enter Your First and Last Name" name="name"  required>
        </div>
        <div class=" col-6">
          <input type="email" class="form-control w-100 text-center" placeholder="Enter Your Email" name="email" required>
        </div>

        <div class=" col-6 text-center">
          <input type="password" class="form-control w-100 text-center" placeholder="Enter a Password" max="15" name="password" required>
          <label for="" style="font-size: small; font-weight:bold">Your Password Must Be Atleast 8 Digits</label>
        </div>
        <div class=" col-6">
          <input type="text" class="form-control w-100 text-center" placeholder="Re-Enter Password" name="repassword">
        </div>

        <div class=" col-8">
          <input type="text" class="form-control w-100 text-center" placeholder="Enter Your Address" name="address" required>
        </div>
        <div class=" col-4">
          <input type="number" class="form-control w-100 text-center" placeholder="Enter Phone Number" name="contact" required>
        </div>

        <div class="col-12">
          <input type="submit" class="btn text-center text-light bg-dark form-control" value="Sign Up" name="signup" required>
        </div>
      </div>
    </form>
  </div>
</div>