<?php


try{
    $pdo=new PDO('mysql:host=localhost;dbname=tanaka_shop;charset=utf8', 
    'komatsu_db', 'Wert3333-');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare('SELECT * FROM customer WHERE email = :email');

    $sql->execute(array(':email' => $_POST['email']));

    $result = $sql->fetch(PDO::FETCH_ASSOC);

    if(password_verify($_POST['password'], $result['password'])){
        echo "ログイン認証に成功しました";
    }else{
        echo "ログイン認証に失敗しました";
    } 

}catch(Exception $e){
    echo "データベースの接続に失敗しました：";
    echo $e->getMessage();
    die();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン</h1>
    <form action="" method="post">
        <p>
            <label>メールアドレス：</label>
            <input type="text" name="email">
        </p>

        <p>
            <label>パスワード：</label>
            <input type="password" name="password">
        </p>

        <input type="submit" name="submit" value="ログインする">
    </form>
</body>
</html>
