<?php
require_once 'Aksesoris.php';

class Baju extends Aksesoris {
    private $target = '';
    private $size = '';
    private $merk = '';

    public function __construct($ID = 0, $nama = '', $jenis = '', $bahan = '', $warna = '', $target = '', $size = '', $merk = '', $stok = 0, $harga = 0, $foto = '') {
        parent::__construct($ID, $nama, $stok, $harga, $foto, $jenis, $bahan, $warna);
        $this->target = $target;
        $this->size = $size;
        $this->merk = $merk;
    }

    public function setTarget ($target) { $this->target = $target; }
    public function getTarget () { return $this->target; }

    public function setSize ($size) { $this->size = $size; }
    public function getSize () { return $this->size; }

    public function setMerk ($merk) { $this->merk = $merk; }
    public function getMerk () { return $this->merk; }
}
?>