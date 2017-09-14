<html lang="en">
    <?php
    session_start();

    $log = FALSE;
    if (isset($_SESSION['user'])) {
        $log = TRUE;
    } else {
        
    }
    ?>
    <head>
        <title>Sistem Pelaporan Jalan Rusak Sleman</title>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Karate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

        <!-- //custom-theme -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- //js -->
        <!-- font-awesome-icons -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome-icons -->
        <link href="fonts.googleapis.com/css?family=Shadows+Into+Light+Two&amp;subset=latin-ext" rel="stylesheet">
        <link href="fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

        <!-- akhir dari Bagian js -->
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW_u3PHV3bRsMPlcR3ikqH9NFRfeccLQ8&callback=initMap"
        type="text/javascript"></script>   <!-- Key Api  -->
    </head>
    <body>
        <!-- banner -->
        <div class="" >
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
                        <nav class="menu menu--juliet">
                            <ul class="nav navbar-nav">
                                <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Beranda</a></li>
                                <li class="menu__item"><a href='index.php?tampilLaporan=add' class="menu__link">Lihat Data </a></li>
                                <li class="menu__item"><a href="index.php?input=add" class="menu__link">LAPOR SEKARANG!</a></li>
                            </ul>
                            <div class="agileinfo_social_icons" style="color: #fff">
                                <ul class="nav navbar-nav">
                                    <?php
                                    if ($log == FALSE) {
                                        echo ' <li class="menu__item" style=""><a href="index.php?login=add" class="menu__link">Login</a></li>';
                                    } else {
                                        if (substr($_SESSION['user'], 0, 1) == 'A') {
                                            echo ' <li class="menu__item" style=""><a href="index.php?admin" class="menu__link">Logout</a></li>';
                                        } elseif (substr($_SESSION['user'], 0, 1) == 'K')
                                            echo ' <li class="menu__item" style=""><a href="index.php?koor" class="menu__link">Logout</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </nav>
                <div class="w3layouts_banner1_info">
                    <h2 style="">Services</h2>
                </div>
            </div>
        </div>
        <!-- //banner -->
        <!-- banner-bottom -->
        <div style="height: 300px; background-color: red; position: relative; box-shadow: inset 0px 2px 2px 2px #cccccc " id="map" >
            <div style=" position: absolute; background-color: transparent; top: 10px; left: 10px; z-index: 99;">

            </div>
        </div>
        <div class="" >
            <div class="container">
                <h4  style="text-align: center"> <a href='index.php?input=add'><button  class="btn-success" style="border-radius: 10px; padding: 15px; margin: 10px;font-size: 20px"> Laporkan!</button></a></h4>

            </div>
        </div>
        <!-- //banner-bottom -->
        <!-- stats -->

        <div class="stats" style="background-image: url(images/tugu-jogja.jpg)">
            <div class="container">
                <div class="col-md-3 w3_stats_grid">
                    <h3 id="w3l_stats1" class="odometer">0</h3>
                    <p>Telah Berjalan Selama</p>
                </div>
                <div class="col-md-3 w3_stats_grid">
                    <h3 id="w3l_stats2" class="odometer">0</h3>
                    <p>Laporan Masuk Minggu ini</p>
                </div>
                <div class="col-md-3 w3_stats_grid">
                    <h3 id="w3l_stats3" class="odometer">0</h3>
                    <p>Laporan Tuntas</p>
                </div>
                <div class="col-md-3 w3_stats_grid">
                    <h3 id="w3l_stats4" class="odometer">0</h3>
                    <p>Partisipan</p>
                </div>
                <div class="clearfix"> </div>
                <!-- odometer-script -->

                <!-- disini untuk nilai -->
                <script src="js/odometer.js"></script>
                <script>
                    window.odometerOptions = {
                        format: '(,ddd).dd'
                    };
                    setTimeout(function () {
                        jQuery('#w3l_stats1').html(25);
                    }, 1000);
                </script>
                <script>
                    window.odometerOptions = {
                        format: '(,ddd).dd'
                    };
                    setTimeout(function () {
                        jQuery('#w3l_stats2').html(330);
                    }, 1000);
                </script>
                <script>
                    window.odometerOptions = {
                        format: '(,ddd).dd'
                    };
                    setTimeout(function () {
                        jQuery('#w3l_stats3').html(22496);
                    }, 1000);
                </script>
                <script>
                    window.odometerOptions = {
                        format: '(,ddd).dd'
                    };
                    setTimeout(function () {
                        jQuery('#w3l_stats4').html(620);
                    }, 1000);
                </script>
                <!-- disini untuk nilai -->

                <!-- //odometer-script -->
            </div>
        </div>
        <!-- //stats -->
        <!-- featured-services -->
        <div class="banner-bottom " id="about">
            <div class="container">
                <h3 class="agileits_head">Pelayanan Kami</h3>
                <p class="w3layouts_para">Lazarus</p>
                <div class="w3ls_service_grids">
                    <div class="col-md-4 w3_agile_services_grid">
                        <div class="agile_services_grid" >
                            <div class="hover06 column">
                                <div>
                                    <figure><img src="images/jalan4.jpg" alt=" " class="img-responsive" /></figure>
                                </div>
                            </div>
                            <div class="agile_services_grid_pos">
                                <i class="fa fa-cubes" aria-hidden="true"></i>
                            </div>
                        </div>
                        <h4>Ada Lubang di Jalan?</h4>
                        <p>Sering melewati jalan rusak di sekitar lingkungan anda? atau prihatin dengan kondisi jalan disekitar anda?</p>
                    </div>
                    <div class="col-md-4 w3_agile_services_grid">
                        <div class="agile_services_grid">
                            <div class="hover06 column">
                                <div>
                                    <figure><img src="images/handphone_smartphone.jpg" alt=" " class="img-responsive" /></figure>
                                </div>
                            </div>
                            <div class="agile_services_grid_pos">
                                <i class="fa fa-line-chart" aria-hidden="true"></i>
                            </div>
                        </div>
                        <h4>Foto Lubangnya! Gunakan Aplikasi Kami</h4>
                        <p>dengan menggunakan aplikasi kami yang berbasis web dan android, cepat dan efisien membuat anda tidak usah membuang waktu lama untuk melaporkan jalan rusak.</p>
                    </div>
                    <div class="col-md-4 w3_agile_services_grid">
                        <div class="agile_services_grid">
                            <div class="hover06 column">
                                <div>
                                    <figure><img src="images/202177_620.jpg" alt=" " class="img-responsive" /></figure>
                                </div>
                            </div>
                            <div class="agile_services_grid_pos">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </div>
                        </div>
                        <h4>Laporan Anda akan Kami Respon Secepatnya :)</h4>
                        <p>ini adalah bentuk kepedulian kami terhadap fasilitas umum, mari kita bersama membangun masyarakat yang kritis dan cinta lingkungan</p>
                    </div>

                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        Karate
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <section>
                        <div class="modal-body">
                            <img src="images/4.jpg" alt=" " class="img-responsive" />
                            <p>Ut enim ad minima veniam, quis nostrum 
                                exercitationem ullam corporis suscipit laboriosam, 
                                nisi ut aliquid ex ea commodi consequatur? Quis autem 
                                vel eum iure reprehenderit qui in ea voluptate velit 
                                esse quam nihil molestiae consequatur, vel illum qui 
                                dolorem eum fugiat quo voluptas nulla pariatur.
                                <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
                                    esse quam nihil molestiae consequatur.</i></p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
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

        <script>
            function initialize() {
                // Variabel untuk menyimpan informasi (desc)
                var infoWindow = new google.maps.InfoWindow; // informasi lokasi atau deskripsi diambil dari database

                //  Variabel untuk menyimpan peta Roadmap
                var mapOptions = {
                    mapTypeId: google.maps.MapTypeId.ROADMAP // disini Lat long disimpan untuk lokasi jalan
                }

                // Pembuatan petanya
                var map = new google.maps.Map(document.getElementById('map'), mapOptions);  // mapOptions untuk lokasi log,lat , getElementById('map') 
                // Variabel untuk menyimpan batas kordinat
                var bounds = new google.maps.LatLngBounds();
                // Pengambilan data dari database
<?php
include_once 'controller/LaporanDAO.php';
$detail = new LaporanDAO();
$data1 = $detail->Home();
while ($row = $this->model->fetch($data1)) {
    $id_La = $row[0];
    $lat = $row[2];
    $lon = $row[1];
    $email = $row[10];
    $tanggal = $row[9];
    echo ("addMarker($lat, $lon, '<b>Pelapor : $email <br><b>Tanggal Laporan : $tanggal <br>Latitude : $lat</br>Longitude :$lon<br> ');\n");
}
?>
                function addMarker(lat, lng, info, id) {
                    var lokasi = new google.maps.LatLng(lat, lng);
                    bounds.extend(lokasi);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: lokasi,
                        icon: 'images/Tanda.png',
                        animation: google.maps.Animation.DROP,
                    });
                    map.fitBounds(bounds);
                    bindInfoWindow(marker, map, infoWindow, info, id);
                }
                function bindInfoWindow(marker, map, infoWindow, html, id) {
                    google.maps.event.addListener(marker, 'click', function () {
                        infoWindow.setContent(html);
                        infoWindow.open(map, marker);
                        Pelapor.value = id;
                    });
                }
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body >
</html>