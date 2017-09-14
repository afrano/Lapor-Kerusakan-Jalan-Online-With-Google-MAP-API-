<?php

include "model/Laporan.php";
include "model/Masyarakat.php";

//Require_once 'model/Jalan.php';

class LaporanDAO {

    public $model;
    public $Masyarakat;

    function __construct() {
        $this->model = new Laporan();
        $this->Masyarakat = new Masyarakat();
    }

    function generateId() {
        $row = $this->model->descId();

        while ($row = $result->fetch_assoc()) {

            $angka = substr($row['id_laporan'], -9);
            echo "<br> id: " . substr($row['id_laporan'], 0, 1) . "<br>";
            $L = substr($row['id_laporan'], 0, 1);
            $angka++;
            $tes = $angka;
            echo 'angka=' . $angka;
            echo '<br>';
            $hasil = $L . $tes;
            echo $hasil;
        }
    }

    function LihatDataJalan() {
        $data = $this->model->LihatDataJalan();
        include "Home.php";
    }

    function DetailPerbaikan() { 
        $data2 = $this->model->DetailPerbaikan();
        include_once 'LihatLaporanJalan.php';
        return $data2;
    }
    
    function Home() {
        $data = $this->model->Home();
         include_once 'Home.php';
        return $data;
    }

    function DaftarPerbaikan() {
        $data = $this->model->DaftarPerbaikan();
        include "DaftarLaporanPerbaikan.php";
    }

    function PerbaikanKoordinator($id) {
        $data = $this->model->DetailData($id);
        $row = $this->model->fetch($data);
        include "DetailPerbaikanK.php";
    }

    function Admin() {
        include_once 'olahData.php';
    }

    function DetailLaporan() {
        $data = $this->model->DetailLaporan();
        include "DetailLaporan.php";
    }

    function OlahData($id) {
        $data = $this->model->DetailData($id);
        $row = $this->model->fetch($data);
        include "DetailLaporan.php";
    }

    function Detail($id) {
        $data = $this->model->DetailData($id);
        $row = $this->model->fetch($data);
        include "DetailLaporanJalan.php";
    }


    function cari($cari) {
        $data = $this->model->Cari($cari);
        include "Laporan.php";
    }

    function viewInsert() {
        $data = $this->model->descId();
        include "Inputlaporan.php";
    }

    function tampilBelumTerverifikasi() {
        $data = $this->model->OlahData();
        
        return $data;
    }

    function tampilTerverifikasi() {
        $data2 = $this->model->OlahData2();
        include_once 'olahData.php';
        return $data2;
    }

    function TampilPeriode($opsi, $rekap) {
        if ($rekap == "durasi") {
            $data = $this->model->tampilPeriode();
            $data1 = $this->model->tampilPeriode();
            $data2 = $this->model->rekapDurasi($opsi);
            $data3 = $this->model->jumRekapPeriode($opsi);
            $data4 = $this->model->jumTolakPeriode($opsi);
        } elseif ($rekap == "kondisi") {
            //rekap Kondisi
            $data5 = $this->TampilSemester();
            $sem = substr($opsi, 9, 1);

            $tahun = substr($opsi, 11, 4);

            $data6 = $this->tampilKesimpulanKondisi($tahun, $sem);
        }
        include_once 'RekapData.php';
    }

    function TampilSemester() {
        $aw = $this->model->temukanRangeTahun();
        $min;
        $max;
        while ($row1 = mysqli_fetch_array($aw)) {
            $min = $row1[0];
            $max = $row1[1];
        }
        $tes1 = $max - $min;
//echo 'min=' . $min;
//echo '<br>';
        $hasil = array();
        if ($tes1 >= 0) {
            for ($x = 0; $x <= $tes1; $x++) {
                $aw2 = $this->model->temukanLaporanByTahun($min);
                while ($r2 = mysqli_fetch_array($aw2)) {
//            echo $r2[0];
//            echo '<br>';
                    if ($r2[0] == "01" || $r2[0] == "02" || $r2[0] == "03" || $r2[0] == "04" || $r2[0] == "05" || $r2[0] == "06") {
                        $hasil[] = 'Semester 1 ' . $min;
//                echo '<br>';
                    } else {
                        $hasil[] = 'Semester 2 ' . $min;
//                echo '<br>';
                    }
//            echo '<br>';
                }
                $minINT = intval($min);
                $tahun = $minINT + 1;
                $min = strval($tahun);
            }
        } else {
            $hasil[] = 'Periode tidak tersedia';
        }
        return $hasil2 = array_unique($hasil);
    }

    function tampilKesimpulanKondisi($tahun, $sem) {
        include_once 'model/Jalan.php';
        include_once 'model/Laporan.php';
        $jln = new Jalan();
        $lpr = new Laporan();
        $dat1 = NULL;
        $j = $jln->listJalan();
        while ($rr2 = mysqli_fetch_array($j)) {
//    echo 'rr2  =' . $rr2[0];
//            echo '<br>';
            $dat1[] = $lpr->sumKerusakanPerJalan($rr2[0], $tahun, $sem);
        }
        return $dat1;
    }

    function insert() {
        $id_laporan = $_POST['id_laporan'];
        $longitude = $_POST['lon'];
        $latitude = $_POST['lat'];
        $saran = $_POST['saran'];
        $foto = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $status_laporan = 1;
        $tgl_laporan = $_POST['tgl_Lapor'];
        $email = $_POST['email'];
        $Nama_Jalan = $_POST['namajalan'];
        $Nama_Jalan = strtolower($Nama_Jalan);
        if (strpos($Nama_Jalan, 'jalan') !== false) {
            $awal = strpos($Nama_Jalan, "jalan");
            if ($akhir = strpos($Nama_Jalan, "no.") !== false) {
                $akhir = strpos($Nama_Jalan, "no.");
                $Nama_Jalan = substr($Nama_Jalan, $awal + 6, $akhir - 7);
                echo"<script>alert('if 1 " . $Nama_Jalan . "');</script>";
            } else {
                $akhir = strpos($Nama_Jalan, ",");
                $Nama_Jalan = substr($Nama_Jalan, $awal + 6, $akhir - 4);
                echo"<script>alert('if 2 " . $Nama_Jalan . "');</script>";
            }
        } else {
            $awal = strpos($Nama_Jalan, "jl");
            if (strpos($Nama_Jalan, "no.") !== false) {
                $akhir = strpos($Nama_Jalan, "no.");
                $Nama_Jalan = substr($Nama_Jalan, $awal + 4, $akhir - 5);
                echo"<script>alert('if 3 " . $Nama_Jalan . "');</script>";
            } else {
                $akhir = strpos($Nama_Jalan, ",");
                $Nama_Jalan = substr($Nama_Jalan, $awal + 4, $akhir - 4);
                echo"<script>alert('if 4 " . $Nama_Jalan . "');</script>";
            }
        }
        $conn = new mysqli("localhost", "root", "", "lazarus");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM `jalan` WHERE Nama_Jalan like '%" . $Nama_Jalan . "%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo"<script>alert('LIKE OKE');</script>";
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row['Id_Jalan'] . "<br>";
                $Nama_Jalan = $row['Id_Jalan'];
                echo"<script>alert('data match! id_jalan = " . $Nama_Jalan . "');</script>";
            }
        } else {
            echo"<script>alert('LIKE error');</script>";
            include_once 'model/Jalan.php';
            $jln = new Jalan();
            if ($adaw = $jln->insertJalan($Nama_Jalan, NULL, NULL, NULL)) {
                echo"<script>alert('memasukan data jalan baru!" . $Nama_Jalan . "');</script>";
                $data = $jln->descId();
                echo"<script>alert('desdid');</script>";
                while ($row = mysqli_fetch_array($data)) {

                    $Nama_Jalan = $row['id_jalan'];
                }
                echo"<script>alert('id jalan baru = " . $Nama_Jalan . "');</script>";
            } else {
                echo"<script>alert('gagal memasukan jalan baru = " . $Nama_Jalan . "');</script>";
            }
        }
        $conn->close();
        //      echo"<script>alert('conn close');</script>";
        $no_hp = $_POST['nomor_telpon'];
        if (empty($latitude)) {
            echo"<script>alert('Maaf, Kami tidak menemukan lokasi anda sekarang !!');</script>";
        } else if (empty($foto)) {
            echo"<script>alert('Maaf, foto belum ada!!');</script>";
        } else {
            if ($insert = $this->model->InputLaporan($id_laporan, $longitude, $latitude, $saran, $foto, $status_laporan, $tgl_laporan, $email, $Nama_Jalan)) {
                if ($insert = $this->Masyarakat->InsertMasyarakat($email, $no_hp)) {
                    echo"<script>alert('Laporan Terkirim !');"
                    . " window.location.replace('http://localhost/Hapus/index.php'); </script>";
                } else {
                    echo"<script>alert('Laporan Terkirim !');"
                    . " window.location.replace('http://localhost/Hapus/index.php'); </script>";
                }
            } else {
                echo"<script>alert('gagal !!');"
                . " window.location.replace('http://localhost/Hapus/index.php?input=add'); </script>";
            }
        }
    }

    function Konfirmasi() {
        session_start();
        $id_laporan = $_POST['id_laporan'];
        $tgl_verifikasi = $_POST['tgl_Verifikasi'];
        $status_laporan = 2;
        $id_admin = $_SESSION['user'];
        $email = $_POST['email']; 
        $notujuan = $_POST['nomor_hp'];
        if ($Konfirmasi = $this->model->KonfirmasiLaporan($id_laporan, $tgl_verifikasi, $status_laporan, $id_admin)) {
          $KirimEmail = $this->Masyarakat->KirimEmail($email, $status_laporan);
            $KirimSMS = $this->Masyarakat->KirimSMS($notujuan, $status_laporan);
            echo"<script>alert('Laporan Berhasil Dikonfirmasi');"
            . " window.location.replace('http://localhost/Hapus/index.php?admin'); </script>";
        } else {
            echo"<script>alert('Terjadi kesalahan !!');"
            . "window.location.replace('http://localhost/Hapus/index.php?admin'); </script>";
        }
    }

    function Selesai() {
        session_start();
        $id_laporan = $_POST['id_laporan'];
        $tgl_selesai = date('d/m/Y');
        $status_laporan = 3;
        $kerusakan = $_POST['kerusakan'];
        $id_koordinator = $_SESSION['user'];
        $email = $_POST['email'];
        $notujuan = $_POST['nomor_hp'];
        if ($Konfirmasi = $this->model->SelesaiPerbaikan($id_laporan, $tgl_selesai, $kerusakan, $status_laporan, $id_koordinator)) {
            $KirimEmail = $this->Masyarakat->KirimEmail($email, $status_laporan); // Untuk mengirim email
            $KirimSMS = $this->Masyarakat->KirimSMS($notujuan, $status_laporan);
            echo"<script>alert('Selesai Pengerjaan Jalan');"
            . " window.location.replace('http://localhost/Hapus/index.php?koor'); </script>";
        } else {
            echo"<script>alert('Terjadi kesalahan !!');"
            . "window.location.replace('http://localhost/Hapus/index.php?koor'); </script>";
        }
    }

    function TolakLaporan() {
        $id_laporan = $_POST['id_laporan'];
        $status_laporan = 0;
        $email = $_POST['email'];
        $notujuan = $_POST['nomor_hp'];
        if ($Konfirmasi = $this->model->TolakLaporan($id_laporan, $status_laporan)) {
            $KirimEmail = $this->Masyarakat->KirimEmail($email, $status_laporan);
            $KirimSMS = $this->Masyarakat->KirimSMS($notujuan, $status);
            echo"<script>alert('Laporan berhasil ditolak');"
            . " window.location.replace('http://localhost/Hapus/index.php?admin'); </script>";
        } else {
            echo"<script>alert('Terjadi kesalahan !!');"
            . "window.location.replace('http://localhost/Hapus/index.php?admin'); </script>";
        }
    }

    function __destruct() {
        
    }

}
