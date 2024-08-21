<?php 
function addtocart() {
  if(isset($_GET['addtocart'])){
   global $conn;
   $ip = getIPAddress();
   $getProduct_id = $_GET['addtocart'];
   $select_cart_query = "SELECT * FROM cart LEFT JOIN product ON cart.product_id = product.id WHERE ip_address = '$ip' AND product_id = $getProduct_id";
   $result_query = mysqli_query($conn, $select_cart_query);
   $num_of_rows = mysqli_num_rows($result_query);
   
  
   $select_product_query = "SELECT * FROM product WHERE id = $getProduct_id";
   $result_query_product = mysqli_query($conn, $select_product_query);
   $product_info = mysqli_fetch_assoc($result_query_product);
   
 
   if($num_of_rows > 0) {
     $product_name = $product_info['pname'];
     echo "<script> alert('$product_name has already been added to your cart') </script>";
     echo "<script> window.open('index.php','_self')</script>";
   }
   else {
    $product_price = $product_info['dprice'];
     echo "<script> alert('Product Successfully added to your cart') </script>";
     echo "<script> window.open('index.php','_self')</script>";
     $insert_cart_query = "INSERT INTO cart (product_id,ip_address,quantity,total_price) VALUES ($getProduct_id,'$ip',1,$product_price)";
     $result_query = mysqli_query($conn, $insert_cart_query);
 
     
   }
  }
 }
 
 function cartQuantity() {
   if(isset($_GET['addtocart'])){
     global $conn;
     $ip = getIPAddress();
     $select_cart_query = "SELECT * FROM cart  WHERE ip_address = '$ip'";
     $result_query = mysqli_query($conn, $select_cart_query);
     $num_of_rows = mysqli_num_rows($result_query);
        
   }
   else{
     global $conn;
     $ip = getIPAddress();
     $select_cart_query = "SELECT * FROM cart WHERE ip_address = '$ip'";
     $result_query = mysqli_query($conn, $select_cart_query);
     $num_of_rows = mysqli_num_rows($result_query);
     
   }
   echo $num_of_rows;
 }

 function productOrders() {
  global $conn;
  $totalPrice = 0;
  $ip = getIPAddress();
  
  $cartIp = "SELECT * FROM cart WHERE ip_address = '$ip'";
  $cartIp_result = mysqli_query($conn, $cartIp);
  $cartDataRows = mysqli_num_rows($cartIp_result);
  if ($cartDataRows > 0){
  
  while($row = mysqli_fetch_array($cartIp_result)){
    $product_id = $row['product_id'];
    $cartProduct = "SELECT * FROM product where id = $product_id";
    $cartProduct_result = mysqli_query($conn,$cartProduct);
    $productQuantity = $row['quantity'];
    

    while($productDetails = mysqli_fetch_array($cartProduct_result)){
      $product_id = $productDetails ['id'];
      $productPrice = array($productDetails['dprice']);
      $productName = $productDetails['pname'];
      $productImage = $productDetails['pimg1'];
      $singleProductPrice = $productDetails['dprice'];
      $productStock = $productDetails['stock'];
      $productPriceTotal = array_sum($productPrice);
        
      $eachProductTotal = $singleProductPrice * $productQuantity;
      
      echo "
      
      <form action='cart.php' method='POST'> 
      <div class='row  border border-black rounded bg-white p-2 m-0 mb-3'>
  
      <div class='p-0 m-0 ps-3 text-success'>
        <h4 class='p-0 m-0 '>Delivery Date </h4> 
      </div>  
       
      <div class='col-3 p-0 m-0 mt-4 cart-product-img-container'>
        <img class='cart-product-img' src='./Admin/admin-assets/product-images/$productImage' alt=''>
      </div>
    
      <div class='col-6 p-0 m-0'>
        <div class='mb-3'>
          <h4>$productName</h4>
        </div>
        <div class='mt-2'>
          <h6>Unit Price: Rs $singleProductPrice/=</h6>
        </div>
        <input value ='$product_id' name='Cart' hidden>
        <div class='d-flex gap-2 mt-3 align-items-center'>
           <h6 class='p-0 m-0'>Quantity: $productQuantity<span class='text-secondary m-0 p-0'>/$productStock Available</span></h6> 
           
           <div class='d-flex align-items-center'>
           <input type='number' name='quantity' min='1' max='$productStock' value='$productQuantity' >
           <a href = ''>
           <input type='submit' class='ms-2 btn btn-primary btn-sm ' value ='Update' name='updateCart'>
          </a>
           </div>
           <div>
           <a href = '?delete=$product_id' class='ms-2' name='removeCart'>
           <i class='fa fa-trash btn p-0 fa-xl ' style='color: red;'></i> </a>
           
           </div>

        </div> 
        <div class='mt-4'>
          <h6>Total Price: Rs $eachProductTotal/=</h6>
      </div>

      </div>
    
    </div>
   </form>

      ";
    }
  }
      
  if(isset($_POST['updateCart'])) {

    $quantity = $_POST['quantity'];
    $updateId = $_POST['Cart'];
    $eachProductTotal = $singleProductPrice * $quantity;
    $updateCartQuantity = "UPDATE cart SET quantity = $quantity, total_price = $eachProductTotal WHERE product_id = '$updateId' and ip_address = '$ip'";
    $updateQuery = mysqli_query($conn, $updateCartQuantity); 
    echo "<script>window.open('cart.php','_self')</script>";
      
          
  }

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $deleteCartProduct = "DELETE FROM cart Where product_id = $id";
    $deleteQuery = mysqli_query($conn, $deleteCartProduct);
    echo "<script>window.open('cart.php','_self')</script>";
    
  } 
}
else {
  echo "<h4 class='text-danger'>You Have No Items Added To The Cart</h4>
   <a href='index.php' class='btn btn-success btn-lg'> View Products </a>
  ";
}
 }

 function orderSummary() {
  global $conn;
  $ip = getIPAddress();
  $totalPrice = 0;
  $cartItem = "SELECT * FROM cart  WHERE ip_address = '$ip'";
  $cartItem_result = mysqli_query ($conn, $cartItem);
  $rows = mysqli_num_rows($cartItem_result);
  
  if ($rows > 0){
    
  while( $productDetails = mysqli_fetch_array($cartItem_result)){
    $product_id = $productDetails['product_id'];  
    $productQuantity = $productDetails['quantity'];
      $productPrice = array($productDetails['total_price']);
      $totalCartPrice = array_sum($productPrice);
      $totalPrice += $totalCartPrice;
      
    }
    if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      $deleteCartProduct = "DELETE FROM cart Where product_id = $id";
      $deleteQuery = mysqli_query($conn, $deleteCartProduct);
      echo"";
    }
 
    echo "
    <div style='width: 400px; height: auto; margin-right:30px; margin-top:42px' class='border border-dark rounded bg-white radius-2 p-3 position-fixed end-0  '>
  
    <h5> ORDER SUMMARY</h5> 
          <div class='container'>
          <div class='col'>
          <div style='font-weight: bold; font-size:larger' class='row mb-2 border-bottom border-black'>Total Products:<div class='col text-end'>$rows</div>


          <div class='dropdown p-0 m-0'>
                  <a class='btn  dropdown-toggle p-0 m-0' href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>
                    View Products
                  </a>
                  <ul class='dropdown-menu w-100' aria-labelledby='dropdownMenuLink'>";

                  $cartItem = "SELECT * FROM cart LEFT JOIN product ON cart.product_id = product.id WHERE ip_address = '$ip'";
                  $cartItem_result = mysqli_query ($conn, $cartItem);
                  $rows = mysqli_num_rows($cartItem_result);
                  while( $productDetailss = mysqli_fetch_array($cartItem_result)){
                    $name = $productDetailss['pname'];
                    echo "
                    <div class='d-flex dropdown-item align-items-center p-2'>
                        <li><a class='p-0 pe-2 dropdown-item text-end' href='#'>$name ($productQuantity)</a></li> 
                        <div class='col text-end ps-2 pe-2 '>
                          <a href = 'cart.php?delete=$product_id' class='ms-2 btn btn-sm' name='removeCart'>
                          <i class='fa fa-trash btn p-0' style='color: red;'></i> </a>

                      </div> 
                    </div>";
                  }
          
          
                echo "
                  </ul>  
              </div>
           </div>

          <div class='row mb-2 border-bottom border-black'>Total Product Price:<div class='col text-end'>$totalPrice</div></div>
          <div class='row mb-2 border-bottom border-black'>Total Tax:<div class='col text-end'>50000</div></div>
          <div class='row mb-4 border-bottom border-black'>Total Price:<div class='col text-end'>50000</div></div>
        
        </div>
        <a href='users/checkout.php' class='btn btn-primary w-100 mt-2 mb-2'>Place Your Order</a>
        <a href='index.php' class='btn btn-secondary w-100 mt-2 mb-2'>Continue Shopping</a>
        
        
          </div>
    ";
}
else 
{
  "";
}
}

?>