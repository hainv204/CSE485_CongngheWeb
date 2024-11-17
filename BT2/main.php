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
        <?php if (empty($products)): ?>
            <tr><td colspan="3" class="py-3 text-center">Không có sản phẩm nào</td></tr>
        <?php else: ?>
            <?php foreach ($products as $value): ?>
                <tr>
                    <td class="py-3 text-center"><?= htmlspecialchars($count++) ?></td>
                    <td class="py-3 text-center"><?= htmlspecialchars($value['name']) ?></td>
                    <td class="py-3 text-center"><?= htmlspecialchars($value['price']) ?> VND</td>
                </tr>
            <?php endforeach;?>
        <?php endif; ?>
	</tbody>
</table>
</main>