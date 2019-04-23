<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="crossfire.css" type="text/css">
</head>
<body>
    <?php
    include "MODEL/Students.php";
    include "MODEL/StudentDB.php";
    include "MODEL/ConnectDB.php";
        $a = new StudentDB();
    $students = $a->getAll();

    ?>

    <table border="1">
        <caption>List students</caption>
        <a href="CRUD/creat.php"><input type="button" value="Create"></a>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>email</th>
            <th>address</th>
            <th>image</th>
            <th>update</th>
            <th>remove</th>
        </tr>
        <?php foreach ($students as $index=>$item):?>
        <tr>
            <td><?php echo $item ['id'] ?></td>
            <td><?php echo $item ['name'] ?></td>
            <td><?php echo $item ['email'] ?></td>
            <td><?php echo $item ['address'] ?></td>
            <td><div class="profile"><img src="<?php echo $item['image'] ?>"></div></td>
            <td>
                <a href="CRUD/update.php?id=<?php echo $item ['update']?>">update</a>
            </td>
            <td>
                <a href="CRUD/delete.php?id=<?php echo $item ['id']?>">Remove</a>
            </td>

        </tr>
        <?php endforeach?>
    </table>
</body>
</html>
