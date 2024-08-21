<?php 
include "../Includes/styling-links.php";


?>

  <?php
  
if (!isset($_SESSION['username'])){
  include "login.php";
}
else{
  include "payment.php";
}
  ?>
