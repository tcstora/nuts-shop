<?php require '../header.php';?>
<table>
<tr><th>商品番号</th><th>商品名</th><th>価格</th></tr>
<?php
require_once 'connect.php';
$sql=$pdo->prepare('select * from product where name=?');
$sql->execute([$_REQUEST['keyword']]);
foreach ($sql as $row) {
?>
		<tr>
			<td><?=$row['id']?></td>
			<td><?=$row['name']?></td>
			<td><?=$row['price']?></td>
		</tr>
<?php } ?>
</table>
<?php require '../footer.php'; ?>