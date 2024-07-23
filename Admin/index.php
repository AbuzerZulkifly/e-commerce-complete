<?php 
include "./admin-body.php"
?>
<div class="side-navbar">
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
           
           <?php 
             if(isset($_GET['insert_category'])){
              include "insert-details.php";
             }
             
           ?>
            
        </div>

        
</body>
</html>