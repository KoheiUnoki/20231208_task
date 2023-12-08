<?php

include_once("../database/connect.php");

include("../../app/function/thread_add.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/CSS/style.css">
    <title>新規スレッド作成ページ</title>
</head>
<body>

   <!-- ヘッダー -->
   <?php include("../parts/header.php");?>

   <!-- バリエーションチェックのエラー文吐き出し -->
   <?php include("../parts/validation.php");?>

   <div style="padding-left: 36px;color:blue">
    <h2>新規スレッド立ち上げ場</h2>
   </div>
   <form method="POST" class="formWrapper">
   <div>
    <label>スレッド名</label>
    <input type="text" name="title">
    <label>名前</label>
    <input type="text" name="username">
   </div>
   <div>
    <textarea name="body" class="commentArea"></textarea>
   </div>
   <input type="submit" value="立ち上げ" name="threadSubmitButton">
   </form>


    
    
</body>
</html>