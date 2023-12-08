<?php

// array()を指定することにより、連想配列を格納することができる変数になる
$comment_array = array();

// コメントデータをテーブルから取得してくる
$sql = "SELECT * FROM comment"; //SELECT *で全部取得するという指示
$statement = $pdo->prepare($sql);
$statement->execute();

$comment_array = $statement;
// var_dump($comment_array);

?>