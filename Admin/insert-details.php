<?php 
include "../Includes/connect.php";
$brand = 0;
$cate = 0;
$success = 0;
$fail = 0;
//Category Insert
if(isset($_POST['insert_category'])){
  $category = $_POST['category_title'];

  $select_cat = "SELECT * FROM `category` WHERE title = '$category'"; 
  $result_select = mysqli_query($conn, $select_cat);
  $rows = mysqli_num_rows($result_select);
  
  if ($rows>0){
    $fail = 1;
    $cate = 1;
    $brand = 0;
  }
else {
  $insert_cat = "INSERT INTO `category` (title) VALUES ('$category')";
  $result = mysqli_query($conn, $insert_cat);
  if ($result){
    $success = 1;
    $cate = 1;
    $brand = 0;
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
    $fail = 1;
    $brand = 1;
    $cate = 0;
  }

  else {
  $insert_brand = "INSERT INTO `brand` (title) VALUES ('$brand')";
  $result = mysqli_query($conn,$insert_brand);
  if($result){
    $success = 1;
    $brand = 1;
    $cate = 0;
  }
 }
}
?>


<body>
  <div class="container d-flex justify-content-between">
    <div class=" pe-5 mt-5 ">
      <form action="" method="post">
        <h4 class="m-4 text-align-center">Category</h4>
        <div class="form-group "> 
          <input type="text" class="form-control w-100 mt-1 mb-2" id="categorytitle" name="category_title" placeholder="Enter Category">
        </div>
        <button type="submit" name="insert_category" class="btn btn-primary w-100">Insert Category</button>
      </form>
      <?php 
  if($success == 1 && $cate == 1) {
    echo "Sucessfully Category Inserted";
  }
  else if ($fail == 1 && $cate == 1) {
    echo "Category Already Exists";
  }
  ?>
   </div>

   <div class=" ps-5 pe-5 mt-5">
      <form action="" method="post">
        <h4 class="m-4">Product</h4>
        <div class="form-group"> 
          <input type="text" class="form-control w-100 mt-1 mb-2" id="categorytitle" name="product-title" placeholder="Enter Product">
        </div>
        <button type="submit" name="insert_product" class="btn btn-primary w-100">Insert Product</button>
      </form>
   </div>

   <div class=" ps-5 pe-5 mt-5 ">
      <form action="" method="post">
        <h4 class="m-4">Brand</h4>
        <div class="form-group"> 
          <input type="text" class="form-control w-100 mt-1 mb-2" id="brandtitle" name="brand_title" placeholder="Enter Brand">
        </div>
        <button type="submit" name="insert_brand" class="btn btn-primary w-100">Insert Brand</button>
      </form>
        <?php 
          if($success == 1 && $brand == 1) {
            echo "Sucessfully Brand Inserted";
          }
          else if ($fail == 1 && $brand == 1) {
            echo "Brand Already Exists";
          }
        ?>
   </div>
</div>
</body>
</html>

