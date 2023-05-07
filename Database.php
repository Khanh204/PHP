
<?php
// ket noi db
$host = "localhost";
$user = "root";
$pwd = "";
$db = "t2207a";

$conn = new mysqli($host,$user,$pwd,$db);
if($conn->connect_error){
    die("Connect error");
}
//ra day tuc la ket noi thanh cong
echo "Connected...";
// truy van
$sql = "select * from sinhvien";
$result = $conn->query($sql);
//var_dump($result);die();
$students = [];
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $students[] = $row;
    }
}
//var_dump($students);die();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<section>
    <div class="container">
        <a href="student.php"><input type="submit" value="Thêm sinh viên"></a>
        <table class="table">
            <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>Class_id</th>
            <th>Action</th>
            </thead>
            <tbody>
            <?php foreach ($students as $sv):?>
                <tr>
                    <td><?php echo $sv["id"];?></td>
                    <td><?php echo $sv["name"];?></td>
                    <td><?php echo $sv["email"];?></td>
                    <td><?php echo $sv["birthday"];?></td>
                    <td><?php echo $sv["gender"];?></td>
                    <td><?php echo $sv["class_id"];?></td>
                    <td>
                        <a href="editstudent.php?id=<?php echo $sv["id"]; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>


                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>
