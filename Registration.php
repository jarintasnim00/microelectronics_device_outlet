<?php include 'inc/header.php';?>
<br><br>
		    <style>
		   	
		   	.content {


		   		padding-left:250px;
		   		background-color:;
		   		padding-bottom:100px;
		   		padding-top: 50px;


		  

		   </style>


 					
      <?php
   
          if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['register'])) {
	      $customerReg=$cmr->customerRegistration($_POST);

		}

		?>
		<div class="main" >
    <div class="content" >

    	<div class="register_account">

    		<?php 

    		if (isset($customerReg)) {
    			echo "$customerReg";
    		}

    		?>
    		 <p>Already Register !!please<a href="login.php">Click Here</a> for login</p>
    		<h5>Register New Account</h5>
    		<form  action="" method="post">
		   			 
							<div>
							<input type="text" name="name" placeholder="Enter name"/>
							</div>
							
							<div>
							   <input type="text" name="phone_number" placeholder="Enter phone number"/>
							</div>
							
							<div>
								<input type="text" name="address" placeholder="Enter Address"/>
							</div>
							<div>
								<input type="text" name="email" placeholder="Enter email address"/>
							</div>
		    			 
						<div>
							<input type="text" name="password" placeholder=""/>
						</div>
		    		
	 
		   <div class="search"><div><button class="grey" name="register">Create Account</button></div></div>

		    
		    
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
		
		
		
            </div><br>
            
 <?php include 'inc/footer.php';?>
  







