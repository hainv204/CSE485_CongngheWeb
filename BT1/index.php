<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
 $products = [
    ['name' => 'Sản phẩm 1', 'price' => 1000],
    ['name' => 'Sản phẩm 2', 'price' => 2000],
    ['name' => 'Sản phẩm 3', 'price' => 3000],
    ['name' => 'Sản phẩm 4', 'price' => 5000],
    ['name' => 'Sản phẩm 5', 'price' => 8000]
 ];
 static $count=1;
?>
<header>
<div class="heading d-flex justify-content-between bg-dark">
	<h2 class="text-light pt-3">List Product</h2>
	<div class="form-button mx-4 my-3">
		<button class="btn btn-danger">Delete</button>
		<button class="btn btn-secondary">Add new product</button>
	</div>
</div>
</header>

<main>
<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th class="py-3 text-center">STT</th>
			<th class="py-3 text-center">Name</th>
			<th class="py-3 text-center">Price</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $value): ?>
			<tr>
				<td class="py-3 text-center"><?= htmlspecialchars($count++) ?></td>
				<td class="py-3 text-center"><?= htmlspecialchars($value['name']) ?></td>
                <td class="py-3 text-center"><?= htmlspecialchars($value['price']) ?> VND</td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>
</main>

<footer class="d-flex justify-content-between">
	<div class = "hint-text">Show <b>5</b> out of <b>25</b> entries</div>
	<div class="pag">
		<ul class="pagination">
			<li class="page-item"><a href="#page-item" class="page-link border-0">Previous</a></li>
			<li class="page-item"><a href="#page-item" class="page-link border-0">1</a></li>
			<li class="page-item active"><a href="#page-item" class="page-link border-0">2</a></li>
			<li class="page-item"><a href="#page-item" class="page-link border-0">3</a></li>
			<li class="page-item"><a href="#page-item" class="page-link border-0">Next</a></li>
		</ul>
	</div>
</footer>
</body>
</html>