<?php require '../header.php'; ?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../style.css">
<div class="th0">商品番号</div>
<div class="th1">商品名</div>
<div class="th1">商品価格</div>
<?php
require_once 'connect.php';
foreach ($pdo->query('select * from product') as $row) {
	echo '<form action="update-output.php" method="post">';
	echo '<input type="hidden" name="id" value="', $row['id'], '">';
	echo '<div class="td0">', $row['id'], '</div> ';
	echo '<div class="td1">';
	echo '<input type="text" name="name" value="', $row['name'], '">';
	echo '</div> ';
	echo '<div class="td1">';
	echo ' <input type="text" name="price" value="', $row['price'], '">';
	echo '</div> ';
	echo '<div class="td2"><input type="submit" value="更新"></div>';
	echo '</form>';
	echo "\n";
}
?>
<?php require '../footer.php'; ?>
