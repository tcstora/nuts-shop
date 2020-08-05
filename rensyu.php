$login = 'login';
$password = 'password';
$sth = $dbh->prepare('SELECT login, password
    FROM customer
    WHERE login < ? AND password = ?');
$sth->bindParam(1, $calories, PDO::PARAM_STR);
$sth->bindParam(2, $colour, PDO::PARAM_STR,);
$sth->execute();
?>