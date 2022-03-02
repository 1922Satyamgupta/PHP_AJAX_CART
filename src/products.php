<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="cart.js"></script>
</head>
<body>
	<div id="header">
		<?php include "header.php" ?>
	</div>
	
	<div id="main">
		<div id="products">
			<?php
			     include "config.php";
			    foreach($products as $product)
				{
					
						echo "<div id='product-".$product['id']." ' class='product'>
						<img src='src/images/'".$product['image'].">
						<h3 class='title'><a href='#'>Product ".$product['id']."</a></h3>
						<span>Price:".$product['price']."</span>
						<a id='add_to_cart_button' data-id='".$product['id']."'class='add-to-cart' href='addToCart.php?id=".$product['id']."'>Add To Cart</a>
					    </div>";
					
				}
			?>
			
		</div>

	</div>
	<div id="table">
		<?php echo $_SESSION['display'] ?>
	</div>

	<?php include "footer.php" ?>
</body>
</html>