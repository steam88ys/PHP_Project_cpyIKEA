<?php

$url = 'localhost';
$id = 'test';
$passwd = '1111';
$db = 'testdb';
$conn = mysqli_connect($url, $id, $passwd, $db);

$mail = $_POST['email'];
$ps = $_POST['password'];
$state = $_POST['loginstate'];

echo "회원 이메일 또는 전화번호: ".$mail."<br>"."비밀번호: ".$ps."<br>"."로그인 유지 유무: ".$state;

//2. 쿼리
$query = "insert into login values ('$mail', '$ps')";
mysqli_query($conn, $query);
echo "Inserted!!";

//3. mysql 접속종료
mysqli_close($conn);

?>

