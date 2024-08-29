<?php
include "./Includes/mainpage-header.php";
include "./Includes/connect.php";
?>
<div class="main-container">

<div class="row p-2 pt-0 ">

<div class="col-md-8  ">

<?php
echo "
<h3 class='text-black'>
Review Orders
        </h3>";
productOrders();
?>
</div>
            




      <!-- </div>
      <div class='btn-group' role='group'>
        <button type='button' class='btn btn-secondary btn-sm btn-cart-quantity' id='btnminus'><i class='fa-solid fa-minus fa-sm'></i></button>
        <input class='ps-2 pe-' type='number' id='cart-quantity' step='1' value='100'>
        <button type='button' class='btn btn-primary btn-sm btn-cart-quantity' id='btnadd'><i class='fa-solid fa-plus fa-sm'></i></button>
      </div> -->
<!-- endings -->



 <?php 
   orderSummary();
 ?>
  </div>
</div>
</div>
<!-- 
<div class='btn-group' role='group'>
                <button type='button' class='btn btn-secondary btn-sm btn-cart-quantity' id='btnminus'><i class='fa-solid fa-minus fa-sm'></i></button>
                <input class='ps-2 pe-' type='number' id='cart-quantity' step='1' value='1' min='1' style='width:40px'>
                <button type='button' class='btn btn-primary btn-sm btn-cart-quantity' id='btnadd'><i class='fa-solid fa-plus fa-sm'></i></button>
                <button class='btn btn-success btn-sm btn-save-js' name='btnsave'>Save</button>
                </div> -->

<!-- <script>
    document.querySelectorAll('.btn-update-js').forEach((updatebtn)=> {
     updatebtn.addEventListener('click', ()=>{
      document.querySelector('.btn-group').style.display = 'block';
      document.querySelector('.btn-update-js').hidden = true;
     })
    })

    document.querySelectorAll('.btn-save-js').forEach((savebtn)=> {
      updatebtn.addEventListener('click', ()=>{
       document.querySelector('.btn-group').style.display = 'none';
       document.querySelector('.btn-update-js').hidden = false;
      })
     })
  </script> -->