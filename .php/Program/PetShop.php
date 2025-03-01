<?php
class PetShop {
    private $ID = 0;
    private $nama = '';
    private $stok = 0;
    private $harga = 0;
    private $foto = '';

    public function __construct($ID = 0, $nama = '', $stok = 0, $harga = 0, $foto = '') {
        $this->ID = $ID;
        $this->nama = $nama;
        $this->stok = $stok;
        $this->harga = $harga;
        $this->foto = $foto;
    }

    public function setID ($ID) { $this->ID = $ID; }
    public function getID () { return $this->ID; }

    public function setNama ($nama) { $this->nama = $nama; }
    public function getNama () { return $this->nama; }

    public function setStok ($stok) { $this->stok = $stok; }
    public function getStok () { return $this->stok; }

    public function setHarga ($harga) { $this->harga = $harga; }
    public function getHarga () { return $this->harga; }

    public function setFoto ($foto) { $this->foto = $foto; }
    public function getFoto () { return $this->foto; }
}

?>