<?php
                    //Ket noi DataBase
                    $host = "localhost";
                    $user = "root";
                    $pwd = "";
                    $db = "t2207a";

                    $conn = new mysqli($host, $user, $pwd, $db);
                    if ($conn -> connect_error) {
                        die("Connect error...");
                    }
                    //Ra day tuc la ket noi thanh cong
                    //echo "Connected...";

                    //Truy van
                    $sql = "select * from lophoc";
                    $result = $conn -> query($sql);
                    $lh=[];
                    if ($result -> num_rows >0){
                        while ($row=$result->fetch_assoc()){
                            $lh[]=$row;
                        }
                    }

                    ?>


                    <!doctype html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport"
                              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
                        <title>Create Student</title>
                    </head>
                    <body>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                    <form method="post" action="addstudent.php">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Birthday</label>
                                            <input type="date" class="form-control" name="birthday" placeholder="Birthday" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Gender</label>
                                            <select name="gender" class="form-select" required>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Class ID</label>
                                            <select name="class_id" class="form-select" required>
                                                <?php foreach ($lh as $l){ ?>
                                                    <option value="<?php echo $l['id'] ?>"><?php echo $l['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                    </section>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
                    </body>
                    </html>




