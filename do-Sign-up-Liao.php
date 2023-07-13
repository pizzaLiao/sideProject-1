<?php

if(!isset($_POST["name"])){
    die("請依正常管道進入");
};

if(empty($_POST["name"])){
    die("請輸入姓名");
};

if(empty($_POST["password"])){
    die("請輸入密碼");
};

if($password != $repassword){
    die("密碼前後不一致");
};



require_once("../db-connect.php");

$name=$_POST["name"];
$account=$_POST["account"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$repassword=$_POST["repassword"];
$now=date('Y-m-d H:i:s');
$password=md5($password); //將密碼加密


$sql="INSERT INTO member_list (user_name, user_password, user_phone, user_email, user_city, created_at,update_at, valid)
VALUES ('$name','$password','$phone','$account', 1, '$now','$now', 1)";


if ($conn->query($sql) === TRUE) {
    echo "新增資料完成" ;
} else {
    echo "新增資錯誤: " . $conn->error;
}
$conn->close();

