<?php include 'inc/header.php';?>
<br><br><br><br>

<?php 
      $login =Session::get("custLogin");
         if ($login==false) {
         echo "<script>window.location ='login.php';</script>";
       }
       ?>

    <style type="text/css">
       .payment{
        width:500px;
        min-height:200px;
        text-align:center;
        border:1px solid #ddd;
        margin: 0 auto;
        padding-top: 50px;
       }
       .payment h2{border-bottom:1px solid #ddd; margin-bottom:40px;padding-bottom:10px;}
       .payment a{background-color:brown;color:white;font-size:25px;padding: 5px 30px;border-radius: 3px;} 
       .back a{width:160px; margin:5px auto 0;padding-bottom: 4px;text-align: center;display: block;background-color:#555; border:1px solid #333; color:#fff; border-radius:3px;font-size:40px;}
	 
    </style>

 <div class="main">
    <div class="content">
    	<div class="section group">
            <div class="payment">
                <h2>Choose Payment Option</h2>
                <a href="paymentoffline.php">Offline payment</a>
                <a href="paymentonline.php">Online payment</a>
            </div>
             <div class="back">
             <a href="cart.php">Back</a>
    		       </div>
 		</div>
 	</div>
	</div>
   
  
<?php include 'inc/footer.php';?>











