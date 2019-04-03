<?php include 'inc/header.php';?>
<br><br>
		   <style>
		   	
		   	.content {


		   		padding-left:370px;
		   		background-color: brown;
		   		padding-bottom:100px;
		   		padding-top: 50px;

		  

		   </style>


		   <?php 

		   $login =Session::get("custLogin");
		   if ($login==true) {
		   	echo "<script>window.location ='order.php';</script>";
		   }

		   ?>
		    <?php
   
		       if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login'])) {
		       $custLogin=$cmr->customerLogin($_POST);
	       }
			?>


 <div class="main" >
    <div class="content" >
    	 <div class="login_panel" >
    	 	<?php 

    		if (isset($custLogin)) {
    			echo "$custLogin";
    		}
    		?>

        	<h3>Existing Customers</h3>
        	<p>Sign in with the form below.</p>
        	<form action="" method="post">
                	<input name="email" type="text" placeholder="Email"/>
                    <input name="password" type="password" placeholder="password"/>
                    <div class="buttons"><div><button class="grey" name="login">Sign In</button></div></div>
                       <p>Not yet Register!! please<a href="Registration.php">Click Here</a> for registration</p>
                  </form>
                    </div>
                    <div class="clear"></div>
                      </div>
		
	          </div>



 					

 <?php include 'inc/footer.php';?>
  











