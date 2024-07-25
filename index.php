<?php
include "Includes/connect.php";
include "Function/main-function.php";
include "Includes/styling-links.php";

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One Cick</title>
</head>
<body>

<!--NavBar-->
<!-- container-fluid provides a full width container, spanning the entire width of the viewport-->
<div class="container-fluid p-0">
  <!--first child container MAIN NAVBAR-->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light p-3 bg-black header" >
  <div class="container-fluid d-flex p-0 ">

    <a style="margin-left: 50px; padding-top: 15px;" class="navbar-brand nav-div" href="#"><img style="width: 80px;" src="./Assets/images/logo.jpg" alt=""></a>

    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa-solid fa-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse d-flex " id="navbarSupportedContent" style="margin-left:300px">
    
        <div>  
        <form class="d-flex pt-3">
            <input class="form-control" style="width: 500px; margin-right:10px;" type="search" placeholder="Search" aria-label="Search">
            <button class="btn bg-primary ml-1" type="submit">Search</button>
          </form>
        </div>
          
        <div class="nav-div">
          <div>
            <ul class="navbar-nav ">
              <li class="nav-item" style="margin-left:45px;">
                <a class="nav-link active text-light" aria-current="page" href="#">
                 <i class="fa fa-sign-in">Login</i> 
                </a>
              </li>
            </ul>
            </div>
        </div> 
        
        <div class="nav-div" style="margin-left:55px;">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="#"><i class="fa-solid fa-cart-shopping fa-2xl" style="color: #0D6EFD;"></i>
                  <sup style="font-size:22px;color: #0D6EFD;">1</sup></a>
                </li>
            </ul>
        </div> 
          
        <div>
          <ul>
            <li class="nav-item dropdown mt-3">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                More
              </a>
              <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Register</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Contact Us</a></li>
              </ul>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
 </nav>
</div>

<div class="main-container">

  <!--3rd Container-->
    <div class="row">
        <!--product info -->
        <div class="col-md-10" style="padding-right:25px;">
          <!--Products-->
          <div class="row gy-4">
          <?php
          getProducts();  
          getBrand();
          getCategory();  
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

              <?php 
                displayCategory();
              ?>

              <ul class="navbar-nav">
                <li class="nav-item bg-success">
                  <a href="" class="nav-link text-center">
                  <h5>Brands</h5>
                  </a>
                </li>
              <?php 
              displayBrand();
              ?>
              </ul>
        </div>
    
    </div>
</div>
</body>

</html>