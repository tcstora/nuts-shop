<?php require '../header.php';?>
<?php
require_once 'connect.php';
$sql=$pdo->prepare('update product set name=?, price=?')
