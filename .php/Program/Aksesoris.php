<?php
require_once 'PetShop.php';

class Aksesoris extends PetShop {
    private $jenis = '';
    private $bahan = '';
    private $warna = '';

    public function __construct($ID = 0, $nama = '', $stok = 0, $harga = 0, $foto = '', $jenis = '', $bahan = '', $warna = '') {
        parent::__construct($ID, $nama, $stok, $harga, $foto);
        $this->jenis = $jenis;
        $this->bahan = $bahan;
        $this->warna = $warna;
    }

    public function setJenis ($jenis) { $this->jenis = $jenis; }
    public function getJenis () { return $this->jenis; }

    public function setBahan ($bahan) { $this->bahan = $bahan; }
    public function getBahan () { return $this->bahan; }

    public function setWarna ($warna) { $this->warna = $warna; }
    public function getWarna () { return $this->warna; }
}
?>