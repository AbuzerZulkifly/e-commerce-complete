<?php
include "./Includes/connect.php";
include "./Includes/styling-links.php";
?>
<style>
  input{
    width: 500px;
  }
</style>

<div class="container mt-5 d-flex justify-content-center">
  <div class="p-4 mt-5 border">
    <form action="" method="get">
      <h4 class="md-2">Login</h4>
      <div class="form-group">

      <label for="enteremail">Enter Email or Phone Number</label>
      <input type="email" id="enteremail" name="email" placeholder="Enter Email or Phone Number" class="">

      </div>
    </form>
  </div>
</div>