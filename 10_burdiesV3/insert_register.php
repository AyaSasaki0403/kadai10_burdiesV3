<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//1. POSTデータ取得
$familyname   = $_POST['familyname'] ?? null;
$firstname   = $_POST['firstname'] ?? null;
$gender  = $_POST['gender'] ?? null;
$birthday = $_POST['birthday'] ?? null;
$email    = $_POST['email'] ?? null;
$password    = $_POST['password'] ?? null;

if (!$familyname || !$firstname || !$gender || !$birthday || !$email || !$password) {
    exit('必要な項目が入力されていません');
}

// genderの値を整数に変換
switch ($gender) {
    case 'male':
        $gender = 1;
        break;
    case 'female':
        $gender = 2;
        break;
    case 'no-answer':
        $gender = 0;
        break;
    default:
        exit('不正な性別の値が入力されました');
}

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

// パスワードをハッシュ化
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO login(familyname, firstname, gender, birthday, email, password, registered_date, updated_date)
VALUES(:familyname, :firstname, :gender, :birthday, :email, :password, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)');
$stmt->bindValue(':familyname', $familyname, PDO::PARAM_STR);
$stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
$stmt->bindValue(':gender', $gender, PDO::PARAM_INT);
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $hashed_password, PDO::PARAM_STR);  // **Use the hashed password**
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    session_start();
    $_SESSION['user'] = [
        'familyname' => $familyname,
        'firstname'  => $firstname,
        'gender'     => $gender,
        'birthday'   => $birthday,
        'email'      => $email
    ];
    header('Location: mypage.html'); // **Corrected path to mypage.html**
}

?>