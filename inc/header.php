<?php 
    include 'lib/Session.php';
    Session::init();
    include 'lib/Database.php';
	include 'helpers/Format.php';

	spl_autoload_register(function($class){

     include_once "classes/".$class.".php";
   
   });

     $db = new Database();
     $fm = new Format();
     $pd = new Product();
     $ct = new Cart();
     $cmr = new Customer();
     $cat = new Category();


?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>



<!DOCTYPE html>
<html>                     
	<head>
		<meta charset="UTF-8">
		<title>::i-mart::online microelectronices device</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style1.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
       <script src="js/jquerymain.js"></script>
       <script src="js/script.js" type="text/javascript"></script>
      <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
      <script type="text/javascript" src="js/nav.js"></script>
      <script type="text/javascript" src="js/easing.js"></script> 
     <script type="text/javascript" src="js/nav-hover.js"></script>
       <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>

		
		<style>


		</style>
	</head>
    <body>
       
	      <div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Online Outlet</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
               <li><a href="productbycat.php"><span class="glyphicon glyphicon-modal-window"></span>Product Catagories</a></li>
               <li><a href="topbrands.php"><span class="glyphicon glyphicon-modal-window"></span>Brands</a></li>

               <?php 

               $chkCart=$ct->checkCartTable();
               if ($chkCart) { ?>
               	<li><a href="cart.php"><span class="glyphicon glyphicon-modal-window"></span>Cart</a></li>
                 <li><a href="payment.php"><span class="glyphicon glyphicon-modal-window"></span>payment</a></li>
              <?php } ?>
              

               	<?php 
                  $login = Session::get("custLogin");
                  if ($login==true) {?>
                  <li><a href="profile.php"><span class="glyphicon glyphicon-modal-window"></span>Profile</a></li>
                 <?php } ?>

               
			</ul>
			<!--<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		      <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>-->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="cart.php" class="" data-toggle=""><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">
					<?php 
					$getData = $ct->checkCartTable();
					if ($getData) {
						
						$qty = Session::get("qty");
					   echo $qty;
					}
					else{

						echo "(Empty)";
					}
					
          		?>
				</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>
							</div>
							
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<?php 
				if (isset($_GET['cid'])) {
					$delData = $ct->delCustomerCart();
					Session::destroy();
				}


				?>
				<li>
					<?php 
      $login =Session::get("custLogin");
         if ($login==false) {?>
        <a href="login.php" class="" data-toggle=""><span class="glyphicon glyphicon-user"></span>login</a>
      <?php } else{?>
      	 <a href="?cid=<?php Session::get('cmrId')?>" class="" data-toggle=""><span class="glyphicon glyphicon-user"></span>logout</a>

     <?php }  ?>

     

					
            
                
              
      					<!--<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>-->
				</div>
				</li>

			</ul>
		</div>
	</div>
</div>