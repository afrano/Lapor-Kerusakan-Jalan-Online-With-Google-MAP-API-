<?php

include "controller/LaporanDAO.php";
include "controller/JalanDAO.php";

$main = new LaporanDAO();
$login = new JalanDAO();

if (isset($_GET['input'])) {
    $main->viewInsert();
} else if (isset($_GET['tampilLaporan'])) {
    $main->DetailPerbaikan();
} else if (isset($_GET['lihatlaporan'])) {
    $main->LihatLaporan();
} else if (isset($_GET['olah'])) {
    $id = $_GET['olah'];
    $main->OlahData($id);
} else if (isset($_GET['Detail'])) {
    $id = $_GET['Detail'];
    $main->Detail($id);
} else if (isset($_GET['login'])) {
    $login->Login();
} else if (isset($_GET['admin'])) {
    $main->Admin();
} else if (isset($_GET['koor'])) {
    $main->DaftarPerbaikan();
} else if (isset($_GET['detailkoor'])) {
    $id = $_GET['detailkoor'];
    $main->PerbaikanKoordinator($id);
} else if (isset($_GET['rekap'])) {
    $opsi = $_GET['rekap'];
    $periode = @$_GET['periode'];
    $main->TampilPeriode($periode,$opsi);
} else {
    $main->Home();
}

