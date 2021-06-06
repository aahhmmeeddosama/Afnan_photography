<?php

class dbConnect{
private $host = "localhost";
private $username = "root";//username
private $pass = "";
private $db_name = "afnan_photography";
//private $connect;

protected function connect(){
    $conn='mysql:host='. $this->host .';dbname='. $this->db_name;
    $pdo=new PDO($conn,$this->username,$this->pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    return $pdo;
    /*try{
        $this->connect = new mysqli($host, $user, $pass, $db_name);
        if(mysqli_connect_error()){
           die('connection error('.mysqli_connect_errno().')' . mysqli_connect_error());
        }
    }

    catch(Exception $e){
        echo $e->getMessage();
        }
    }*/
}
}
?>