<?php session_start(); ?>
<?php require_once '../header.php'; ?>
<?php require_once 'menu.php'; ?>
<?php
if (isset($_SESSION['customer'])) {
	unset($_SESSION['customer']);
	echo 'ログアウトしました。';
} else {
	echo 'すでにログアウトしています。';
}
?>
<?php include '../footer.php'; ?>