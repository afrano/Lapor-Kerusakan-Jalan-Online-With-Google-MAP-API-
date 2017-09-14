<?php

class Laporan {

    function __construct() {
        //  $connect = mysqli_connect("mysql.idhostinger.com", "u869790731_laza", "123456", "u869790731_laza");
        $connect = mysqli_connect("localhost", "root", "", "Lazarus");
    }

    function execute($query) {
        // $connect = mysqli_connect("mysql.idhostinger.com", "u869790731_laza", "123456", "u869790731_laza");
        $connect = mysqli_connect("localhost", "root", "", "Lazarus");
        return mysqli_query($connect, $query);
    }

    function descId() {
        $query = "SELECT id_laporan FROM laporan order by id_laporan desc limit 1";
        return $this->execute($query);
    }

    function DetailPerbaikan() { //lihatlaporanjalan
        $query = "select distinct l.id_laporan, j.nama_Jalan, "
                . "l.Tgl_laporan,l.Status_laporan, l.email, "
                . "l.longitude, l.latitude, "
                . "l.foto,l.saran from laporan l , "
                . "jalan j where l.id_jalan like "
                . "j.id_jalan order by id_laporan desc";
        return $this->execute($query);
    }

    function DaftarPerbaikan() {
        $query = "select * from Laporan left join Masyarakat on Laporan.email = Masyarakat.email where status_laporan = 2";
        return $this->execute($query);
    }

    function DetailLaporan() {
        $query = "select * from laporan";
        return $this->execute($query);
    }

    function descIdJalan() {
        $query = "select * from Laporan where id_laporan = 'L100000003'";
        //   $query = "select * from jalan where id_jalan = '11'";
        return $this->execute($query);
    }

    function OlahData() {
        $query = "select * from Laporan left join Masyarakat on Laporan.email = Masyarakat.email where Laporan.status_laporan = '1'";
        return $this->execute($query);
    }

    function OlahData2() {
        $query = " SELECT distinct l.id_laporan,l.id_jalan,l.tgl_verifikasi, l.id_admin, l.email, a.nama_admin, m.nomor_hp, l.longitude , l.latitude, l.foto FROM Laporan l, masyarakat m, admin a where l.status_laporan = '2' and l.email = m.email and l.id_admin = a.id_admin";
        return $this->execute($query);
    }

    function DetailData($id) {
        $query = "SELECT l.id_laporan,l.tgl_verifikasi,l.saran, l.email, l.longitude , l.latitude, l.foto, j.nama_jalan, m.nomor_hp FROM masyarakat m, Laporan l, jalan j where l.id_laporan = '$id' and l.id_jalan = j.id_jalan and m.email = l.email";
        return $this->execute($query);
    }

    function Home() {
        $query = "select * from Laporan";
        return $this->execute($query);
    }

    function LihatDataJalan() {
        $query = "select * from jalan";
        return $this->execute($query);
    }

    function Cari($cari) {
        $query = "select * from jalan where id_jalan like '%$cari%'";
        return $this->execute($query);
    }

    function selectJalan($ID_Jalan) {
        $query = "select * from jalan where ID_Jalan='$ID_Jalan'";
        return $this->execute($query);
    }

    function updateJalan($ID_Jalan, $Nama_Jalan, $Latitude, $Logitude, $Jenis_Jalan) {
        $query = "update jalan set Nama_Jalan='$Nama_Jalan', Latitude='$Latitude', Logitude='$Logitude', Jenis_Jalan='$Jenis_Jalan'where ID_Jalan='$ID_Jalan'";
        return $this->execute($query);
    }

    function deleteJalan($Nama_Jalan) {
        $query = "delete from jalan where Nama_Jalan='$Nama_Jalan'";
        return $this->execute($query);
    }

    function sumKerusakanPerJalan($id_jalan, $tahun, $sem) {
        if ($sem == 1) {

            $query = "SELECT j.id_jalan,j.Nama_jalan, sum(l.kerusakan) FROM laporan l, jalan j WHERE substring(l.tgl_selesai,4,2) <= 6 and substring(l.tgl_selesai,7,4) = '$tahun' and j.id_jalan='$id_jalan' and l.id_jalan = j.id_jalan";
        } elseif ($sem == 2) {
            $query = "SELECT j.id_jalan,j.Nama_jalan, sum(l.kerusakan) FROM laporan l, jalan j WHERE substring(l.tgl_selesai,4,2) > 6 and substring(l.tgl_selesai,7,4) = '$tahun' and j.id_jalan='$id_jalan' and l.id_jalan = j.id_jalan";
        }

        return $this->execute($query);
    }

    function InputLaporan($id_laporan, $longitude, $latitude, $saran, $foto, $status_laporan, $tgl_laporan, $email, $Nama_Jalan) {
        $query = "INSERT INTO laporan values ('$id_laporan','$longitude', '$latitude', '$saran', 'null' , '$foto', 'null', 'null', '$status_laporan', '$tgl_laporan', '$email', '$Nama_Jalan','null', 'null')";
        return $this->execute($query);
    }

    function KonfirmasiLaporan($id_laporan, $tgl_verifikasi, $status_laporan, $id_admin) {
        $query = "update laporan set tgl_verifikasi='$tgl_verifikasi', status_laporan='$status_laporan', id_admin='$id_admin' where id_laporan='$id_laporan'";
        return $this->execute($query);
    }

    function TolakLaporan($id_laporan, $status_laporan) {
        $query = "update laporan set status_laporan='$status_laporan' WHERE id_laporan = '$id_laporan' ";
        return $this->execute($query);
    }

    function insertJalan($Nama_Jalan, $Latitude, $Logitude, $Jenis_Jalan) {
        $query = "INSERT INTO jalan VALUES(NULL, '$Nama_Jalan', '$Latitude', '$Logitude', '$Jenis_Jalan')";
        return $this->execute($query);
    }

    function SelesaiPerbaikan($id_laporan, $tgl_selesai, $kerusakan, $status_laporan, $id_koordinator) {
        $query = "update laporan set kerusakan='$kerusakan', tgl_selesai='$tgl_selesai', status_laporan='$status_laporan', id_koordinator='$id_koordinator' where id_laporan='$id_laporan'";
        return $this->execute($query);
    }

    function insertData($email, $nomor_telepon) {
        $query = "INSERT INTO Laporan VALUES(NULL, '$email', '$nomor_telepon')";
        return $this->execute($query);
    }

    function jumRekapPeriode($periode) {
        $query = "SELECT COUNT(id_laporan) FROM laporan WHERE SUBSTRING(tgl_laporan, 4, 7) = '$periode'";
        return $this->execute($query);
    }

    function temukanRangeTahun() {
        $query = "SELECT Min(SUBSTRING(tgl_laporan, 7, 4)) AS min, MAX(SUBSTRING(tgl_laporan, 7, 4)) AS max FROM laporan";
        return $this->execute($query);
    }

    function jumTolakPeriode($periode) {
        $query = "SELECT COUNT(id_laporan) FROM laporan WHERE SUBSTRING(tgl_laporan, 4, 7) = '$periode' and status_laporan='0'";
        return $this->execute($query);
    }

    function temukanLaporanByTahun($tahun) {
        $query = "SELECT DISTINCT SUBSTRING(tgl_laporan, 4, 2) as bulan from laporan where SUBSTRING(tgl_laporan, 7)='$tahun'";
        return $this->execute($query);
    }

    function rekapKondisi($periode) {
        $query = "SELECT j.id_jalan, j.Nama_Jalan , l.kerusakan FROM jalan j , laporan l WHERE status_laporan = '3' and l.id_jalan = j.id_jalan";
        return $this->execute($query);
    }

    function tampilPeriode() {
        $query = "SELECT DISTINCT SUBSTRING(tgl_laporan, 4, 7) from laporan";
        return $this->execute($query);
    }

    function rekapDurasi($periode) {
        $query = "SELECT id_laporan, SUBSTRING(tgl_laporan, 1, 2) AS tgl_masuk, 
SUBSTRING(tgl_verifikasi, 1, 2)-SUBSTRING(tgl_laporan, 1, 2) as durasi_verif, 
SUBSTRING(tgl_selesai, 1, 2)-SUBSTRING(tgl_verifikasi, 1, 2) as durasi_kerja 
FROM laporan WHERE SUBSTRING(tgl_laporan, 4, 7) = '$periode' ";

        return $this->execute($query);
    }

    function fetch($var) {
        if ($var == null) {
            echo 'var nya null';
        } else {
            return mysqli_fetch_array($var);
        }
        return mysqli_fetch_array($var);
    }

    function __destruct() {
        
    }

}
