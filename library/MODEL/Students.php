<?php


class Students
{
    public $id ;
    public $name;
    public $email;
    public $address;
    public $image;
    public function __construct($id,$name,$email,$address,$image)
    {
        $this->name= $name;
        $this->id = $id ;
        $this->email= $email;
        $this->address= $address;
        $this->image= $image;
    }
}