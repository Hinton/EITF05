<?php if ($cart === true): ?>

	<div class="alert alert-success" role="alert">Product added to cart. <a href="cart">View cart</a></div>

<?php endif; ?>

<h2><?php echo $name; ?></h2>

<p>Price: <?php echo $price; ?> kr</h2>

<p>ID: <?php echo $id; ?></p>

<form method="post">
	<input type="submit" class="btn btn-primary" value="Add to cart">
</form>