<?php


class ConnectDB
{
    public $dns ;
    public $username;
    public $password;
    public function __construct($dns,$username,$password)
    {
        $this->dns =$dns;
        $this->username=$username;
        $this->password=$password;
    }
    public function connect(){
        return new PDO($this->dns,$this->username,$this->password);
    }
}