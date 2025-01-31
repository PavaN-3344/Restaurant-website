<?php
	
	define("TITLE", "Menu | Franklin's Fine Dining");
	
	include('includes/header.php');
	
	// Strip bad characters function
	// Learn more about preg_replace: http://php.net/manual/en/function.preg-replace.php
	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
		return $output;
	}
	
	if(isset($_GET['item'])) {
		$menuItem = strip_bad_chars( $_GET['item'] );
		$dish = $menuItems[$menuItem];
	}
	
	// Calculate suggested tip
	
	
	
?>
	
	<hr>
	
	<div id="dish">
	
		<h1><?php echo $dish["title"]; ?> <span class="price"><b>Rs. </b><?php echo $dish["price"]; ?></span></h1>
		<p><?php echo $dish["blurb"]; ?></p>
		<br>
		
	</div><!-- dish -->
	
	<hr>
	
	<a href="menu.php" class="button previous">&laquo; Back to Menu</a>
			
<?php include('includes/footer.php'); ?>
