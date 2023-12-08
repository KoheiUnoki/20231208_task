<?php

$user="root";
$pass="root";
// DBと接続 pdo=PHP Data Objects(サーバーとSQL間の通信)
try{ 
    $pdo = new PDO('mysql:host=localhost;dbname=2chan-bbs', $user, $pass);
    echo "DBとの接続に成功しました";
}catch(PDOException $error){
    echo $error->getMessage();
}

?>




