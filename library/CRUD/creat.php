<?php
include "../MODEL/StudentDB.php";
include "../MODEL/Students.php";
include "../MODEL/ConnectDB.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<form method="POST">
    <fieldset>
        <legend>form</legend>
        <label>
            id:<input name="id" type="text"/><br/><br/>
            name:<input name="name" type="text"/><br/><br/>
            email:<input name="email" type="text"/><br/><br/>
            address:<input name="address" type="text"/><br/><br/>
            image:<input name="image" type="text"/><br/><br/>
            <input type="submit" />
        </label>
    </fieldset>
</form>
<body>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id= $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $image = $_POST["image"];
        $student = new Students($id,$name,$email,$address,$image);
        $student1= new StudentDB();
        $student2 = $student1->insertStudent($student);
    header("Location: ../index.php");

    }
    ?>


</body>
</html>
