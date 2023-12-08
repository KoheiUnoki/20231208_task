<?php

$thread_array = array();

// コメントデータをテーブルから取得してくる
$sql = "SELECT * FROM thread"; //SELECT *で全部取得するという指示
$statement = $pdo->prepare($sql);
$statement->execute();

$thread_array = $statement;

// // DBとの通信を切る
// $pdo = null;
// $statement = null;

?>

