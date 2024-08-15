<?php 
include "./Includes/styling-links.php";

?>

<div class="main-container">
  <?php
  
if (!isset($_SESSION['username'])){
  include "users/login.php";
}
else{
  include "payment.php";
}
  ?>
</div>