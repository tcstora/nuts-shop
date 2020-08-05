<?php session_start(); ?>
<?php require_once '../header.php'; ?>
<?php require_once 'menu.php'; ?>
<?php 'connect.php'; 

$error_message =  '<p>こちらからemailを送信してください。</p>';
if( empty($_GET['email']) || empty($_GET['token'])){
	echo  $error_message;
	include_once('customer-input-tmp.php');
	exit;
}else{
	// 取得したemailとtokenで仮登録テーブルを絞り込んで、1件あれば認証
		$sql=$pdo->prepare('select * from customer_tmp where email=? and token=?');
		$sql->execute([ $_GET['email'], $_GET['token'] ]);
		$row = $sql->fetch();
		
		if( empty($row) || time() - strtotime ($row['created']) > 3600 * 24 ){
			// 一件もないか 24時間以上経過していら処理を中断
			echo $error_message;
			include_once('customer-input-tmp.php');
			exit( ); 
		}
	 }
	$name=$address=$login=$password=$email='';

if (isset($_SESSION['customer']['name'] ,$_SESSION['customer']['address'], $_SESSION['customer']['login'])) {
	
	
	$name=$_SESSION['customer']['name'];
	$address=$_SESSION['customer']['address'];
	$login=$_SESSION['customer']['login'];
   
}
$_SESSION['customer']['email'] = $_GET['email'];
$_SESSION['token'] = token();
?>
<form action="customer-output.php" method="post">
	<table>
		<tr><td>メールアドレス</td><td><?=$_SESSION['customer']['email']?> </td></tr>
		<tr><td>お名前</td><td>
			<input type="text" name="name" value="<?=$name?>">
		</td></tr>
		<tr><td>ご住所</td><td>
			<input type="text" name="address" value="<?=$address?>">
		</td></tr>
		<tr><td>ログイン名</td><td>
			<input type="text" name="login" value="<?=$login?>">
		</td></tr>
		<tr><td>パスワード</td><td>
			<input type="password" name="password" value="">
		</td></tr>
		<tr><td>パスワード確認用</td><td>
			<input type="password" name="password-confirm" value="">
		</td></tr>
	</table>

	<input type="hidden" name="token" value="<?=$_SESSION['token']?>">
	<input type="submit" value="確定">
</form>

<?php require '../footer.php' ?>
