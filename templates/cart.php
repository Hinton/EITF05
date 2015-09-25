<h2>Cart</h2>

<table class="table">

	<thead>
		<tr>
			<th>Product</th>
			<th>Amount</th>
			<th>Price</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($products as $product): ?>

			<tr>
				<td><?php echo $product['name']; ?></td>
				<td><?php echo $product['amount']; ?></td>
				<td><?php echo money_format('%i', $product['price']); ?></td>
				<td><?php echo money_format('%i', $product['price'] * $product['amount']); ?></td>
			</tr>

		<?php endforeach; ?>

		<tr>
			<th colspan="3">Sum</th>
			<td><?php echo money_format('%i', $sum); ?></td>
		</tr>

	</tbody>

</table>

<a class="btn btn-primary" href="confirmation">Checkout</a>
