<?php include 'inc/header.php';?>
	
	<?php
		if (isset($_GET['delpro'])) {
			
			/*--$delId = preg_replace('/[^-a-zA-Z0-9_)]/','',$_GET['delpro']);*/
			$delId = $_GET['delpro'];

			$delProduct = $ct->delProductByCart($delId);
		}

	?>

		<?php 

			if ($_SERVER['REQUEST_METHOD']=='POST') {
			    $cartId = $_POST['cartId'];
			     $quantity = $_POST['quantity'];
			    $updateCart = $ct->updateCartQuantity( $cartId,$quantity);
			    if ($quantity<=0) {
			    	 $delProduct = $ct->delProductByCart($cartId);
			    }
			}



		?>

 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage"><br>
			    	<h2>Your Cart</h2>

			    	<?php

			    	if (isset($updateCart)) {
			    		echo $updateCart;
			    	}
			    	if (isset($delProduct)) {
			    		echo $delProduct;
			    	}

			    	?>
						<table class="tblone">
							<tr>
								<th width="5%">SL</th>
								<th width="30%">Product Name</th>
								<th width="10%">Image</th>
								<th width="15%">Price</th>
								<th width="15%">Quantity</th>
								<th width="15%">Total Price</th>
								<th width="10%">Action</th>
							</tr>
							 <?php 
                              $getPro = $ct->getCartProduct();
                                if ($getPro) {
                                	$i = 0;
                                	$sum = 0;
                                	$qty =0;
                                	while ($result = $getPro->fetch_assoc()) {
                                		$i++;             

                                		 ?>
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $result['productName'];?></td>
								<td><img src="admin/<?php echo $result['image'];?>" alt=""/></td>
								<td>$<?php echo $result['price'];?></td>
					<td>
						<form action="cart.php" method="post">
							<input type="hidden" name="cartId" value="<?php echo $result['cartId'];?>"/>
							<input type="number" name="quantity" value="<?php echo $result['quantity'];?>"/>
							
							<input type="submit" name="submit" value="Update"/>
						</form>
					</td>
									<td>$<?php 
								$total =  $result['price'] * $result['quantity'];
								echo $total;
								?></td>
								<td><a onclick = "return confirm('Are You Sure to delet??');"href="?delpro=<?php echo $result['cartId'];?>">DELET</a></td>
							</tr>

							<?php 
							$qty = $qty + $result['quantity'];
							
							Session::set("qty",$qty);
							$sum = $sum + $total;
							Session::set("sum",$sum);

							?>
							<?php 	} }?>

						</table>

						<?php
							$getData = $ct->checkCartTable();
							if ($getData) {
						?>

						<table style="float:right;text-align:left;" width="40%">
							<tr>
								<th>Sub Total : </th>
								<td>$<?php echo $sum;?></td>
							</tr>
							<tr>
								<th>VAT : </th>
								<td>10%</td>
							</tr>
							<tr>
								<th>Grand Total :</th>
								<td><?php 

									$vat = $sum * 0.1;
									$gtotal = $sum + $vat;
									echo $gtotal;
								?></td>
							</tr>
					   </table>
					<?php } else {
						echo "<script>window.location ='products.php';</script>";

						//echo "Cart Empty! Please Select Product Again.";
					} ?>

					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="products.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						<div class="shopright">
							<a href="payment.php"> <img src="images/download.png" height="90px" width="50px" alt="" />
							</a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>

    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>

<?php include 'inc/footer.php';?>

