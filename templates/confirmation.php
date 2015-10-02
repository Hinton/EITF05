<h2>Your purchase was succesful! <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></h2>

<h3>Receipt</h3>

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
			<th colspan="3" class="success">Sum</th>
			<td class="success"><?php echo money_format('%i', $sum); ?></td>
		</tr>

	</tbody>

</table>

<br>

<p>Delivery address: <?php echo $_SESSION['user'][1]; ?></p>
