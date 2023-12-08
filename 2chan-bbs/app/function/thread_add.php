<?php
$error_message = array();

// 書き込みボタンが押されたかどうか
if(isset($_POST["threadSubmitButton"])){ //submitButtonに値が入っているならTrue
    
    //スレッド名入力チェック。空ならTrue。
    if(empty($_POST["title"])){
        $error_message["title"]="名前を入力してください";
    }else{
        $escaped["title"]= htmlspecialchars($_POST["title"], ENT_QUOTES,"UTF-8");
    }

    // お名前入力チェック
    if(empty($_POST["username"])){
        $error_message["username"] = "お名前を入力してください。";
    }else{
        // エスケープ処理
        $escaped["username"] = htmlspecialchars($_POST["username"], ENT_QUOTES,"UTF-8");
    }


    // コメント入力チェック
    if(empty($_POST["body"])){
        $error_message["body"] = "本文を入力してください。";
    }else{
        $escaped["body"] = htmlspecialchars($_POST["body"], ENT_QUOTES,"UTF-8");
    }

    // エラーメッセージがないときは通常通り実行される
    if(empty($error_message)){
    $post_date = date("Y-m-d H:i:s");
    
    // マップ情報追加

    // スレッドを追加
    $sql = "INSERT INTO `thread` (`title`) VALUES (:title);";
    $statement = $pdo->prepare($sql);

    // 値をセットする。
    $statement->bindParam(":title", $escaped["title"],PDO::PARAM_STR);

    $statement->execute();
    
    // コメントも追加
    $sql = "INSERT INTO comment(username, body, post_date, thread_id) 
    VALUES (:username, :body, :post_date,(SELECT id FROM thread WHERE title = :title))";

    $statement = $pdo->prepare($sql);

    // 値をセット
    $statement -> bindParam(":username", $escaped["username"], PDO::PARAM_STR);
    $statement -> bindParam(":body", $escaped["body"], PDO::PARAM_STR);
    $statement -> bindParam(":post_date", $post_date, PDO::PARAM_STR);
    $statement -> bindParam(":title", $escaped["title"], PDO::PARAM_STR);

    $statement -> execute();
    }

    // 掲示板のページに繊遷移
    header("Location: http://localhost:8080/2chan-bbs");
}