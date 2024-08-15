<?php 
include "../Includes/connect.php";
$brand = 0;
$cate = 0;
$product = 0;
$success = 0;

//Category Insert
if(isset($_POST['insert_category'])){
  $category = $_POST['category_title'];

  $select_cat = "SELECT * FROM `category` WHERE title = '$category'"; 
  $result_select = mysqli_query($conn, $select_cat);
  $rows = mysqli_num_rows($result_select);
  
  if ($rows>0){
    $success = 0;
    $cate = 1;
    
  }
else {
  $insert_cat = "INSERT INTO `category` (title) VALUES ('$category')";
  $result = mysqli_query($conn, $insert_cat);
  if ($result){
    $success = 1;
    $cate = 1;
    
  }
}
}

// Brand Insert
if (isset($_POST['insert_brand'])){
  $brand = $_POST['brand_title'];
  $select_brand = "SELECT * FROM `brand` WHERE title = '$brand'";
  $result_select = mysqli_query($conn, $select_brand);
  $rows = mysqli_num_rows($result_select);

  if($rows > 0){
    $success = 0;
    $brand = 1;
    
  }

  else {
  $insert_brand = "INSERT INTO `brand` (title) VALUES ('$brand')";
  $result = mysqli_query($conn,$insert_brand);
  if($result){
    $success = 1;
    $brand = 1;
  }
 }
}

//product insert
if(isset($_POST['insert_product'])){
   $pname = $_POST['pname'];
   $pdescription = $_POST['pdescription'];
   $pkeyword = $_POST['pkeyword'];
   $pcategory = $_POST['pcategory'];
   $pbrand = $_POST['pbrand'];
   $pprice = $_POST['pprice'];
   $pstock = $_POST['pstock'];
   $pdiscount = $_POST['pdiscount'];
   $padiscount = $_POST['adiscount'];
   //product image access
   $pimg1 = $_FILES['pimg1']['name'];
   $pimg2 = $_FILES['pimg2']['name'];
   $pimg3 = $_FILES['pimg3']['name'];
   
   //product image temp name access
   $temppimg1 = $_FILES['pimg1']['tmp_name'];
   $temppimg2 = $_FILES['pimg2']['tmp_name'];
   $temppimg3 = $_FILES['pimg3']['tmp_name'];

   if($pname == ''|| $pdescription == ''|| $pkeyword == ''|| $padiscount == ''|| $pstock == ''|| $pimg1 == ''|| $pimg2 == '' || $pimg3 == '' || $pbrand == ''|| $pcategory == '' || $pdiscount >= $pprice || $padiscount < 0)
   {
     $success = 0;
     $product = 1;
     
   }
   
   else 
   {
    //Whenever me upload a image first it will be moved to a folder in our system (in admin assets) and then saved to db
    move_uploaded_file($temppimg1, "./admin-assets/product-images/$pimg1");
    move_uploaded_file($temppimg2, "./admin-assets/product-images/$pimg2");
    move_uploaded_file($temppimg3, "./admin-assets/product-images/$pimg3");

    $insert_product = "INSERT INTO `product` (pname,pdescription,pkeyword,category_id,brand_id,pimg1,pimg2,pimg3,price,stock,dprice,discount, date) VALUES ('$pname','$pdescription','$pkeyword','$pcategory','$pbrand','$pimg1','$pimg2','$pimg3','$pprice','$pstock','$padiscount','$pdiscount', NOW())";

    $insert_result = mysqli_query($conn,$insert_product);
    
    if($insert_result) {
      $product = 1;
      $success = 1;
    }
    else {
      die(mysqli_error($conn));
      $product = 1;
      $success = 0;
    }

   }
  }

?>

<style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type="number"] {
                -moz-appearance: textfield;
            }
        </style>
<body>
<div class="container d-flex p-0"> 

 <div class="container-fluid  mt-5 border-end border-black pe-5">
  
  <form action="" method="post" enctype="multipart/form-data">
        <h4 class="m-4 mb-2">Product</h4>
        <div class="form-group">
        <div class="form-outline mb-3" style="width: 715px;">
          <label for="title" class="form-label">Enter Product Name</label>
          <input type="text" class="form-control" id="title" name="pname" placeholder="Enter Product Name" autocomplete="off" required>
        </div>

        <div class="form-outline mb-3" style="width: 715px;">
          <label for="description" class="form-label">Enter Product Description</label>
          <input type="text" class="form-control" id="description" name="pdescription" minlength="" placeholder="Enter Product Description" autocomplete="off" required>
        </div>

        <div class="form-outline mb-4" style="width: 715px;">
          <label for="keyword" class="form-label">Enter Product Keyword</label>
          <input type="text" class="form-control" id="keyword" name="pkeyword" placeholder="Enter Product Keyword" autocomplete="off" required>
        </div>

         <!-- category select-->
        <div class="form-outline d-flex mb-3" style="width: 715px;">
          <select name="pcategory" id="" class="form-select me-4" required>
            <option value="">Select a Category</option>
            <?php 
             $select_cat = "SELECT * FROM `category`";
             $result_cat = mysqli_query($conn, $select_cat);
             while($row_cat = mysqli_fetch_assoc($result_cat))
             {
              $title = $row_cat['title'];
              $id = $row_cat['category_id'];
              echo "<option value ='$id'>$title</option>";
             } 
            ?>
          </select>
                 <!-- brand select-->
          <select name="pbrand" id="" class="form-select" required>
            <option value="">Select a Brand</option>
              <?php 
              $select_br = "SELECT * FROM `brand`";
              $result_br = mysqli_query($conn,$select_br);
              while($row_br = mysqli_fetch_assoc($result_br)){
                $title = $row_br['title'];
                $id = $row_br['brand_id'];
                echo "<option value='$id'>$title</option>";
              }
              ?>
          </select>
        </div>

        <!-- image select-->
        <div class="form-outline mb-3" style="width: 715px;">
          <label for="form-label">Select Images</label>
          <div class="d-flex mt-2">
          <div class="me-2"><input type="file" class="form-control" id="img" name="pimg1"  required></div>
          <div class="me-2"><input type="file" class="form-control" id="img" name="pimg2" required ></div>
          <div><input type="file" class="form-control" id="img" name="pimg3" required></div>
          </div>
        </div>
        
        <div class="form-outline d-flex mb-4" style="width: 715px;">
          <div class="me-4">
            <label for="price" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="price" name="pprice" onkeyup="getValue();" min="100" placeholder="Enter Product Price" autocomplete="off" required>
         </div>
         
         <div class="me-4">
          <label for="discount" class="form-label">Discount Price</label>
          <input type="number" class="form-control" id="discount" name="pdiscount" onkeyup="getValue();"  placeholder="Enter Discount Price" autocomplete="off">
         </div>

        <div class="me-4">
          <label for="afterdis" class="form-label">After Discount</label>
          <input type="number" class="form-control" id="afterdis" name="adiscount" value="" autocomplete="off"  readonly >
        </div> 
          
        <div class="w-25">
          <label for="stock" class="form-label">Stock Amount</label>
          <input type="number" class="form-control" id="keyword" name="pstock" placeholder="Stock Amount" autocomplete="off" required>
        </div> 
        </div>

        <div class="form-outline text-center mb-4 w-100 ">
        <button type="submit" name="insert_product" id="insertproductbtn" class="btn btn-primary w-100">Insert Product</button>
         <?php
          if ($product == 1 && $success == 1){
            echo "Product Successfully Inserted";
          }
          if ($product == 1 && $success == 0){
            echo "Please Check if your discount price is greater than or equal to the product price ";
          }
         ?>
        </div>

        </div>
  </form>
</div>

  <div class="container d-flex ms-5">
    <div class="mt-5 ">
      <form action="" method="post">
        <h4 class="m-4 text-align-center">Category</h4>
        <div class="form-group "> 
          <input type="text" class="form-control w-100 mt-1 mb-2" id="categorytitle" name="category_title" placeholder="Enter Category" required>
        </div>
        <button type="submit" name="insert_category" class="btn btn-primary w-100">Insert Category</button>
      </form>
      <?php 
        if($success == 1 && $cate == 1) {
          echo "Category Inserted";
        }
        else if ($success == 0 && $cate == 1) {
          echo "Category Already Exists";
        }
        ?>
    </div>

   <div class=" ps-5 pe-5 mt-5 ">
      <form action="" method="post">
        <h4 class="m-4">Brand</h4>
        <div class="form-group"> 
          <input type="text" class="form-control w-100 mt-1 mb-2" id="brandtitle" name="brand_title" placeholder="Enter Brand" required>
        </div>
        <button type="submit" name="insert_brand" class="btn btn-primary w-100">Insert Brand</button>
      </form>
        <?php 
          if($success == 1 && $brand == 1) {
            echo "Brand Inserted";
          }
          else if ($success == 0 && $brand == 1) {
            echo "Brand Already Exists";
          }
        ?>
   </div>
</div>
</div>
</body>
<script>
  function getValue() {
  
   let price = Number( document.getElementById('price').value);
   let discount = Number (document.getElementById('discount').value);
   let afterDiscount = document.getElementById('afterdis').value;
   afterDiscount = price;
   
  if (discount >= price){
    document.getElementById('insertproductbtn').disabled = true;
    document.getElementById('afterdis').value = price;
    document.getElementById('errormsg').value = "asdass";
    
    
  } 
  else{
   let afterDiscount = price - discount;
   document.getElementById('insertproductbtn').disabled = false;
   document.getElementById('afterdis').value =afterDiscount;
  }
  }
</script>
</html>

