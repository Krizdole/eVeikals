<?php
$regdata = $_POST;
if (empty($regdata['username']) ||
    empty($regdata['password']) ||
    empty($regdata['email']) ||
    empty($regdata['password_confirm'])) {
		die('Please fill in all required fields!');
}

if ($regdata['password'] !== $regdata['password_confirm']) {
   die('Passwords need to match!');   
}

$DSN = 'mysql:dbname=opuser;host=localhost';
$DBUSER='root';
$DBPASS = '';

try{
$connection = new PDO($DSN ,$DBUSER,$DBPASS);
}
catch (PDOException $exception){
    die("Connection Failed".$exception->getMessage());
}
$statement=$connection->prepare("INSERT INTO users (username,email,password) VALUES (:username,:email,:password)");

if($statement==true){
    $statement->execute([
        ':username' =>$regdata['username'],
        ':email' =>$regdata['email'],
        ':password' =>$regdata['password'],
    ]);
    header("location:regindex.php");
}
?>
