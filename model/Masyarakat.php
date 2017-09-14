<?php

class Masyarakat {

    public $email;
    public $no_hp;

    function __construct() {
        //  $connect = mysqli_connect("mysql.idhostinger.com", "u869790731_laza", "123456", "u869790731_laza");
        $connect = mysqli_connect("localhost", "root", "", "Lazarus");
    }

    function execute($query) {
        // $connect = mysqli_connect("mysql.idhostinger.com", "u869790731_laza", "123456", "u869790731_laza");
        $connect = mysqli_connect("localhost", "root", "", "Lazarus");
        return mysqli_query($connect, $query);
    }

    function InsertMasyarakat($email, $no_hp) {
        $query = "INSERT INTO masyarakat VALUES('$email', '$no_hp')";
        return $this->execute($query);
    }

    function KirimSMS($notujuan, $status_laporan) {
        $hp = str_replace('+62', '0', $notujuan);
        $hp = str_replace(' ', '', $hp);
        $hp = str_replace('.', '', $hp);
        $hp = str_replace(',', '', $hp);
        $ho = trim($hp);
        if ($status_laporan == 0) {
            $isipesan = 'Maaf laporan anda belum bisa kami proses. Terima Kasih atas partisipasi anda. Pengirim : Lazarus ';
            $isi = urlencode($isipesan);
            $url = "https://reguler.zenziva.net/apps/smsapi.php?userkey=o7z12n&passkey=mensdario&nohp=$hp&pesan=$isi";
            $data = file_get_contents($url);
        } else if ($status_laporan == 2) {
            $isipesan = 'Terima Kasih atas partisipasi anda dalam melaporkan kerusakan jalan, laporan anda akan segera kami proses. Pengirim : Lazarus ';
            $isi = urlencode($isipesan);
            $url = "https://reguler.zenziva.net/apps/smsapi.php?userkey=o7z12n&passkey=mensdario&nohp=$hp&pesan=$isi";
            $data = file_get_contents($url);
        } else if ($status_laporan == 3) {
            $isipesan = 'Terima Kasih atas partisipasi anda dalam melaporkan kerusakan jalan, laporan jalan telah selesai dikerjakan. Pengirim : Lazarus ';
            $isi = urlencode($isipesan);
            $url = "https://reguler.zenziva.net/apps/smsapi.php?userkey=o7z12n&passkey=mensdario&nohp=$hp&pesan=$isi";
            $data = file_get_contents($url);
        }
    }
    function KirimEmail($email, $status_laporan) {
        require_once "Mail.php";
        $kepada = "$email";
        $subject = "Lazarus - Respon Laporan Kerusakan Jalan";
        $dari = "afranoamran16@gmail.com";
        $host = "ssl://smtp.gmail.com";
        $port = "465";
        $username = "afranoamran16@gmail.com";
        $password = "masukanpaswword";
        $headers = array('From' => $dari, 'To' => $kepada,
            'Subject' => $subject);
        $smtp = Mail::factory('smtp', array('host' => $host,
                    'port' => $port, 'auth' => true,
                    'username' => $username, 'password' => $password));
        if ($status_laporan == 0) {
            $IsiEmail = "Dear " . $kepada . " "
                    . "Terima kasih anda telah berpartisipasi dalam melaporkan kerusakan jalan di Kab Sleman. "
                    . "Mohon maaf, setelah melakukan berbagai macam pertimbangan kami memutuskan bahwa laporan anda untuk sementara tidak dapat ditindak lanjuti. Terima Kasih.";
            $mail = $smtp->send($kepada, $headers, $IsiEmail);
        } else if ($status_laporan == 2) {
            $IsiEmail = "Dear " . $kepada . " "
                    . "Terima kasih anda telah berpartisipasi dalam melaporkan kerusakan jalan di Kab Sleman. Laporan anda sudah kami proses dan akan segera dikerjakan.";
            $mail = $smtp->send($kepada, $headers, $IsiEmail);
        } else if ($status_laporan == 3) {
            $IsiEmail = "Dear " . $kepada . " "
                    . "Terima kasih anda telah berpartisipasi dalam melaporkan kerusakan jalan di Kab Sleman. Laporan anda sudah selesai dikerjakan.";
            $mail = $smtp->send($kepada, $headers, $IsiEmail);
        }
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
