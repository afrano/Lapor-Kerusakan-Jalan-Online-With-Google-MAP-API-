<?php

class Jalan {

    function __construct() {
        //  $connect = mysqli_connect("mysql.idhostinger.com", "u869790731_laza", "123456", "u869790731_laza");
        $connect = mysqli_connect("localhost", "root", "", "Lazarus");
    }

    function execute($query) {
        // $connect = mysqli_connect("mysql.idhostinger.com", "u869790731_laza", "123456", "u869790731_laza");
        $connect = mysqli_connect("localhost", "root", "", "Lazarus");
        return mysqli_query($connect, $query);
    }

    function OlahData() {
        $query = "select * from Laporan left join Masyarakat on Laporan.email = masyarakat.email";
        return $this->execute($query);
    }

    function listJalan() {
        //kepake
        $query = "select id_jalan from jalan";
        return $this->execute($query);
    }

    function descIdJalan() {
        $query = "SELECT id_laporan FROM laporan order by id_laporan desc limit 1";
        return $this->execute($query);
    }

    function LihatDataJalan() {
        $query = "select * from jalan";
        return $this->execute($query);
    }

    function LihatLaporan() {
        $query = "select * from jalan where id = '11'";
        return $this->execute($query);
    }

    function DetailPerbaikan() {
        $query = "select * from jalan left join koordinator on jalan.id_jalan = koordinator.id_Koordinator";
        //   $query = "select * from jalan where id_jalan = '11'";
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

    function descId() {
        $query = "SELECT id_jalan FROM jalan order by id_jalan desc limit 1";
        return $this->execute($query);
    }

    function insertJalan($Nama_Jalan, $Latitude, $Logitude, $Jenis_Jalan) {

        $data = $this->descId();
        while ($row = mysqli_fetch_array($data)) {
            $angka = substr($row['id_jalan'], -9);
            $L = substr($row['id_jalan'], 0, 1);
            $angka++;
            $tes = $angka;
            $hasil = $L . $tes;
        }
        $query = "INSERT INTO jalan (id_jalan, jenis_jalan, Latitude, Longitude, Nama_Jalan) VALUES ('" . $hasil . "', 'JENIS_JALAN', 'LON', 'LAT', '$Nama_Jalan')";
        return $this->execute($query);
    }

    function getJarakLokasi($latitude1, $longitude1, $latitude2, $longitude2) {
        $theta = $longitude1 - $longitude2;
        $jarak = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
        $jarak = acos($jarak);
        $jarak = rad2deg($jarak);
        $jarak = $jarak * 60 * 1.1515;
        $JarakTotal = $distance * 1.609344;
        return (round($JarakTotal, 2));
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
