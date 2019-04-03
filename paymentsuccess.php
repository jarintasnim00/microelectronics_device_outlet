<?php include 'inc/header.php';?>
<br><br><br><br>

<?php 
      $login =Session::get("custLogin");
         if ($login==false) {
         echo "<script>window.location ='login.php';</script>";
       }
       ?>

    <style type="text/css">
       .psuccess{
        width:500px;
        min-height:200px;
        text-align:center;
        border:1px solid #ddd;
        margin: 0 auto;
        padding-top: 20px;
        font-size: 20px;
       }
       .psuccess h2{border-bottom:1px solid #ddd; margin-bottom:20px;padding-bottom:10px;}
       .psuccess p{line-height: 25px;} 
       
    </style>

 <div class="main">
    <div class="content">
    	<div class="section group">
            <div class="psuccess">
                <h2>Payment Successfull</h2>
                 <p> Thanks for purchase.Receive your order successfully.We will contact  you as soon as possible with delivery details.For visit our website <a href="index.php">...Click here...</a></p>
                
                
            </div>
 		</div>
 	</div>
	</div>
   
  
<?php include 'inc/footer.php';?>











