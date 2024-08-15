<?php 
include "./Function/main-function.php";
include "./Includes/connect.php";
include "./Includes/styling-links.php";
addtocart();
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

    <a style="margin-left: 50px; padding-top: 15px;" class="navbar-brand nav-div" href="index.php"><img style="width: 80px;" src="./Assets/images/logo.jpg" alt=""></a>

    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa-solid fa-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse d-flex " id="navbarSupportedContent" style="margin-left:300px">
    
        <div>  
        <form class="d-flex pt-3" action="index.php" method="get">
            <input class="form-control" style="width: 500px; margin-right:10px;" type="search" placeholder="Search"  name="searchdata">
            <!-- <button class="btn bg-primary ml-1" type="submit">Search</button> -->
            <!-- <input type="submit" class="btn bg-primary ml-1" name="btnsearch" value="Search"> -->
            <a href="index.php?show-products" >
              <button type="submit" class="btn bg-primary ml-1" name="btnsearch" value="Search">Search</button>
            </a>
          </form>
        </div>
          
        <div class="nav-div">
          <div>
            <ul class="navbar-nav ">
              <li class="nav-item" style="margin-left:45px;">
                <a class="nav-link active text-light" aria-current="page" href="login.php">
                 <i class="fa fa-sign-in">Login</i> 
                </a>
              </li>
            </ul>
            </div>
        </div> 
        
        <div class="nav-div" style="margin-left:55px;">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="cart.php"><i class="fa-solid fa-cart-shopping fa-2xl" style="color: #0D6EFD;"></i>
                  <sup style="font-size:22px;color: #0D6EFD;"><?php cartQuantity(); ?></sup></a>
                </li>
            </ul>
        </div> 
          
        <div>
          <ul>
            <li class="nav-item dropdown mt-3">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                More
              </a>
              <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
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
