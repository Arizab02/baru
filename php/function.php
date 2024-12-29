<?php
class connect{
    protected $hostname = "localhost",
    $username = "aria",
    $password = "root",
    $database = "perpustakaan";  
    static function connect(){
        $conn = mysqli_connect(self::$hostname,self::$username,self::$password,self::$database);
    }
}

class Perpustakaan{
    function tambah(){
        
    }
}

connect::connect();