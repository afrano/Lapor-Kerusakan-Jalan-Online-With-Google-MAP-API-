<?php

include "model/Jalan.php";

class JalanDAO {

    public $model;

    function __construct() {
        $this->model = new Jalan();
    }

    function Login() {
        include "Login.php";
    }

    function Admin() {
        $data = $this->model->OlahData();
        include "olahData.php";
    }

    function LihatDataJalan() {
        $data = $this->model->LihatDataJalan();
        include "Home.php";
    }

    function LihatLaporan() {
        $data = $this->model->LihatLaporan();
        include "LihatLaporanJalan.php";
    }

    function DetailPerbaikan() {
        $data = $this->model->DetailPerbaikan();
        include "DetailPerbaikan.php";
    }

    function Laporan() {
        $data = $this->model->DetailPerbaikan();
        include '';
    }

    function viewInsert() {
        include "model/Laporan.php";
        $this->model = new Laporan();
        $data = $this->model->descId();
        include "Inputlaporan.php";

        // ambil data dari file Inputlaporan
    }

    function insert() {
        $Gambar = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $Nama_Jalan = $_POST['namajalan'];
        $Latitude = $_POST['lat'];
        $Longitude = $_POST['lon'];
        $Jenis_Jalan = $_POST['Jenis_jalan'];
        if (empty($Latitude)) {
            echo"<script>alert('Maaf, Kami tidak menemukan lokasi anda sekarang !!');</script>";
        } else if (empty($Gambar)) {
            echo"<script>alert('Maaf, foto belum ada!!');</script>";
        } else {
            if ($insert = $this->model->insertJalan($Nama_Jalan, $Latitude, $Longitude, $Jenis_Jalan, $Gambar)) {
                echo"<script>alert('Data Berhasil disimpan !');</script>";
            } else {
                // berhasil kembali ke index
                echo"<script>alert('gagal !');</script>";
                //window.location.replace("");
            }
        }
    }

    function __destruct() {
        
    }

}

?>