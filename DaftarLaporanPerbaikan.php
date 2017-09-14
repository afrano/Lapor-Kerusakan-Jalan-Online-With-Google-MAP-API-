<!DOCTYPE html>

<?php
session_start();
include_once 'controller/AkunDAO.php';
include_once 'controller/LaporanDAO.php';
$lap = new LaporanDAO();

$main = new AkunDAO();
if (isset($_SESSION['user'])) {
    if (substr($_SESSION['user'], 0, 1) == 'K') {
        
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
<html lang="en">
    <head>
        <title>Daftar Laporan Perbaikan</title>
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
                                <li class="menu__item"><a href="#" class="menu__link">Daftar Laporan Perbaikan</a></li>
                            </ul>
                            <div class="agileinfo_social_icons" style="color: #fff">

                                <ul class="nav navbar-nav">
                                    <?php
                                    $ID = $_SESSION['user'];
                                    $link = mysqli_connect("localhost", "root", "", "lazarus");
                                    $sql = "SELECT * FROM koordinator WHERE id_koordinator = '$ID'";
                                    $result = mysqli_query($link, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    mysqli_close($link);
                                    echo '<center>' . $row['nama_koordinator'] . '</center>';
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

        <!-- banner-bottom -->

        <div class="container " style="background-color: #7ffcc8; box-shadow: 0px 0px 15px #ccc; ">
            <div class="banner-bottom  " style="height: 200px;margin-left: 10%;margin-right:10% ">
                <div class="grid_3 grid_5 ">

                    <ol class="breadcrumb well" style="margin: 0px; ">
                        <li class="active">[KOORDINATOR] Daftar Laporan Perbaikan</li>

                    </ol>

                </div>

            </div>
            <div class="grid_3 grid_4 w3layouts">

                <div class="" style="background-color: #ddd; padding: 30px;  margin-bottom: 50px; margin-top: 50px; box-shadow: inset 0 0 10px #aaa">
                    <div class="well" style="color: #204d74; text-align: center">
                        <h1>Daftar Data Laporan Perbaikan</h1>
                    </div>
                    <div class="bs-docs-example">

                        <table class="table table-hover" >
                            <thead>
                            <div class="input-group input-group-lg w3_w3layouts">
                                <span class="input-group-addon " id="sizing-addon1"<td> <button class="btn-info" >Search   </button></td></span>
                                <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1">
                            </div>
                            <tr>
                                <th>#</th>
                                <th>ID Laporan</th>
                                <th>ID Jalan</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $a = 1;
                                while ($row = $this->model->fetch($data)) {
                                    if ($row['status_laporan'] == 0) {
                                        $status = 'Laporan Ditolak';
                                    } else if ($row['status_laporan'] == 1) {
                                        $status = 'Laporan Masuk';
                                    } else if (($row['status_laporan'] == 2)) {
                                        $status = 'Proses Pengerjaan';
                                    } else {
                                        $status = 'Pengerjaan Selesai';
                                    }
                                    //lopping baris table
                                    echo "     
                                        
					<tr data-toggle='modal' data-target='#myModal" . $row[0] . "'>     
						<td>" . $a . "</td>
                                                <td>$row[0]</td>
						<td>$row[11]</td>
                                               
                                               
                                        </tr>
                                         
                                        ";
                                    $a = $a + 1;
                                    //loping modal
                                    echo '<div class="modal video-modal fade" id="myModal' . $row[0] . '" tabindex="-1" role="dialog" aria-labelledby="myModal" >
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    

                    <div class="modal-header">
                        Kerjakan?
                        						
                    </div>
                    <section>
                        <div class="modal-body">

                           


                            <div class="" style="background-color: #f0f0f0; padding: 30px; border-radius: 20px">
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1" >Pelapor</span>
                                    <input type="text" class="form-control" placeholder="' . $row['email'] . '" aria-describedby="sizing-addon1" readonly="">
                                </div>
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1" >ID Jalan</span>
                                    <input type="text" class="form-control" placeholder="' . $row[12] . '" aria-describedby="sizing-addon1" readonly="">
                                </div>
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <img src="data:image/jpeg;base64,' . base64_encode($row['foto']) . '" class="img-responsive"/>
                                    <input type="text" style="width: 100%; height: 50px; text-align: center; background-color: #f0f0f0" readonly="" placeholder="' . $row['longitude'] . ',' . $row['latitude'] . '">
                                        
                                </div>
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1"  >Saran Pelapor</span>
                                    <textarea class="input-lg" style="width: 100%; height: 100%" placeholder="' . $row['saran'] . '" readonly=""></textarea>
                                </div>
                                <center>
                                
                                </center>
                            </div>
                        </div>
                    </section>
                    <div class="modal-header"> 
                        <a <button type="button" class="btn-primary col-lg-12" href ="index.php?detailkoor=' . $row[0] . '"  aria-label="Close"><span aria-hidden="true">&check;</span></button></a>
                        <button type="button" class="btn-danger col-lg-12" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                                                </div>
                                            </div>';
                                }
                                ?>
        <!--                                <td><a href='DetailLaporan.php?id=" . $row[0] . "'>Review</a></td>-->

                            </tbody>
                        </table>

                    </div>

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