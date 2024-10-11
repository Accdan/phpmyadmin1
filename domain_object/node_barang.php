<?php
class barang{
    public $barang_id;
    public $barang_name;

    public $barang_description;

    public $barang_harga;

    function __construct($barang_id,$barang_name,$barang_description,$barang_harga){
          $this->barang_id = $barang_id;
          $this->barang_name = $barang_name;
          $this->barang_description = $barang_description;
          $this->barang_harga = $barang_harga;
    }
}

