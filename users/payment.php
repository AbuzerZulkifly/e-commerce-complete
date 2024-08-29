<?php
 $ip = getIPAddress(); 
 $productQuery = mysqli_query($conn, "SELECT * FROM cart LEFT JOIN product ON cart.product_id = product.id WHERE ip_address = '$ip'");
 $cartTotal = 0;
 
?>
<style>
  img{
    width: 200px;
  }
</style>
<div class="main-container">
  <div class="container-fluid p-5 mt-5 border border-dark bg-light">
    <div class="row ">
      <div class="col-5 p-3  ">
        <div >
         <h4 class="p-0">Details</h4> 
        </div>
         <div class="row border-end p-1 gy-2">
           
           <?php 
            while($productData = mysqli_fetch_assoc($productQuery)){
              $ipaddress = $productData['ip_address'];
              $image = $productData['pimg1'];
              $name = $productData['pname'];
              $quantity = $productData['quantity'];
              $price = $productData['dprice'];
              $total = $productData['total_price'];
              $cartTotal += $productData['total_price'];

              $userid = $_SESSION['username'];
              $userQuery = mysqli_query($conn, "SELECT * FROM user WHERE email = '$userid' OR mobile_no = '$userid'");
              $userData = mysqli_fetch_assoc($userQuery);
              
              $username = $userData['username'];
              $mobile_no = $userData['mobile_no'];
              $address = $userData['address'];
              
            
            echo "
              <div class='col-12 d-flex align-content-center gap-3 p-2 pb-4 border-bottom border-dark'>
              <div >
               <img src='../Admin/admin-assets/product-images/$image' alt=''>
               </div>
               <div>
                <div>
                   <span class='fw-bold'>Product:</span> $name
                </div>
                <div>
                   <span class='fw-bold'>Quantity:</span> $quantity
               </div>
               <div>
               <span class='fw-bold'>Price Per unit:</span> RS $price/=
               </div>
               <div>
               <span class='fw-bold'>Total:</span> RS $total/=
               </div>
               </div>
            
             </div>";
            }
           ?>
         </div>         
      </div>
      <!-- 2nd  -->
    <div class="col-7 p-3 ps-5">
      <div >
         <h4 class="">Payment Details</h4> 
        </div>
          <table class="table">
            <?php
            echo "
          <thead>
            <tr>
            <th scope='col'>Delivery Date</th>  
            <th scope='col'>Product Total Amount</th>
            <th scope='col'>Delivery Charge</th>      
            <th scope='col'>Total Order Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>25/10/2024</td>
              <td>$cartTotal/=</td>
              <td>1400</td>
              <td></td>
            </tr>
          </tbody>
          
        </table>
            <div>
            <i class='fas fa-exclamation fa-lg mt-2'></i>
              Delivery Date Might Vary Depending On Certain Situation
            </div>
          
            <div class='row'>
          <div class='col-5 mt-5 fw-bolder border-end'>
            <h4 class=''>Address</h4> 
            <div class='fw-normal'>
               $username<br>
              $mobile_no <br>
              
              $address, Akurana, <br>
              Kandy, Central <br>
             
            </div>
          </div>";
          ?>
          <div class="col-7 mt-5 ps-5 fw-bolder">
          <h4 class="">Select a Payment Method</h4> 
          <div class="">
            <div class="card-img d-flex align-items-center gap-4">
              
                <a href="">
                <img src="userimg/visa.png" alt="">
                </a>
              
                <a href="">
                <img src="userimg/cashondelicery.jpg" alt="">
                </a> 
              
              
            </div>
          </div>  
        </div>
          
          </div>
</div>

      

    </div>
  </div>
</div>