<?php
session_start();

// セッションにデータがない場合、index.htmlにリダイレクト
if (!isset($_SESSION['user'])) {
    header('Location:index.html');
    exit();
}

$user = $_SESSION['user'];

// genderの値を整数から文字列に変換
switch ($user['gender']) {
    case 1:
        $user['gender'] = '男性';
        break;
    case 2:
        $user['gender'] = '女性';
        break;
    case 0:
        $user['gender'] = '答えたくない';
        break;
}

header('Content-Type: application/json');
echo json_encode($user);

?>
