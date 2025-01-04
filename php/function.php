<?php
session_start();

class buku{

    function __construct(){
        if (!isset($_SESSION['buku'])){
            $_SESSION['buku']=[];}
        // echo "Memulai layanan...\n";
        }
    
    function tambah(){
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'] ?? '';
            $penulis = $_POST['penulis'] ?? '';
            $genre = $_POST['genre'] ?? '';
            $tebal = $_POST['tebal'] ?? 0;
            $tahun = $_POST['tahun'] ?? 0;

        }
        if(!empty($nama) && !empty($penulis) && !empty($genre) && is_numeric($tebal) && is_numeric($tahun)){
            $_SESSION['buku'][] = [
                "nama" => $nama,
                "penulis" => $penulis,
                "genre" => $genre,
                "tebal" => (int)$tebal,
                "tahun" => (int)$tahun
            ];

            $pesan = "Data berhasi disimpan";
        }else{
            $pesan = "Data tidak berhasil disimpan";
        }
    }


    function hapus(){
        if(isset($_GET['hapus'])){
            $index = $_GET['hapus'];
            unset($_SESSION["buku"][$index]);
        }
    }

    function update($index, $databaru){
        if(!empty($_SESSION['buku'][$index])){
            $_SESSION['buku'][$index] = $databaru;
            echo "data berhasil diperbaharui";
        }
        echo "data gagal diperbaharui";
    }
    
    
    function raw(){
        print_r($_SESSION['buku']);
    }
    function hapusBuku($index){
        sleep(1);
        if(isset($this->buku[$index])){
            unset($this->buku[$index]);
            echo "data berhasil dihapus";
        }else{
            echo "index tidak ditemukan";
        }
    }

}


class angota{
    public $nama, 
    $password;
}
class login{
    function __construct(){

        if(!isset($_SESSION['login'])){
            $_SESSION['login'] = [];
    }}

    function register(){
        if(isset($_POST['register'])){
            $username = $_POST['username'] ;
            $password = $_POST['password'] ;

        }
        if(!empty($username) && !empty($password)){
            $_SESSION['login'][] = [
                "username" => $username,
                "password" => $password,
            ];

            $pesan = "Data berhasi disimpan";
        }else{
            $pesan = "Data tidak berhasil disimpan";
        } 
    }

    function login(){

        if (isset($_POST["username"]) && isset($_POST["password"])){
            $username = $_POST["username"];
            $password = $_POST["password"];

            if(!empty($_SESSION['login'])){
                foreach($_SESSION['login'] as $value){
                    if($username == $value["username"] && $password == $value["password"]){
                    header('Location:database.php');
                    }
                }
            }
        }}


    function raw(){
        echo "<pre>";
        print_r($_SESSION['login']);
        echo "</pre>";
    }
}