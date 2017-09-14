<?php

class Admin {

    function __construct() {
        $con = mysqli_connect("localhost", "root", "", "lazarus");

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        } else {
            
        }
    }

    function selectById($id_admin) {
        $query = "SELECT nama_admin FROM `admin` WHERE id_admin = '" . $id_admin . "'";
        return $this->execute($query);
    }

    function execute($query) {
        $con = mysqli_connect("localhost", "root", "", "lazarus");
        return mysqli_query($con, $query);
    }

    function listAdmin() {
        $query = "SELECT * From admin";
        return $this->execute($query);
    }

    function fetch($var) {
        if ($var == null) {
            echo 'var nya null';
        } else {
            return mysqli_fetch_array($var);
        }
        return mysqli_fetch_array($var);
        ;
    }

    function __destruct() {
        
    }

}
