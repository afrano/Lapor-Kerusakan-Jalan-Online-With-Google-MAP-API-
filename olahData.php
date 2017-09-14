<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include_once 'controller/AkunDAO.php';
    include_once 'controller/LaporanDAO.php';
    $lap = new LaporanDAO();

    $main = new AkunDAO();
    if (isset($_SESSION['user'])) {
        if (substr($_SESSION['user'], 0, 1) == 'A') {
            
        } else {
            header("location: index.php");
        }
    } else {
        header("location: index.php");
        echo 'anda belum login';
    }
    //buat logout
    if (isset($_POST['logout'])) {
        //  echo 'tes';
        $main->logout();
    }
    ?>
    <head>
        <title>Olah Data</title>
        <!-- custom-theme -->
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

        </style>
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

                                <li class="menu__item menu__item--current"><a href="#" class="menu__link">Olah Data</a></li>
                                <li class="menu__item "><a href="index.php?rekap" class="menu__link">Rekap. Data</a></li>

                            </ul>
                            <div class="agileinfo_social_icons" style="color: #fff">

                                <ul class="nav navbar-nav">
                                    <?php
                                    $ID = $_SESSION['user'];
                                    $link = mysqli_connect("localhost", "root", "", "lazarus");
                                    $sql = "SELECT * FROM admin WHERE id_admin = '$ID'";
                                    $result = mysqli_query($link, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    mysqli_close($link);
                                    echo '<center>' . $row['nama_admin'] . '</center>';
                                    ?>                 

                                    <form method="post" action="">  
                                        <li class="menu__item" style="">
                                            <button class="btn btn-warning" name='logout' value='logout' ">Logout</button>
                                        </li>
                                    </form>
                                </ul>

                            </div>

                        </nav>
                    </div>
                </nav>

            </div>
        </div>
        <!-- //banner -->

        <!-- banner-bottom -->; 

        <div class="container " style="background-color: #7ffcc8; box-shadow: 0px 0px 15px #ccc; ">
            <div class="banner-bottom  " style="height: 200px;margin-left: 10%;margin-right:10% ">
                <div class="grid_3 grid_5 ">

                    <ol class="breadcrumb well" style="margin: 0px; ">
                        <li class="active">[ADMIN] Olah Data</li>

                    </ol>

                </div>

            </div>
            <div class="" style="background-color: #ffcccc; padding: 30px;  margin-bottom: 50px; margin-top: 10px; box-shadow: inset 0 0 10px #aaa">
                <div class="well" style="color: #fff; text-align: center; background-color: #ff9999; border: #ff6666">
                    <h1>Daftar Laporan Perbaikan Jalan belum Terverifikasi </h1>
                </div>
                <form>
                    <div class="bs-docs-example">
                        <div style="overflow-x:auto;">
                            <table class="table table-hover" >
                                <thead>
                                <div class="input-group input-group-lg w3_w3layouts" style="width: 100%">
                                    <center>
                                        <input type="text"   placeholder="" aria-describedby="sizing-addon1" style="display: inline-block; padding-right: 60px; width: 90%;background-color: #ff9999; border-top-left-radius: 5px; border-bottom-left-radius: 5px; font-size: 16px; height: 35px">
                                        <input type="submit" class="btn btn-danger" value="Search" style="display: inline-block;margin-left: -50px; border-radius: 0px; height: 35px; padding-left: 30px; padding-right: 30px">   
                                    </center>
                                </div>
                                <tr>

                                    <th>ID Laporan</th>
                                    <th>ID Jalan</th>
                                    <th>Tanggal Laporan</th>
                                    <th>Pengirim</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $data = $lap->tampilBelumTerverifikasi();
                                    while ($row = $this->model->fetch($data)) {
//                                              if ($row[9] == 0) {
//                                            $status = 'Laporan Ditolak';
//                                        } else if ($row[9] == 1) {
//                                            $status = 'Laporan Masuk';
//                                        } else if (($row[9] == 2)) {
//                                            $status = 'Proses Pengerjaan';
//                                        } else {
//                                            $status = 'Pengerjaan Selesai';
//                                        }
                                        echo "                                            
					<tr>    
                                        <td>" . $row["id_laporan"] . "</td>  
					<td>" . $row["id_jalan"] . "</td>  	
                                        <td>" . $row["tgl_laporan"] . "</td>  	 	
                                        <td>" . $row["email"] . "</td>      
                                        <td><a class='btn btn-danger ' href='index.php?olah=" . $row["id_laporan"] . "'>Review</a></td>  
                                        </tr>
                                    ";
                                    }
                                    ?>
    <!--                                <td><a href='DetailLaporan.php?id=" . $row[0] . "'>Review</a></td>-->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <div class="grid_3 grid_4 w3layouts">

                <div class="" style="background-color: #f0f0f0; padding: 30px;  margin-bottom: 50px; margin-top: 10px; box-shadow:         inset 0 0 10px #aaa">
                    <div class="well" style="color: #204d74; text-align: center">
                        <h1>Daftar Laporan Perbaikan Jalan Terverifikasi </h1>
                    </div>
                    <form action="">
                        <div class="bs-docs-example">
                            <div style="overflow-x:auto;">
                                <table class="table table-hover">
                                    <thead>
                                    <div class="input-group input-group-lg w3_w3layouts" style="width: 100%">
                                        <center><input type="text"   placeholder="" aria-describedby="sizing-addon1" style="display: inline-block; padding-right: 60px; width: 90%; border-top-left-radius: 5px; border-bottom-left-radius: 5px; font-size: 16px; height: 35px">
                                            <input type="submit" class="btn btn-info" value="Search" style="display: inline-block;margin-left: -50px; border-radius: 0px; height: 35px; padding-left: 30px; padding-right: 30px; ">   
                                        </center>
                                    </div>
                                    <tr>
                                        <th>ID Laporan</th>
                                        <th>ID Jalan</th>

                                        <th>Tgl_verifikasi</th>
                                        <th>Penanggung_jawab</th>
                                    </tr>
                                    </thead>                                    <tbody> 
                                    <div class = "input-group input-group-lg w3_w3layouts">    
                                        <?php
                                        $data1 = $lap->tampilTerverifikasi();
                                        if ($data1 === FALSE) {
                                            die(mysql_error());
                                        }
                                        while ($row = $this->model->fetch($data1)) {
//                                            if ($row[9] == 0) {
//                                                $status = 'Laporan Ditolak';
//                                            } else if ($row[9] == 1) {
//                                                $status = 'Laporan Masuk';
//                                            } else if (($row[9] == 2)) {
//                                                $status = 'Proses Pengerjaan';
//                                            } else {
//                                                $status = 'Pengerjaan Selesai';
//                                            }
                                            //lopping baris table
                                            echo "                                            
					<tr data-toggle='modal' data-target='#myModal" . $row['id_laporan'] . "'>    
                                        <td>" . $row["id_laporan"] . "</td>  
					<td>" . $row["id_jalan"] . "</td>  	
                                        <td>" . $row["tgl_verifikasi"] . "</td>  
                                        <td>" . $row["id_admin"] . "</td>  	
                                      
                                    </tr>
                                        ";
                                            //loping modal
                                            echo '<div class="modal video-modal fade" id="myModal' . $row['id_laporan'] . '" tabindex="-1" role="dialog" aria-labelledby="myModal" >
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                    <div class="modal-header">
                        Data Laporan
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <section>
                        <div class="modal-body">
                            <div class="" style="background-color: #f0f0f0; padding: 30px; border-radius: 20px">
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1" >ID Laporan</span>
                                    <input type="text" class="form-control" placeholder="' . $row['id_laporan'] . '" aria-describedby="sizing-addon1" readonly="">
                                </div>
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1" >ID Jalan</span>
                                    <input type="text" class="form-control" placeholder="' . $row['id_jalan'] . '" aria-describedby="sizing-addon1" readonly="">
                                </div>
                               <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1" >Tanggal Verifikasi</span>
                                    <input type="text" class="form-control" placeholder="' . $row['tgl_verifikasi'] . '" aria-describedby="sizing-addon1" readonly="">
                                </div>
                                      <div class="input-group input-group-lg w3_w3layouts">
                                    <img src="data:image/jpeg;base64,' . base64_encode($row['foto']) . '" class="img-responsive"/>
                                    <input type="text" style="width: 100%; height: 50px; text-align: center; background-color: #f0f0f0" readonly="" placeholder="' . $row['longitude'] . ',' . $row['latitude'] . '">
                                        
                                </div>
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1" >Nama Admin</span>
                                                   
<input type="text" class="form-control" placeholder="' . $row['nama_admin'] . '" aria-describedby="sizing-addon1" readonly="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                                                </div>
                                            </div>';
                                        }
                                        ?>

                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>



            </div>
            <div class="" >
                <div class="container">


                </div>
            </div>

            <!-- bootstrap-pop-up -->
            <div class="footer">
                <div class="container">



                    <div class="clearfix"> </div>
                    <div class="w3_agileits_footer_grids">
                        <div class="col-md-4 wthree_footer_grid_left">
                        </div>

                        <form action="#" method="post">


                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>


        <!-- //footer -->
        <!-- bootstrap-pop-up -->
        <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        Data Laporan
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <section>
                        <div class="modal-body">

                            <div class="" style="background-color: #f0f0f0; padding: 30px; border-radius: 20px">
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1" >-----Email-----</span>
                                    <input type="text" class="form-control" placeholder="bagassabrangsagara@mail.com" aria-describedby="sizing-addon1" readonly="">
                                </div>

                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1" >-No. Telepon-</span>
                                    <input type="text" class="form-control" placeholder="081215656309" aria-describedby="sizing-addon1" readonly="">
                                </div>
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1" >-Nama Jalan-</span>
                                    <input type="text" class="form-control" placeholder="Jl. KRT Pringgodiningrat" aria-describedby="sizing-addon1" readonly="">
                                </div>
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1"  >---Gambar---</span>
                                    <img src="images/jalan-rusak.jpg" alt=" " class="img-responsive" /> 
                                    <input type="text" style="width: 100%; height: 50px; text-align: center; background-color: #f0f0f0" readonly="" placeholder="-7.721753, 110.360136">


                                </div>
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1"  >---Saran----</span>
                                    <textarea class="input-lg" style="width: 100%; height: 100%" placeholder="Tolong diperbaiki secepatnya pak" readonly=""></textarea>
                                </div>
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
        <script type="text/javascript">
            function myMap() {
                var mapCanvas = document.getElementById("map");
                var mapOptions = {
                    center: new google.maps.LatLng(-7.691416, 110.343595),
                    zoom: 15
                };
                var map = new google.maps.Map(mapCanvas, mapOptions);
            }
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf7FALA_C8nQFFy1A8D6NWavSyS_rqIBc&callback=myMap"></script>
        <!-- //here ends scrolling icon -->
    </body>
</html>