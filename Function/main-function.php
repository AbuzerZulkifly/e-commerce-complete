<?php 
include "./Includes/connect.php";
include "./Includes/styling-links.php";
include "cart-function.php";


// Display products on the main page
  function getProducts(){
    global $conn;
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
    $select_product = "SELECT * FROM `product` ORDER BY rand() Limit 12";
    $execute_query = mysqli_query($conn, $select_product);
    while($product_data = mysqli_fetch_assoc($execute_query))
    {
     $pid = $product_data['id'];
     $pname = $product_data['pname'];
     $pdescription = $product_data['pdescription'];
     $pkeyword = $product_data['pkeyword'];
     $pcategory = $product_data['category_id'];
     $pbrand = $product_data['brand_id'];
     $pprice = $product_data['price'];
     $pdiscount = $product_data['discount'];
     $pstock = $product_data['stock'];
     $pimg1 = $product_data['pimg1'];
     $padiscount = $product_data['dprice'];
      
     $discountfield = 0;
     if ($pstock > 0) {
       if ($pdiscount > 0) {
         
         $discountfield = 1;
          if ($discountfield == 1) {
           $discountfield = "
           <span style ='font-size:medium;' class='text-secodary mt-2 text-decoration-line-through'>$pprice</span> 
           <span style='font-size:medium; ' class='text-secondary mt-2 '>-Rs. <span>$pdiscount</span></span>";
          }
       }
       else {
         $discountfield = 0;
          if ($discountfield == 0) {
           $discountfield = "";
          }         
       }
       echo "
         <div class='col-md-4'>
         <a href='product-view.php?product_id=$pid' class='product-atag'>
           <div class='card'>
             <img src='./Admin/admin-assets/product-images/$pimg1' class='card-img-top product-img p-2' alt='...'>
             <div class='card-body'>
                 <h5 class='card-title'>$pname</h5>
                 <p class='card-text m-0 mb-1 description-preview'>$pdescription.</p>
                 
                 <div class='d-flex text-secondary mb-1 ratings d-flex align-items-center' style='font-size:medium'>
                 
                   <div class='me-1'>
                   <i class='fa-solid fa-star fa-sm' style='color: #FFD43B;'></i>
                   </div>
                   <div class=''>
                     <span class='class rating-number'>5/5</span>
                   </div>
                   <div class='ms-1 me-3 user-rating'>
                     <span>(<span class='user-rating-number'>100</span>)</span>
                   </div>
                   
                   <div class='ms-1'>
                     <span class='sold-units me-3'>100
                       <span>Units Sold</span>
                     </span>
                     <span class='stock-available'>$pstock
                     Available </span>
                   </div>
                 </div>

                 <div class='d-flex align-items-center mb-2'>
                   <div class='me-2'>
                   <span style='font-size:20px; font-weight:bold'>Rs. <span class='main-price text-black'>$padiscount</span></span>
                   </div>
                   <div class='mt-1'>
                    $discountfield
                   </div>
                 </div>
              
                 <a href='index.php?addtocart=$pid' class='btn btn-primary btn-md mt-3 btn-cart'>Add to Cart</a>
               </div>
           </div>
           </a>
         </div>";
           
         }
      }
    }
  }
}

 // Display products based on the selected category on the main page
 function getCategory(){
  global $conn;

  if(isset($_GET['category'])){
  $category_id = $_GET['category'];  
  $select_product = "SELECT * FROM `product` WHERE category_id = $category_id ORDER BY rand()";
  $execute_query = mysqli_query($conn, $select_product);
  $data_rows = mysqli_num_rows($execute_query);

  $select_category = "SELECT * FROM `category` WHERE category_id = $category_id";
  $execute_query_categoryName = mysqli_query($conn, $select_category);
  $category_data = mysqli_fetch_assoc($execute_query_categoryName);
  $category_name = $category_data['title'];
  

  if ($data_rows < 1) {
    echo "<h5>Sorry at the moment we do not have products under '<span class='text-danger'>$category_name</span>'  </h5>";
  }
  while($product_data = mysqli_fetch_assoc($execute_query))
  {
    echo "<h5> $data_rows Results for '<span class='text-success'>$category_name</span>'</h5>";
   $pid = $product_data['id'];
   $pname = $product_data['pname'];
   $pdescription = $product_data['pdescription'];
   $pkeyword = $product_data['pkeyword'];
   $pcategory = $product_data['category_id'];
   $pbrand = $product_data['brand_id'];
   $pprice = $product_data['price'];
   $pdiscount = $product_data['discount'];
   $pstock = $product_data['stock'];
   $pimg1 = $product_data['pimg1'];
    $padiscount = $product_data['dprice'];
    
   $discountfield = 0;
   if ($pstock > 0) {
     if ($pdiscount > 0) {
       
       $discountfield = 1;
        if ($discountfield == 1) {
         $discountfield = "  <span style ='font-size:medium;' class='text-secodary mt-2 text-decoration-line-through'>$pprice</span> 
         <span style='font-size:medium; ' class='text-secondary mt-2 '>-Rs. <span>$pdiscount</span></span>";
       }
     }
     else {
       $discountfield = 0;
        if ($discountfield == 0) {
         $discountfield = "";
        }         
     }
     echo "
     <div class='col-md-4'>
     <a href='product-view.php?product_id=$pid' class='product-atag'>
         
       <div class='card'>
         <img src='./Admin/admin-assets/product-images/$pimg1' class='card-img-top product-img p-2' alt='...'>
         <div class='card-body'>
             <h5 class='card-title'>$pname</h5>
             <p class='card-text m-0 mb-1 description-preview'>$pdescription.</p>
             
             <div class='d-flex text-secondary mb-1 ratings d-flex align-items-center' style='font-size:medium'>
             
               <div class='me-1'>
               <i class='fa-solid fa-star fa-sm' style='color: #FFD43B;'></i>
               </div>
               <div class=''>
                 <span class='class rating-number'>5/5</span>
               </div>
               <div class='ms-1 me-3 user-rating'>
                 <span>(<span class='user-rating-number'>100</span>)</span>
               </div>
               
               <div class='ms-1'>
                 <span class='sold-units me-3'>100
                   <span>Units Sold</span>
                 </span>
                 <span class='stock-available'>$pstock
                 Available </span>
               </div>
             </div>

             <div class='d-flex align-items-center mb-2'>
             <div class='me-2'>
             <span style='font-size:20px; font-weight:bold'>Rs. <span class='main-price text-black'>$padiscount</span></span>
             </div>
             <div class='mt-1'>
              $discountfield
             </div>
             </div>
              <a href='index.php?addtocart=$pid' class='btn btn-primary btn-md mt-3 btn-cart'>Add to Cart</a>
               
           </div>
       </div>
       </a>
     </div>";
         
       }
    }
  }
}

 // Display products based on the selected brand on the main page
 function getBrand(){
  global $conn;
  if(isset($_GET['brand'])){
  $brand_id = $_GET['brand'];
  $select_product = "SELECT * FROM `product` WHERE brand_id = $brand_id ORDER BY rand()";
  $execute_query = mysqli_query($conn, $select_product);
  $data_rows = mysqli_num_rows($execute_query); 

  $select_brandName = "SELECT title FROM `brand` WHERE brand_id = $brand_id";
  $execute_query_brandName = mysqli_query($conn, $select_brandName);
  $brand_data = mysqli_fetch_assoc($execute_query_brandName);
  $brand_name = $brand_data['title'];

  if($data_rows < 1){
    echo "<h5>Sorry at the moment we do not have any products for <span class='text-danger'>$brand_name</span>  </h5>";
  }
  while($product_data = mysqli_fetch_assoc($execute_query))
  {
    echo "<h5> $data_rows Results for '<span class='text-success'>$brand_name</span>'</h5>";
   $pid = $product_data['id'];
   $pname = $product_data['pname'];
   $pdescription = $product_data['pdescription'];
   $pkeyword = $product_data['pkeyword'];
   $pcategory = $product_data['category_id'];
   $pbrand = $product_data['brand_id'];
   $pprice = $product_data['price'];
   $pdiscount = $product_data['discount'];
   $pstock = $product_data['stock'];
   $pimg1 = $product_data['pimg1'];
    $padiscount = $product_data['dprice'];
   $discountfield = 0;
   if ($pstock > 0) {
     if ($pdiscount > 0) {
       
       $discountfield = 1;
        if ($discountfield == 1) {
         $discountfield = "  <span style ='font-size:medium;' class='text-secodary mt-2 text-decoration-line-through'>$pprice</span> 
         <span style='font-size:medium; ' class='text-secondary mt-2 '>-Rs. <span>$pdiscount</span></span>";
       }
     }
     else {
       $discountfield = 0;
        if ($discountfield == 0) {
         $discountfield = "";
        }         
     }
       echo "
         <div class='col-md-4'>
         <a href='product-view.php?product_id=$pid' class='product-atag'>
           <div class='card'>
             <img src='./Admin/admin-assets/product-images/$pimg1' class='card-img-top product-img p-2' alt='...'>
             <div class='card-body'>
                 <h5 class='card-title'>$pname</h5>
                 <p class='card-text m-0 mb-1 description-preview'>$pdescription.</p>
                 
                 <div class='d-flex text-secondary mb-1 ratings d-flex align-items-center' style='font-size:medium'>
                 
                   <div class='me-1'>
                   <i class='fa-solid fa-star fa-sm' style='color: #FFD43B;'></i>
                   </div>
                   <div class=''>
                     <span class='class rating-number'>5/5</span>
                   </div>
                   <div class='ms-1 me-3 user-rating'>
                     <span>(<span class='user-rating-number'>100</span>)</span>
                   </div>
                   
                   <div class='ms-1'>
                     <span class='sold-units me-3'>100
                       <span>Units Sold</span>
                     </span>
                     <span class='stock-available'>$pstock
                     Available </span>
                   </div>
                 </div>

                 <div class='d-flex align-items-center mb-2'>
                 <div class='me-2'>
                 <span style='font-size:20px; font-weight:bold'>Rs. <span class='main-price text-black'>$padiscount</span></span>
                 </div>
                 <div class='mt-1'>
                  $discountfield
                 </div>
                 </div>
                 <a href='index.php?addtocart=$pid' class='btn btn-primary btn-md mt-3 btn-cart'>Add to Cart</a>
               
               </div>
           </div>
           </a>
         </div>";
         
       }
    }
  }
}


 // Display categories in the side navbar
   function displayCategory(){
    global $conn;
    $select_cat = "SELECT * FROM `category`";
    $result_cat = mysqli_query($conn, $select_cat);
    while($row = mysqli_fetch_assoc($result_cat)){
      $title = $row['title'];
      $id = $row['category_id'];
      echo "<li class='nav-item bg-secondary border-bottom'>
                <a href='index.php?category=$id' class='nav-link text-center navlist'>
                $title
                </a>
            </li>";
    } 
   }

  // Display brand in the side navbar
   function displayBrand(){
    global $conn;
    $select_br = "SELECT * FROM `brand`";
    $result_br = mysqli_query($conn, $select_br);
    while($row_br = mysqli_fetch_assoc($result_br)){
      $title = $row_br['title'];
      $id = $row_br['brand_id'];
      echo "<li class = 'nav-item bg-secondary border-bottom '>
               <a href = 'index.php?brand=$id' class='nav-link navlist text-center'>
               $title
               </a>
            </li>";
    }

   }

   function searchProduct() {
    if (isset($_GET['btnsearch'])){
     global $conn;
     $search_data_value = $_GET['searchdata'];
     $search_data_query = "SELECT * FROM `product` WHERE pkeyword LIKE '%$search_data_value%'";
     $search_result_query = mysqli_query($conn, $search_data_query);
     
     $data_rows = mysqli_num_rows($search_result_query);

    if ($data_rows < 1){
      echo "<h5> Sorry at the moment we dont have <span class='text-danger'> $search_data_value </span> or please enter a valid name</h5>";
    
    }
    else {
      echo "<h5> $data_rows Results for '<span class='text-success'>$search_data_value</span>'</h5>";
    
    }
     while($product_data = mysqli_fetch_assoc($search_result_query))
    {
     
     $pid = $product_data['id'];
     $pname = $product_data['pname'];
     $pdescription = $product_data['pdescription'];
     $pkeyword = $product_data['pkeyword'];
     $pcategory = $product_data['category_id'];
     $pbrand = $product_data['brand_id'];
     $pprice = $product_data['price'];
     $pdiscount = $product_data['discount'];
     $pstock = $product_data['stock'];
     $pimg1 = $product_data['pimg1'];
     $padiscount = $product_data['dprice'];
     $discountfield = 0;
     if ($pstock > 0) {
       if ($pdiscount > 0) {
         
         $discountfield = 1;
          if ($discountfield == 1) {
           $discountfield = "  <span style ='font-size:medium;' class='text-secodary mt-2 text-decoration-line-through'>$pprice</span> 
           <span style='font-size:medium; ' class='text-secondary mt-2 '>-Rs. <span>$pdiscount</span></span>";
         }
       }
       else {
         $discountfield = 0;
          if ($discountfield == 0) {
           $discountfield = "";
          }         
       }
       echo "
         <div class='col-md-4'>
         <a href='product-view.php?product_id=$pid' class='product-atag'>
           <div class='card'>
             <img src='./Admin/admin-assets/product-images/$pimg1' class='card-img-top product-img p-2' alt='...'>
             <div class='card-body'>
                 <h5 class='card-title'>$pname</h5>
                 <p class='card-text m-0 mb-1 description-preview'>$pdescription.</p>
                 
                 <div class='d-flex text-secondary mb-1 ratings d-flex align-items-center' style='font-size:medium'>
                 
                   <div class='me-1'>
                   <i class='fa-solid fa-star fa-sm' style='color: #FFD43B;'></i>
                   </div>
                   <div class=''>
                     <span class='class rating-number'>5/5</span>
                   </div>
                   <div class='ms-1 me-3 user-rating'>
                     <span>(<span class='user-rating-number'>100</span>)</span>
                   </div>
                   
                   <div class='ms-1'>
                     <span class='sold-units me-3'>100
                       <span>Units Sold</span>
                     </span>
                     <span class='stock-available'>$pstock
                     Available </span>
                   </div>
                 </div>

                 <div class='d-flex align-items-center mb-2'>
                 <div class='me-2'>
                 <span style='font-size:20px; font-weight:bold'>Rs. <span class='main-price text-black'>$padiscount</span></span>
                 </div>
                 <div class='mt-1'>
                  $discountfield
                 </div>
                 </div>
                 <a href='index.php?addtocart=$pid' class='btn btn-primary btn-md mt-3 btn-cart'>Add to Cart</a>
               
               </div>
           </div>
           </a>
         </div>";
           
         }
      }
    }
    }
   
    function productDetails(){
      global $conn;
      if(isset($_GET['product_id'])){
      if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
          $product_id = $_GET['product_id'];
      $select_product = "SELECT * FROM `product` LEFT JOIN `brand` ON product.brand_id = brand.brand_id where id = $product_id ";
      $execute_query = mysqli_query($conn, $select_product);
      while($product_data = mysqli_fetch_assoc($execute_query))
      {
       $pid = $product_data['id'];
       $pname = $product_data['pname'];
       $pdescription = $product_data['pdescription'];
       $pkeyword = $product_data['pkeyword'];
       $pcategory = $product_data['category_id'];
       $pbrand = $product_data['title'];
       $pprice = $product_data['price'];
       $pdiscount = $product_data['discount'];
       $pstock = $product_data['stock'];
       $pimg1 = $product_data['pimg1'];
       $pimg2 = $product_data['pimg2'];
       $pimg3 = $product_data['pimg3'];
       $padiscount = $product_data['dprice'];
        
       $discountfield = 0;
         if ($pdiscount > 0) {
           
           $discountfield = 1;
            if ($discountfield == 1) {
             $discountfield = "

             <span style='font-size:30px; font-weight:bold'>Rs. <span class='text-black'>$padiscount</span></span>
                            
             <span style='font-size:large; ' class='text-secondary text-decoration-line-through'>Rs. <span    class='original-price'>$pprice</span> </span> <span class=''>-$pdiscount</span>";

            }
         }
         else {
           $discountfield = 0;
            if ($discountfield == 0) {
             $discountfield = "
             <span style='font-size:30px; font-weight:bold'>Rs. <span class='text-black'>$padiscount</span></span>";
            }         
         }
         echo "
           <div class='row'>
             <div class='col-md-10' style=''>
             <div class='row'>
               <div class='col-md-5'>
                 <div class='product-view-img'>
                  
                       <div class='slider'>    
                       <div id='carouselExample' class='carousel slide text-center p-0 m-0'>
                         <div class='carousel-inner d-flex align-items-center p-0 m-0 ps-4 pe-4 '>
                           <div class='carousel-item active'>
                             <img src='./Admin/admin-assets/product-images/$pimg1' class='product-img' alt='...'>
                           </div>
                           <div class='carousel-item text-center'>
                             <img src='./Admin/admin-assets/product-images/$pimg2' class='product-img' alt='...'>
                           </div>
                           <div class='carousel-item'>
                             <img src='./Admin/admin-assets/product-images/$pimg3' class='product-img' alt='...'>
                           </div>
                         </div>
                         <button class='carousel-control-prev btn-primary' type='button' data-bs-target='#carouselExample' data-bs-slide='prev'>
                           <span class='carousel-control-prev-icon' style='background-color: black;' aria-hidden='true'></span>
                           <span class='visually-hidden'>Previous</span>
                         </button>
                         <button class='carousel-control-next' type='button' data-bs-target='#carouselExample' data-bs-slide='next'>
                           <span class='carousel-control-next-icon' style='background-color: black;' aria-hidden='true'></span>
                           <span class='visually-hidden'>Next</span>
                         </button>
                       </div>
                       </div>
               
                  </div>
         
                  <div class='text-center'>
                   <ul>
                     <li class='nav-item dropdown-item dropdown '>
                       <a class='nav-link dropdown-toggle text-black' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                         Select Colour
                       </a>
                       <ul class='dropdown-menu bg-secondary' aria-labelledby='navbarDropdown'>
                         <li><a class='dropdown-item border-bottom' href='#'>Register</a></li>
                         <?php 
                          = 'danger';
                         echo '<a class='dropdown-item border-bottom bg-' href='#'>Register</a></li>' 
                         ?>
                       </ul>
                     </li>
                   </ul>
                 </div>
               </div>
               
         
               <div class='col-md-6'>
                 <div class='row gy-2  '>
                   <div class='pb-2 border-bottom'>
                   <h4>$pname</h4>
                   <div class='d-flex gap-3 mb-2'>
                     <div>
                       Brand: <span class='text-secondary'>$pbrand</span> |
                     </div>
                     <div>
                     Ratings: <i class='fa-solid fa-star' style='color: #FFD43B;'></i> 100 People rated this product 
                     </div>
                     
                   </div>
                       <h6>Description</h6>
                       <div class='text-secondary description-preview'>
                         $pdescription.
                       </div>
                     </div>
                   </div>
                     
                   <div class='d-flex align-items-center gap-3 border-bottom p-2' style='width: 500px;' >
                     
                    $discountfield
                            
                   </div>
         
                   <div class='d-flex mt-4 align-items-center'>
                              
                   <div class='btn-group' role='group'>
                     <button type='button' class='btn btn-secondary btn-cart-quantity' id='btnminus' onclick='limitNumber();'><i class='fa-solid fa-minus'></i></button>
                     <input class='' type='number' id='cart-quantity' step='1' value='1' onkeyup='limitNumber();' style='width: 40px;'>
                     <button type='button' class='btn btn-primary btn-cart-quantity' id='btnadd'><i class='fa-solid fa-plus'></i></button>
                   </div>  

                   </div>
                   
                   <a href='index.php?addtocart=$pid' class='btn btn-primary btn-md m-0 mt-3 btn-cart'>Add to Cart</a>
                 </div>
               </div>
         
               </div>
             </div>
         
         
             ";
             
           
        }
      }
    }
   }
}

function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  

?>