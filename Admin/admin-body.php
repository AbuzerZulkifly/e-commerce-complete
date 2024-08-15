<?php 
include "./../Includes/connect.php";
include "./../Includes/styling-links.php";
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
</head>
<body>
  
  <div class="container-fluid p-0 m-0 position-fixed">
    <nav class="navbar navbar-expand-lg navbar-light bg-black " style="height:100px">
      <div class="container-fluid d-flex p-0">
        <a style="margin-left: 100px; padding-top: 15px;" class="navbar-brand nav-div" href="#"><img style="width: 80px;" src="../Assets/images/logo.jpg" alt=""></a>
        
        <nav class="navbar navbar-light bg-black pe-5">
          <ul>
            <li class="nav-item dropdown mt-3 me-5">
              <a class="nav-link dropdown-toggle text-light"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img style="width: 50px;" src="https://cdn-icons-png.flaticon.com/512/8847/8847419.png" alt="">
                <span class="ms-1 username">Username</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-left bg-secondary" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Name</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Email</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
                
              </ul>
            </li>
          </ul>
        </nav>
      
      </div>
    </nav>
  </div>

  <!-- 2nd container-->

  <div class="side-navbar" style="width:180px">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="index.php" class="d-flex align-items-center pb-3 mb-md-5 me-md-auto ms-4 text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                
                <li style="list-style: none;">
                            <i class="fs-4 bi-bootstrap"></i> 
                            <a href="index.php?insert_category" class="nav-link px-0"> <span class="d-none d-sm-inline text-light categ"><h5 class="text-secondary">Insert Details</h5></span>  </a> 
                </li>

                <ul class="nav nav-pills flex-column mb-sm-auto mt-5 align-items-center align-items-sm-start" id="menu">
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <h5 class="text-secondary">View Details</h5></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-light">Products</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-light">Categories</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-light">Brands</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-light">Orders</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-light">Payments</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-light">Users</span></a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <hr>                
            </div>
        </div>
    
    
        <div class="bay-area">
            
        </div>




<!-- Bootstrap JS link -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>
</html>