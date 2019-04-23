<?php
include "../MODEL/StudentDB.php";
include "../MODEL/ConnectDB.php";
$student_id = $_GET['id'];
$student = new StudentDB();
$student->delete($student_id);
header("Location: ../index.php");