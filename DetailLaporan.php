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
                    <nav class="menu menu--juliet">
                        <ul class="nav navbar-nav">
                            <li class="menu__item menu__item--current"><a href="index.php?admin" class="menu__link">Olah Data</a></li>
<!--                            <li class="menu__item "><a href="#" class="menu__link">Rekap. Data</a></li>-->

                        </ul>
                        <div class="agileinfo_social_icons">
<!--
                            <li class="nav menu__item">
                                <a href="Login.php" class=" menu__link" data-toggle="dropdown">LOGOUT <b class="caret"></b></a>

                            </li>-->
                        </div>
                    </nav>
                </div>
            </nav>

        </div>


        <div class="banner-bottom  " style="height: 200px;margin-left: 10%;margin-right:10% ">
            <div class="grid_3 grid_5 ">

                <ol class="breadcrumb well" style="margin: 0px; ">
                    <li class="active"><a href="index.php?admin"><-- Kembali</a></li>
                    <li class="active">Detail Laporan</li>
                </ol>

            </div>

        </div>
        <div  class=" w3layouts well" style="margin-left: 10%;margin-right: 10%;height: 1400px">

            <div class="well" style="text-align: center"><b>Detail Laporan</b></div>
            <form method="post" action=""> 
                <div  class="grid_5" style="margin-left: 1%; margin-right: 1% ; background-color: #fff">
                    <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                        <span class='input-group-addon' id='sizing-addon1' >Tanggal Verifikasi</span>                        
                        <?php
                        $tgl_Verifikasi = date('d/m/Y');
                        echo " <input type='text' id='tgl_Verifikasi' name='tgl_Verifikasi'  value='" . $tgl_Verifikasi . "' class='form-control' aria-describedby='sizing-addon1' >                    
                    </div> ";
                        ?>
                        <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                            <span class='input-group-addon' id='sizing-addon1' >ID Laporan</span>
                            <input type="text"  id="id_laporan" name="id_laporan" value="<?= $row['id_laporan'] ?>" class='form-control' aria-describedby='sizing-addon1' >             
                        </div>

                        <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                            <span class='input-group-addon' id='sizing-addon1' >Pelapor</span>
                            <input type="text"  id="email" name="email" value="<?= $row['email'] ?>" class='form-control' aria-describedby='sizing-addon1' >     
                            <input type="text"  hidden="" id="nomor_hp" name="nomor_hp" value="<?= $row['nomor_hp'] ?>" >      
                        </div>
                        <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                            <span class='input-group-addon' id='sizing-addon1' >Nama Jalan</span>
                            <input type='text' id='Longitude'value="<?= $row['nama_jalan'] ?>" name="nama_jalan" class='form-control' aria-describedby='sizing-addon1' >                    
                        </div> 
                        <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                            <span class='input-group-addon' id='sizing-addon1' >Longitude</span>
                            <input type='text' id='Longitude'value="<?= $row['longitude'] ?>" name="Longitude" class='form-control' aria-describedby='sizing-addon1' >                    
                        </div> 
                        <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                            <span class='input-group-addon' id='sizing-addon1' >Latitude</span>
                            <input type='text'  id='Latitude'value="<?= $row['latitude'] ?>" name="Latitude" class='form-control' aria-describedby='sizing-addon1' >                    
                        </div>
                        <div class='input-group input-group-lg w3_w3layouts' style='padding-left: 10%;padding-right: 10%'>
                            <span class='input-group-addon' id='sizing-addon1' >Saran</span>
                            <input type="text" name="saran" value="<?= $row['saran'] ?>"id="saran" class='form-control' aria-describedby='sizing-addon1' >                    
                        </div> 

                    </div>
                    <div  class="grid_5" style="margin-left: 1%; margin-right: 1%;height: 1000px ; background-color: #fff" >
                        <div class="well" style="text-align: center; background-color: #ccffff;margin-left: 5%;margin-right: 5%;">Lokasi dan Foto Jalan.
                            Pindahkan Simbol Pano Kuning ke Penanda Jalan</div>
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
                            echo '<div style="float: right; height: 410px;width: 400px;display: inline-block;"> <img src="data:image/jpeg;base64,' . base64_encode($row['foto']) . '" width="405" height="405"/> </div> ';
                            ?>
                        </div>

                        <div class="wthree_footer_grid_right">
                            <div class="">
                                <center>
                                    <table style="width: 60% ; background-color: #fff">
                                        <tr>
                                            <!--a href="#" data-toggle="modal" data-target="#1"
                                            <a href="#" data-toggle="modal" data-target="#2"-->
                                            <td><button class="btn-success" type="submit" name="konfirmasi" value="konfirmasi" style="width: 100%;height: 100px; background-color: #00ff66;font-size: 25px">Terima</button></td>
                                            <td><button class="btn-warning" type="submit"  name="tolak" value="tolak" style="width: 100%;height: 100px;font-size: 25px">Tolak</button></td>
                                        </tr>
                                    </table>
                                </center> 
                            </div>
                        </div>
                    </div>
                </div>

            </form>



            <div class="footer">
                <div class="container">
                    <div class="clearfix"> </div>
                    <div class="w3_agileits_footer_grids">
                        <div class="col-md-4 wthree_footer_grid_left">
                        </div>
                        <!--   <form action="#" method="post">
                  </form>footer -->
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>


            <!-- bootstrap-pop-up -->
            <div class="modal video-modal fade" id="1" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <div class="fa fa-warning"></div>
                            Verifikasi Laporan
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="" style="background-color: #f0f0f0; padding: 30px; ">
                                    <CENTER><h3>anda yakin untuk MENERIMA laporan ini?</h3></CENTER>
                                    <center>
                                        <table style="width: 60% ; margin: 10px ">
                                            <tr>
                                                <td><button class="btn-success" type="submit" name="status" value="Terima" style="width: 80%;height: 50px; background-color: #00ff66;font-size: 25px" > <DIV class="fa fa-check"></DIV>SETUJU </button></td>
                                                <td><button class="btn-warning" data-dismiss="modal" value="Tolak" style="width: 80%;height: 50px;font-size: 25px"><DIV class="fa fa-times"></DIV>BATAL</button></td>
                                            </tr>
                                        </table>
                                    </center> 
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="modal video-modal fade" id="2" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <div class="fa fa-warning"></div>
                            Verifikasi Laporan
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="" style="background-color: #f0f0f0; padding: 30px; ">
                                    <CENTER><h3>anda yakin untuk MENOLAK laporan ini?</h3></CENTER>
                                    <center>
                                        <table style="width: 60% ; margin: 10px ">
                                            <tr>
                                                <td><button class="btn-success" id="konfirmasi" value="Terima" style="width: 80%;height: 50px; background-color: #00ff66;font-size: 25px" > <DIV class="fa fa-check"></DIV>SETUJU </button></td>
                                                <td><button class="btn-warning" data-dismiss="modal" value="Tolak" style="width: 80%;height: 50px;font-size: 25px"><DIV class="fa fa-times"></DIV>BATAL</button></td>
            <!--                                    <TD><button type="button" class="btn-warning" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	</TD>-->
                                            </tr>
                                        </table>
                                    </center> 
                                </div>
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
            <!-- start-smoth-scrolling -->
            <!-- here stars scrolling icon -->
            <script>
                function initialize() {
                    // Variabel untuk menyimpan informasi (desc)
                    var infoWindow = new google.maps.InfoWindow; // informasi lokasi atau deskripsi diambil dari database

                    //  Variabel untuk menyimpan peta Roadmap
                    var mapOptions = {
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
            <?php
            if (isset($_POST['konfirmasi'])) { //jika button submit diklik maka panggil fungsi update pada controller
                $main = new LaporanDAO();
                $main->Konfirmasi();
            } else if (isset($_POST['tolak'])) { //jika button submit diklik maka panggil fungsi update pada controller
                $main = new LaporanDAO();
                $main->TolakLaporan();
            }
            ?>
    </body>
</html>