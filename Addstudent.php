<?php

$name = $_POST["name"];
$email = $_POST["email"];
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];
$class_id = $_POST["class_id"];
// luu vao db
$host = "Localhost";
$user = "root";
$pwd = "";
$db = "t2207a";
$conn = new mysqli($host,$user,$pwd,$db);
if($conn ->connect_error){
    die("Connect error...."); // die là ngắt kết nối
}
$sql = "insert into sinhvien(name,email,birthday,gender,class_id) values ('$name','$email','$birthday','$gender',$class_id)";
if($conn ->query($sql)){
    header("Location: Database.php");
}else{
    echo "error";
}
$sql = "select * from lophoc";
$result = $conn->query($sql);
//var_dump($result);die();
$lh = [];
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $lh[] = $row;
    }
}


//chuyen ve trang danh sach

