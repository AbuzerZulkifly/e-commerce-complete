<?php 
include "./admin-body.php";
include "./../Includes/styling-links.php";
?>
    
<div class="bay-area">
           
           <?php 
             if(isset($_GET['insert_category'])||isset($_GET['insert_brand'])||isset($_GET['insert_product'])){
              include "insert-details.php";
             }
             
           ?>
            
        </div>

        
</body>
</html>