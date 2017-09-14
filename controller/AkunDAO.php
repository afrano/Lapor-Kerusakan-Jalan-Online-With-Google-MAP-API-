<?php

include "model/Admin.php";

class AkunDAO {

    public $model;

    function __construct() {
        $this->model = new Admin();
    }

    function Login($username, $password) {
        session_start();
        if (isset($_POST['login'])) {
            if (substr($username, 0, 1) == 'A') {

                if (empty($_POST['username']) || empty($_POST['password'])) {
                    $error = "Username or Password is invalid";
                    echo $_POST['username'];
                } else {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    include 'Connection/Connection.php';
                    $data = 
                    $connect = mysqli_connect("localhost", "root", "", "lazarus");

                    $query = mysqli_query($connect, "select * from admin where password='$password' AND id_admin='$username'");
                    $rows = mysqli_num_rows($query);
                    if ($rows == 1) {

                        $_SESSION['user'] = $username;
//                        header("location: index.php?admin");
                    } else {
                         echo"<script>alert('Password Anda Salah !!'); </script>";
                     }
                    mysqli_close($connect);
                }
            } else if (substr($username, 0, 1) == 'K') {
                if (empty($_POST['username']) || empty($_POST['password'])) {
                    $error = "Username or Password is invalid";
                    echo $_POST['username'];
                } else {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $connect = mysqli_connect("localhost", "root", "", "lazarus");


                    $query = mysqli_query($connect, "select * from koordinator where password='$password' and id_koordinator='$username'");
                    $rows = mysqli_num_rows($query);
                    if ($rows == 1) {
                        echo 'un & pw benar';
                        $_SESSION['user'] = $username;
//                        header("location: index.php?login?box=true");
                    } else {
                         echo"<script>alert('Username dan password Salah!!'); </script>";
                    }
                    mysqli_close($connect);
                }
            } else {
                echo"<script>alert('Username dan password Salah!!'); </script>";
            }
        }
    }

    function logout() {
        session_start();
        if (session_destroy()) {
            header("Location: index.php");
        }
    }

    function input() {
        $data = $this->model->descId();
        include 'InputLaporan.php';
    }

    function insert() {
        $Nama_Jalan = $_POST['desc'];
        $Latitude = $_POST['lat'];
        $Logitude = $_POST['lon'];
        $Jenis_Jalan = $_POST['Jenis_jalan'];
        $insert = $this->model->insertJalan($Nama_Jalan, $Latitude, $Logitude, $Jenis_Jalan);
        header("location:index.php");
    }

    function getNameById($id_admin, $akun) {
        include_once 'model/Koordinator.php';
        $koor = new Koordinator();
        if ($akun == "admin") {
            $result = $this->model->selectById($id_admin);
        } elseif ($akun == "koor") {
            $result = $koor->selectById($id_admin);
        }

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                if ($akun == "admin") {
                     echo $row['nama_admin'];
                } elseif ($akun == "koor") {
                     echo $row['nama_koordinator'];
                }
               
            }
        } else {
            echo "no results";
        }
    }

    function __destruct() {
        
    }

}

?>