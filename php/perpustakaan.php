<?php
class Perpustakaan extends buku{
    private $data=[];
    function setbuku(){
        // memasukkan data buku ke array data
        $this->data[] = $this->buku;
        echo "Data sudah berhasil diset";
        $i = 0;
        foreach($this->data as $isi){
            foreach($isi as $satuan){
                print_r($satuan);
                echo "$i. $satuan";
                $i++;
            }
        }
    }
}

class buku{
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
        $this->buku["penulis"] = $penulis;
        $this->buku["genre"] = $genre;
        $this->buku["tebal"] = $tebal;
        $this->buku["tahun"] = $tahun;
        $this->buku["nama"] = $nama;
        return $this->buku;
    }


    function tampil(){
        var_dump($this->buku);
        }
    }

    function hapus(){}


class angota{
    public $nama, 
    $password;
}
class Login{

}

$perpustakaan = new perpustakaan("Axio","Err Naila", "Fiksi",600,2011);
$buku = new buku("nama", "penulis", "genre", 600, 2019);
$buku->tampil();
$perpustakaan->setbuku();
