<?php if ($cart === true): ?>

	<div class="alert alert-success" role="alert">Product added to cart. <a href="cart">View cart</a></div>

<?php endif; ?>

<h2><?php echo $product['name']; ?></h2>

<p>Price: <?php echo $product['price']; ?> kr</h2>

<p>ID: <?php echo $id; ?></p>

<?php if (!isset($_SESSION['user'])): ?>
<?php else: ?>
	<form method="post">
		<input type="hidden" name="csrf" value="<?php echo $csrf ?>">
		<input type="submit" class="btn btn-primary" value="Add to cart">
	</form>
<?php endif; ?>
