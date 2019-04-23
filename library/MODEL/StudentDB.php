<?php


class StudentDB
{
    public $connect ;
    public  function __construct()
    {
        $conn= new ConnectDB("mysql:host = localhost;dbname=library","root","123456@Abc");
        $this->connect = $conn->connect();
    }
    public function getAll(){
        $sql = "SELECT * FROM students";
        $data = $this->connect->query($sql);
        return $data->fetchAll();
    }
    public function insertStudent($students){
        $sql =  "INSERT INTO `students`(`id`,`name`, `email`, `address`, `image`) VALUES (
    ?,?,?,?,?)";
        $statement = $this->connect->prepare($sql);
        $statement->bindParam(1, $students->id);
        $statement->bindParam(2, $students->name);
        $statement->bindParam(3, $students->email);
        $statement->bindParam(4, $students->address);
        $statement->bindParam(5, $students->image);
        return $statement->execute();
    }
    public function delete($id) {
        $sql = "DELETE FROM `students` WHERE `id` = $id" ;
        return $this->connect->exec($sql);
    }
    public function update($students,$id) {
       $sql =  "UPDATE `students` SET `id`= ? , `name` = ?, `email` = ?, `address` = ?, `image` = ? WHERE `students`.`id` = $id";
       $statement = $this->connect->prepare($sql);
        $statement->bindParam(1, $students->id);
        $statement->bindParam(2, $students->name);
        $statement->bindParam(3, $students->email);
        $statement->bindParam(4, $students->address);
        $statement->bindParam(5, $students->image);
        return $statement->execute();
    }
}