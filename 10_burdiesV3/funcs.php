<?php

function h($str){

    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function db_conn(){
    try {
        $db_name = 'favorites_db';    //データベース名
        $db_id   = 'root';      //アカウント名
        $db_pw   = '';      //パスワード
        $db_host = 'localhost'; //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // エラーモードの設定
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}

function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
}

function redirect($file_name){
    header('Location: ' . $file_name);
    exit();
}

?>