<?php
class buku{
    protected $data=[];
    protected $buku =[];

    public string $nama,
    $penulis,
    $genre;
    public int $tebal,
    $tahun;
    
    function __construct($nama, $penulis, $genre, $tebal, $tahun){
        $this->tambah($nama, $penulis, $genre, $tebal, $tahun);
    }
    function tambah($nama, $penulis, $genre, $tebal, $tahun){
        $this->buku["nama"] = $nama;
        $this->buku["penulis"] = $penulis;
        $this->buku["genre"] = $genre;
        $this->buku["tebal"] = $tebal;
        $this->buku["tahun"] = $tahun;
        return $this->buku;
    }

    function setBuku(){
        $this->data[] = $this->buku;
        sleep(1);
        echo "Data sudah berhasil diset \n";
    }


    function tampil(){
        echo"\n";
        foreach($this->data as $key => $value){
            sleep(1);
            echo "Buku index [$key]\n";
            foreach($value as $key2 => $value2){
                echo "  - $key2 : $value2\n";
            }
        }
    }

    function raw(){
        print_r($this->data);
    }
    function hapusBuku($index){
        // sleep(1);
        echo "\nBuku index ke $index akan dihapus\n";
        // array_slice($this->data,$index,1);
        unset($this->data,$index);
        print_r($this->data);
        // sleep(1);
        $hapus = "Data behasil dihapus...\n";
        // for($i=0;$i < count(str_split($hapus));$i++){
        //     echo "$hapus[$i]";
        //     sleep(1);
        // }
        $this->tampil();
        echo "$hapus \n";
    }
}


class angota{
    public $nama, 
    $password;
}
class Login{

}

// $buku->tampil();
$perpustakaan = new buku("Axio","Err Naila", "Fiksi",600,2011);
$perpustakaan->setbuku();
// $perpustakaan->tampil();
$perpustakaan->tambah("Hari hari","terre lain","Fiksi",4053,2025);
$perpustakaan->setbuku();
$perpustakaan->tambah("nama", "penulis", "genre", 600, 2019);
$perpustakaan->setbuku();
$perpustakaan->tampil();
$perpustakaan->tambah("Halo","tere lain","Fiksi",6000,2021);
$perpustakaan->setBuku();// masukkin ke array data
$perpustakaan->tampil();
// $perpustakaan->raw();
$perpustakaan->hapusBuku(1);