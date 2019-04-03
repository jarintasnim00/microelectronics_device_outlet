<?php include 'inc/header.php';?>
<br><br><br><br>

<?php 
      $login =Session::get("custLogin");
         if ($login==false) {
         echo "<script>window.location ='login.php';</script>";
       }
       ?>
       <?php
            $cmrId =Session::get("cmrId");

            if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) {
            $updateCmr = $cmr->customerUpdate($_POST,$cmrId);
           }
            ?>


    <style type="text/css">
	 .tblone{
        width:550px;
        margin:0 auto;
        border:2px solid #ddd;

	 }
	 .tblone tr td{
	 	text-align:justify;
	 	 }
       .tblone input[type="text"]{
        width:400px;
        padding: 5px;
        font-size: 15px;
       }

       

    </style>

 <div class="main">
    <div class="content">
    	<div class="section group">

    		<?php

    			$id=Session::get("cmrId");
    		  $getdata = $cmr->getCustomerData($id);
    		  if ($getdata) {
    		  while ($result= $getdata->fetch_assoc()) {
    		  	
    		?>
            <form action="" method="post">

          <table class="tblone" >

            <?php 
            if (isset( $updateCmr)) {
                
              echo  "<tr><td colspan='2'>".$updateCmr."</td></tr>";
            }
       
            ?>
               
                 <tr>
    				<td colspan="2"><h2 >Update Profile Details</h2></td>
    			</tr>

    			<tr>
    				<td width="20%">Name</td>
    				<td><input type="text" name="name" value="<?php echo $result['name'];?>"></td>
    			</tr>
    			<tr>
    				<td>Phone</td>
    				<td><input type="text" name="phone_number" value="<?php echo $result['phone_number'];?>"></td>
    			</tr>
    			<tr>
    				<td>Address</td>
    				<td><input type="text" name="address" value="<?php echo $result['address'];?>"></td>
    			</tr>
    			<tr>
    				<td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $result['email'];?>"></td>
    				
    			</tr>
    			<tr>
    				<td></td>
    				<td><input type="submit" name="submit" value="Save"></td>
    			</tr>
    			
    			
    		</table>
        </form>
			<?php  } }?>	
				
 		</div>
 	</div>
	</div>
   
  
<?php include 'inc/footer.php';?>











