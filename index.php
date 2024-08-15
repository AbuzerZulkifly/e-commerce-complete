<?php
include "./Includes/mainpage-header.php";
?>
<div class="main-container">

<!--3rd Container///////////////-->
  <div class="row">
    <div class="col-md-10" style="padding-right:25px;">
      <!--Products-->
      <div class="row gy-4">
      <?php
      if (isset($_GET['btnsearch']) && !empty($_GET['searchdata'])){
        
        searchProduct();
      }
      else{
          getProducts();
        
        getCategory();
        getBrand();
      }
      // $ip = getIPAddress();  
      // echo 'User Real IP Address - '.$ip;
          ?>  
      </div>
    </div>


    <div class="col-md-2 bg-dark p-0 w-100% " style="height:100%">
      <!--sideNav-->
      <ul class="navbar-nav">
        <li class="nav-item bg-success">
          <a href="" class="nav-link text-center">
          <h5>Categories</h5>
          </a>
        </li>
        <li class="nav-item bg-secondary border-bottom">
          <a href="index.php" class="nav-link navlist text-center">
          All
          </a>
        </li>

      <?php 
        displayCategory();        

      ?>

      <ul class="navbar-nav">
        <li class="nav-item bg-success border-bottom">
          <a href="index.php" class="nav-link text-center">
          <h5>Brands</h5>
          </a>
        </li>
        <li class="nav-item bg-secondary">
          <a href="index.php" class="nav-link navlist text-center border-bottom">
          All
          </a>
        </li>
      <?php 
       displayBrand();

      ?>
      </ul>


    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>

</html>