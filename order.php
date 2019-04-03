<?php include 'inc/header.php';?>
<br>
  
   <?php 
      $login =Session::get("custLogin");
         if ($login==false) {
         echo "<script>window.location ='login.php';</script>";
       }
       ?>

 <div class="main">
    <div class="content">
    	
    	<div class="section group">
       
       <div class ="order">
       	<h2>Order page</h2>

       </div>
    	</div>
       <div class="clear"></div>
    </div>
 </div>

    
<?php include 'inc/footer.php';?>

