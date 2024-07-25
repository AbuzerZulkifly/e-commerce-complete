<?php 
include "./Includes/connect.php";

// Display products on the main page
  function getProducts(){
    global $conn;
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
    $select_product = "SELECT * FROM `product` ORDER BY rand()";
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
      
     $discountfield = 0;
     if ($pstock > 0) {
       if ($pdiscount > 0) {
         
         $discountfield = 1;
          if ($discountfield == 1) {
           $discountfield = "<span style='font-size:medium; ' class='text-secondary mt-2 text-decoration-line-through'>Rs. <span    class='discount-price'>$pdiscount</span></span>";
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
             
             <div class='card'>
               <img src='./Admin/admin-assets/product-images/$pimg1' class='card-img-top product-img p-2' alt='...'>
               <div class='card-body'>
                   <h5 class='card-title'>$pname</h5>
                   <p class='card-text m-0 mb-1'>$pdescription.</p>
                   
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
                     <span style='font-size:20px; font-weight:bold'>Rs. <span class='main-price text-black'>$pprice</span></span>
                     </div>
                     <div class='mt-1'>
                      $discountfield
                     </div>
                   </div>
                 
                   <div class='d-flex align-items-center'>
                     <div class='btn-group' role='group'>
                       <button type='button' class='btn btn-secondary btn-md btn-cart'><i class='fa-solid fa-minus'></i></button>
                       <button type='button' class='btn btn-primary btn-md btn-cart'><i class='fa-solid fa-plus'></i></button>
                     </div>

                     <div class='ms-2'>
                       <i class='fa fa-cart-shopping fa-2xl'></i>
                       <sup class='product-quantity' style='margin-left: 38px; font-size:larger;'>1</sup>
                     </div>
                   </div>

                   <a href='' class='btn btn-success btn-md mt-3 btn-view' style='padding-left:130px; padding-right:130px; margin-left:10px'>View More</a>
               
                 </div>
             </div>
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
    echo "<h3 class='ms-5 ps-5'>Sorry at the moment we do not have products under $category_name  </h3>";
  }
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
    
   $discountfield = 0;
   if ($pstock > 0) {
     if ($pdiscount > 0) {
       
       $discountfield = 1;
        if ($discountfield == 1) {
         $discountfield = "<span style='font-size:medium; ' class='text-secondary mt-2 text-decoration-line-through'>Rs. <span    class='discount-price'>$pdiscount</span></span>";
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
           
           <div class='card'>
             <img src='./Admin/admin-assets/product-images/$pimg1' class='card-img-top product-img p-2' alt='...'>
             <div class='card-body'>
                 <h5 class='card-title'>$pname</h5>
                 <p class='card-text m-0 mb-1'>$pdescription.</p>
                 
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
                   <span style='font-size:20px; font-weight:bold'>Rs. <span class='main-price text-black'>$pprice</span></span>
                   </div>
                   <div class='mt-1'>
                    $discountfield
                   </div>
                 </div>
               
                 <div class='d-flex align-items-center'>
                   <div class='btn-group' role='group'>
                     <button type='button' class='btn btn-secondary btn-md btn-cart'><i class='fa-solid fa-minus'></i></button>
                     <button type='button' class='btn btn-primary btn-md btn-cart'><i class='fa-solid fa-plus'></i></button>
                   </div>

                   <div class='ms-2'>
                     <i class='fa fa-cart-shopping fa-2xl'></i>
                     <sup class='product-quantity' style='margin-left: 38px; font-size:larger;'>1</sup>
                   </div>
                 </div>

                 <a href='' class='btn btn-success btn-md mt-3 btn-view' style='padding-left:130px; padding-right:130px; margin-left:10px'>View More</a>
             
               </div>
           </div>
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
    echo "<h3 class='ms-5 ps-5'>Sorry at the moment we do not have products for $brand_name  </h3>";
  }
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
    
   $discountfield = 0;
   if ($pstock > 0) {
     if ($pdiscount > 0) {
       
       $discountfield = 1;
        if ($discountfield == 1) {
         $discountfield = "<span style='font-size:medium; ' class='text-secondary mt-2 text-decoration-line-through'>Rs. <span    class='discount-price'>$pdiscount</span></span>";
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
           
           <div class='card'>
             <img src='./Admin/admin-assets/product-images/$pimg1' class='card-img-top product-img p-2' alt='...'>
             <div class='card-body'>
                 <h5 class='card-title'>$pname</h5>
                 <p class='card-text m-0 mb-1'>$pdescription.</p>
                 
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
                   <span style='font-size:20px; font-weight:bold'>Rs. <span class='main-price text-black'>$pprice</span></span>
                   </div>
                   <div class='mt-1'>
                    $discountfield
                   </div>
                 </div>
               
                 <div class='d-flex align-items-center'>
                   <div class='btn-group' role='group'>
                     <button type='button' class='btn btn-secondary btn-md btn-cart'><i class='fa-solid fa-minus'></i></button>
                     <button type='button' class='btn btn-primary btn-md btn-cart'><i class='fa-solid fa-plus'></i></button>
                   </div>

                   <div class='ms-2'>
                     <i class='fa fa-cart-shopping fa-2xl'></i>
                     <sup class='product-quantity' style='margin-left: 38px; font-size:larger;'>1</sup>
                   </div>
                 </div>

                 <a href='' class='btn btn-success btn-md mt-3 btn-view' style='padding-left:130px; padding-right:130px; margin-left:10px'>View More</a>
             
               </div>
           </div>
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
      echo "<li class = 'nav-item bg-secondary border-bottom'>
               <a href = 'index.php?brand=$id' class='nav-link navlist text-center'>
               $title
               </a>
            </li>";
    }

   }
?>