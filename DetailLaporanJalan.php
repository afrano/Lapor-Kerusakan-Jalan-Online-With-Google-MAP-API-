<!DOCTYPE html>
<html>
    <head>

        <title>Detail Laporan</title>
        <!-- custom-theme -->
        <link rel="icon" href="images/logo64.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Karate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //custom-theme -->
        <link rel="icon" href="images/logo64.png">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- //js -->
        <!-- font-awesome-icons -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Shadows+Into+Light+Two&amp;subset=latin-ext" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
        <style>
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }

        </style>
    </head>
    <body>
        <div class="" style="height: 0px">
            <nav class="navbar navbar-default" style="margin: 0px; border-radius: 0px">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 style="color: white"><a class="navbar-brand" href="index.php" ><span style=""><i>L</i>azarus</span></a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                </div>
            </nav>

        </div>
        <div class="banner-bottom  " style="height: 200px;margin-left: 10%;margin-right:10% ">
            <div class="grid_3 grid_5 ">

                <ol class="breadcrumb well" style="margin: 0px; ">
                    <li class="active"><a href="http://localhost/Hapus/index.php?tampilLaporan=add">Kembali</a></li>
                    <li class="active">Detail Laporan</li>
                </ol>
            </div>

        </div>
        <div  class=" w3layouts well" style="margin-left: 10%;margin-right: 10%;height: 1400px">

            <div class="well" style="text-align: center"><b>Detail Laporan Kerusakan Jalan</b></div>
            <form method="post" action=""> 
                <div  class="grid_5" style="margin-left: 1%; margin-right: 1% ; background-color: #fff">
                    <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                        <span class='input-group-addon' id='sizing-addon1' >Status Laporan</span>                        
                        <?php
                        if ($row[9] == 0) {
                            $status = 'Laporan Ditolak';
                        } else if ($row[9] == 1) {
                            $status = 'Dalam Proses Perbaikan';
                        } else if (($row[9] == 2)) {
                            $status = 'Telah Selesai diperbaiki';
                        } else if (($row[9] == null)) {
                            $status = 'Laporan belum dikonfirmasi';
                        }
                        echo " <input type='text' id='tgl_Verifikasi' name='tgl_Verifikasi'  value='" . $status . "' class='form-control' aria-describedby='sizing-addon1' >                    
                    </div> ";
                        ?>
                        <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                            <span class='input-group-addon' id='sizing-addon1' >ID Laporan</span>
                            <input type="text"  id="id_laporan" name="id_laporan" value="<?= $row[0] ?>" class='form-control' aria-describedby='sizing-addon1' >             
                        </div>

                        <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                            <span class='input-group-addon' id='sizing-addon1' >Pelapor</span>
                            <input type="text"  id="email" name="email" value="<?= $row[11] ?>" class='form-control' aria-describedby='sizing-addon1' >                    
                        </div>
                        <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                            <span class='input-group-addon' id='sizing-addon1' >Longitude</span>
                            <input type='text' id='Longitude'value="<?= $row[1] ?>" name="Longitude" class='form-control' aria-describedby='sizing-addon1' >                    
                        </div> 
                        <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                            <span class='input-group-addon' id='sizing-addon1' >Latitude</span>
                            <input type='text'  id='Latitude'value="<?= $row[2] ?>" name="Latitude" class='form-control' aria-describedby='sizing-addon1' >                    
                        </div>
                        <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                            <span class='input-group-addon' id='sizing-addon1' >Saran Pelapor</span>
                            <input type="text" name="saran" value="<?= $row[3] ?>"id="saran" class='form-control' aria-describedby='sizing-addon1' >                    
                        </div> 

                    </div>
                    <div  class="grid_5" style="margin-left: 1%; margin-right: 1%;height: 1000px ; background-color: #fff">
                        <div class="well" style="text-align: center; background-color: #ccffff;margin-left: 5%;margin-right: 5%;"></div>
                        <div  class="grid_5 well" style="margin-left: 8%;margin-right: 8%;height: 50%; padding: 10px">
                            <div id="map" style="float: left; height: 250px;width: 400px;display: inline-block"></div>
                            <?php
                            //@$_POST['Lihat']jika button submit diklik maka panggil fungsi insert pada controller
                            $ID_Jalan = $row[0];
                            $link = mysqli_connect("localhost", "root", "", "lazarus");
                            $sql = "select * from Laporan WHERE id_laporan = '$ID_Jalan'";
                            $result = mysqli_query($link, $sql);
                            $row = mysqli_fetch_array($result);
                            mysqli_close($link);
                            echo '<div style="float: right; height: 410px;width: 400px;display: inline-block;"> <img src="data:image/jpeg;base64,' . base64_encode($row[6]) . '" width="405" height="405"/> </div> ';
                            ?>
                        </div>
                    </div>
                </div>

            </form>
            <!-- //bootstrap-pop-up -->
            <!-- for bootstrap working -->
            <script src="js/bootstrap.js"></script>
            <!-- //for bootstrap working -->
            <!-- start-smoth-scrolling -->
            <script type="text/javascript" src="js/move-top.js"></script>
            <script type="text/javascript" src="js/easing.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    $(".scroll").click(function (event) {
                        event.preventDefault();
                        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                    });
                });
            </script> 
            <!-- start-smoth-scrolling -->
            <!-- here stars scrolling icon -->
            <script>
                function initialize() {
                    // Variabel untuk menyimpan informasi (desc)
                    var infoWindow = new google.maps.InfoWindow; // informasi lokasi atau deskripsi diambil dari database

                    //  Variabel untuk menyimpan peta Roadmap
                    var mapOptions = {
                        zoom: 1,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                // disini Lat long disimpan untuk lokasi jalan
                    }
                    // Pembuatan petanya
                    var panorama = new google.maps.StreetViewPanorama(document.getElementById('pano'), mapOptions);  // mapOptions untuk lokasi log,lat , getElementById('map') 


                    // Pembuatan petanya
                    var map = new google.maps.Map(document.getElementById('map'), mapOptions);  // mapOptions untuk lokasi log,lat , getElementById('map') 
                    // Variabel untuk menyimpan batas kordinat
                    var bounds = new google.maps.LatLngBounds();


                    // Pengambilan data dari database
<?php
$lon = $row[1];
$lat = $row[2];
$saran = $row[3];
$pesan = $row[4];
$foto = $row[6];
$status = $row[9];
$tgl_Lapor = $row[10];
$email = $row[11];
echo ("addMarker($lat, $lon, ' <b><br>Pelapor : $email <br> Tanggal Laporan : $tgl_Lapor <br>Saran : $saran <br>Latitude : $lat</br>Longitude :$lon<br></b>');\n");
?>

                    function addMarker(lat, lng, info) {
                        var lokasi = new google.maps.LatLng(lat, lng);
                        bounds.extend(lokasi);
                        var marker = new google.maps.Marker({
                            map: map,
                            position: lokasi,
                            icon: 'images/Tanda.png',
                            title: 'Posisi Kerusakan jalan',
                            animation: google.maps.Animation.DROP,
                        });
                        map.fitBounds(bounds);
                        bindInfoWindow(marker, map, infoWindow, info);
                    }
                    //
                    //<img src="as.jpg" width="80"/>
                    // <img src="data:image/jpeg;base64,' . base64_encode($row['foto']) . '"/>
                    //<video width="320" height="240" controls><source src="tes.mp4" type="video/mp4"><source src="movie.ogg" type="video/ogg">Browser anda tidak support</video><br>
                    function bindInfoWindow(marker, map, infoWindow, html) {

                        google.maps.event.addListener(marker, 'click', function () {
                            infoWindow.setContent(html);
                            infoWindow.open(map, marker);
                        });
                    }

                }
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf7FALA_C8nQFFy1A8D6NWavSyS_rqIBc&callback=initialize">
            </script>
    </body>
</html>