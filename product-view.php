<?php 
include "./Includes/mainpage-header.php";
include "./Includes/styling-links.php";
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
<div class="main-container-product-view border border-black">
 <?php 
 productDetails();
 ?>
</div>


    
<script>

function limitNumber() {
  let cartQuantity = Number( document.getElementById('cart-quantity').value);
  
  if (cartQuantity < 1)
  document.getElementById('btnminus').disabled = true;
 else{
  document.getElementById('btnminus').disabled = false;
  
 }
 
  document.getElementById('btnadd').addEventListener('click', ()=>{
   cartQuantity ++
 })

}



</script>
