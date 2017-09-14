<!DOCTYPE html>

  <?php
    session_start();
    include_once 'controller/AkunDAO.php';
    include_once 'controller/LaporanDAO.php';
    $lap = new LaporanDAO();
$rekap = new LaporanDAO();
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
<html lang="en">
    <head>
        <title>Rekapitulasi Kondisi Jalan</title>
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

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Shadows+Into+Light+Two&amp;subset=latin-ext" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
        <style>
            #per{
                background-color: inherit;
                width: 120px;
            }.w3-modal{
                background-color: rgba(0,0,0,1);
            }
        </style>
    </head>

    <body onload="rekap()">
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
                                <li class="menu__item"><a href="index.php?admin" class="menu__link">Olah Data</a></li>

                                <li class="dropdown menu__item menu__item--current">
                                    <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Rekap. Data <b class="caret"></b></a>
                                    <ul class="dropdown-menu agile_short_dropdown">
                                        <li><a href="index.php?rekap=kondisi">Rekap. Kondisi Jalan</a></li>
                                        <li><a href="index.php?rekap=durasi">Rekap. Durasi Kerja</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="agileinfo_social_icons">

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

        <div class="banner-bottom  " style="height: 200px;margin-left: 10%;margin-right:10% ">
            <div class="grid_3 grid_5 ">

                <ol class="breadcrumb well" style="margin: 0px; ">
                    <li class="active"><a href="#">[ADMIN] Olah Data</a></li>
                    <li class="active">Rekap Data</li>

                </ol>

            </div>

        </div>
        <!-- banner-bottom -->
        <div class="container" id="1" style="display: none">
            <div class="well" style="margin-top: 10px">
                <div class="grid_3 grid_4 w3layouts">
                    <form>
                        <div class="" style="background-color: #f0f0f0; padding: 30px; border-radius: 20px;  margin-bottom: 50px; margin-top: 10px">
                            <div class="well" style="color: #204d74; text-align: center">

                                <div class="" style="float: right;">
                                    <ul class=" well-sm" style="">
                                        <div class="w3-dropdown-hover w3-right">
                                            <button id="per" class="w3-button" ></button>
                                            <div class="w3-dropdown-content w3-bar-block w3-border w3-tiny" name="ul" style="right:0">
                                                <?php
                                                while ($row1 = mysqli_fetch_array($data1)) {

                                                    echo '<a name="' . $row1[0] . '" data-input="' . $row1[0] . '"  href="" class="w3-bar-item  w3-button">' . $row1[0] . '</a>';
                                                }
                                                ?>

                                            </div>
                                        </div>





                                    </ul>
                                </div>
                                <h1>Rekapitulasi Durasi Pengerjaan</h1>

                            </div>

                            <div class="bs-docs-example">
                                <table class="table table-hover">
                                    <thead>

                                        <tr>
                                            <th>#</th>
                                            <th>ID Jalan</th>
                                            <th>Nama_Jalan</th>
                                            <th>Durasi tgl_masuk s/d verifikasi</th>
                                            <th>Durasi verifikasi s/d perbaikan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num2 = 1;
                                        $sum = 0;
                                        $sum2 = 0;
                                        while ($row2 = mysqli_fetch_array($data2)) {
                                            echo '<tr>';
                                            echo '<td>' . $num2 . '</td>';
                                            echo '<td>' . $row2[0] . '</td>';
                                            echo '<td>' . $row2[1] . '</td>';
                                            echo '<td>' . $row2[2] . '</td>';
                                            $sum = $sum + $row2[2];
                                            echo '<td>' . $row2[3] . '</td>';
                                            $sum2 = $sum2 + $row2[3];
                                            echo '</tr>';
                                            $num2 = $num2 + 1;
                                        }
                                        ?>


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </form>
                    <div class="grid_3 grid_5 wthree">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="background-color: #2b6682 ;color: white" >Rekapitulasi Durasi Jalan</th>
                                    <th style="background-color: #2b6682;color: white">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $N = 0;
                                while ($row3 = mysqli_fetch_array($data3)) {
                                    $N = $row3[0];
                                }
                                $tolak = 0;
                                while ($row4 = mysqli_fetch_array($data4)) {
                                    $tolak = $row4[0];
                                }
                                ?>
                                <tr>
                                    <td><code>Laporan Diterima</code></td>
                                    <td><span class="badge badge-primary"><?php echo $N; ?></span></td>
                                </tr>
                                <tr>
                                    <td><code>Laporan Ditolak</code></td>
                                    <td><span class="badge badge-primary"><?php echo $tolak; ?></span></td>
                                </tr>
                                <tr>
                                    <td><code>Rata-rata Durasi Pemverifikasi</code></td>
                                    <td><span class="badge badge-success"><?php echo $sum / $N; ?> Hari</span></td>
                                </tr>
                                <tr>
                                    <td><code>Rata-rata Durasi Perbaikan</code></td>
                                    <td><span class="badge badge-info"><?php echo $sum2 / $N; ?> Hari</span></td>
                                </tr>

                            </tbody>
                        </table>                    
                    </div>
                    <div class="" >
                        <div class="container">


                        </div>
                    </div>



                </div>

                <div class="grid_3 grid_4 w3layouts">



                    <div class="bs-docs-example">

                    </div>



                </div>
            </div>
        </div>
        <div class="container" id="2" style="display: none">
            <div class="well" style="margin-top: 10px">
                <div class="grid_3 grid_4 w3layouts">

                    <div class="" style="background-color: #f0f0f0; padding: 30px; border-radius: 20px;  margin-bottom: 50px; margin-top: 10px">
                        <div class="well" style="color: #204d74; text-align: center">

                            <div class="" style="float: right;">
                                <ul class=" well-sm" style="">
                                    <div class="w3-dropdown-hover w3-right">
                                        <button id="per2" class="w3-button " ></button>
                                        <div class="w3-dropdown-content w3-bar-block w3-border w3-tiny " name="ul2" style="right:0">
                                            <?php
                                            for ($i = 0; $i < count($data5) + 1; $i++) {
                                                if (isset($data5[$i])) {

                                                    echo '<a href="index.php?rekap=kondisi&periode=' . $data5[$i] . '"><li style="list-style: none" name="' . $data5[$i] . '" data-input="' . $data5[$i] . '">' . $data5[$i] . '</li></a>';
                                                } else {
                                                    
                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <h1>Rekapitulasi Kondisi Jalan  </h1>
                        </div>
                        <div class="bs-docs-example">
                            <table class="table table-hover">
                                <!--                                        table table-hover-->
                                <thead>
                                    <tr>
                                        <th rowspan="2">#</th>
                                        <th rowspan="2">ID Jalan</th>
                                        <th rowspan="2">Nama Jalan</th>
                                        <th rowspan="2">Luas Kerusakan m2 </th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $baik = array();
                                    $sedang = array();
                                    $rusak = array();
                                    $parah = array();
                                    for ($i = 0; $i < count($data6); $i++) {
                                        while ($row6 = mysqli_fetch_array($data6[$i])) {
                                            echo '<tr>';
                                            echo '<td>1</td>';
                                            echo '<td>' . $row6[0] . '</td>';
                                            echo '<td>' . $row6[1] . '</td>';

                                            if ($row6[2] == "") {
                                                $row6[2] = 0;

                                                echo '<td>' . $row6[2] . '</td>';
                                                $baik[] = $row6[2];
                                            } elseif ($row6[2] > 0 && $row6[2] <= 300) {
                                                $sedang[] = $row6[2];
                                                echo '<td>' . $row6[2] . '</td>';
                                            } elseif ($row6[2] > 300 && $row6[2] <= 500) {
                                                $rusak[] = $row6[2];
                                                 echo '<td>' . $row6[2] . '</td>';
                                            } elseif ($row6[2] > 500 && $row6[2] <= 1000) {
                                                $parah[] = $row6[2];
                                                 echo '<td>' . $row6[2] . '</td>';
                                            } else {
                                                echo '<td>' . $row6[2] . '</td>';
                                            }
                                            echo '</tr>';
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

                <div class="grid_3 grid_4 w3layouts">


                    <div class="grid_3 grid_5 wthree">

                        <div class="col-md-6 agileits-w3layouts" style="width: 100%">
                            <center><h4><b>Kesimpulan Kondisi</b></h4></center>
                            <table class="table table-bordered" >
                                <thead>
                                    <tr style="background-color: #2b6682; ">
                                        <th style="color: white">Tingkat Kerusakan</th>
                                        <th style="color: white">Jumlah Jalan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><code>Baik</code></td>
                                        <td><span class="badge"><?php echo count($baik) ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><code>Sedang</code></td>
                                        <td><span class="badge badge-primary"><?php echo count($sedang) ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><code>Rusak</code></td>
                                        <td><span class="badge badge-success"><?php echo count($rusak) ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><code>Parah</code></td>
                                        <td><span class="badge badge-info"><?php echo count($parah) ?></span></td>
                                    </tr>
                                    <tr style="background-color: #0accff">
                                        <td><center><b style="color: #000">Total</b></center></td>
                            <td><span class="badge badge-info"><?php echo count($baik)+count($sedang)+count($rusak)+count($parah) ?></span></td>
                             
            </tr>

                                </tbody>
                            </table>   


                        </div>

                        <div class="clearfix"> </div>
                    </div>	 
                    <div class="bs-docs-example">

                    </div>



                </div>
            </div>
        </div>
        <div class="" >
            <div class="container">


            </div>
        </div>
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-animate-top w3-card-4">
                <header class="w3-container w3-indigo"> 
                    
                    <center><h2>Masukan Periode Rekap Durasi Pengerjaan</h2></center>
                </header>
                <div class="w3-container" style="padding: 0px">
                    <ul class="w3-ul w3-hoverable w3-center">
                        <?php
                        while ($rowx = mysqli_fetch_array($data)) {
                            echo '<a href="index.php?rekap=durasi&periode=' . $rowx[0] . '"><li name="' . $rowx[0] . '" data-input="' . $rowx[0] . '">' . $rowx[0] . '</li></a>';
                        }
                        ?>

                    </ul>
                </div>
                <footer class="w3-container w3-indigo w3-center">
                    <p> Rekap Durasi Pengerjaan</p>
                </footer>
            </div>
        </div>
        <div id="id02" class="w3-modal">
            <div class="w3-modal-content w3-animate-top w3-card-4">
                <header class="w3-container w3-indigo"> 
                    
                    <center><h2>Pilih Periode Rekap <b>Kondisi Jalan</b></h2></center>
                </header>
                <div class="w3-container" style="padding: 0px">
                    <ul class="w3-ul w3-hoverable w3-center">
                        <?php
                        for ($i = 0; $i < count($data5) + 1; $i++) {
                            if (isset($data5[$i])) {

                                echo '<a href="index.php?rekap=kondisi&periode=' . $data5[$i] . '"><li name="' . $data5[$i] . '" data-input="' . $data5[$i] . '">' . $data5[$i] . '</li></a>';
                            } else {
                                
                            }
                        }
                        ?>
                    </ul>
                </div>
                <footer class="w3-container w3-indigo w3-center">
                    <p></p>
                </footer>
            </div>
        </div>
        <div id="id03" class="w3-modal">
            <div class="w3-modal-content w3-animate-top w3-card-4">
                <header class="w3-container w3-indigo"> 
                    
                    <center><h2>Pilih Jenis Rekapitulasi Data</h2></center>
                </header>
                <div class="w3-container" style="padding: 0px">
                    <ul class="w3-ul w3-hoverable w3-center">
                        <a href="index.php?rekap=durasi"><li>Rekap. Durasi Pengerjaan </li></a>
                        <a href="index.php?rekap=kondisi"><li>Rekap. Kondisi Jalan</li></a>

                    </ul>
                </div>
                <footer class="w3-container w3-indigo w3-center">
                    <p></p>
                </footer>
            </div>
        </div>
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

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf7FALA_C8nQFFy1A8D6NWavSyS_rqIBc&callback=myMap"></script>
        <script>
                        var self = this;
                        function myFunctiona() {
                            var x = document.getElementById('1');
                            var y = document.getElementById('2');
                            if (x.style.display === 'none') {
                                x.style.display = 'block';
                                y.style.display = 'none';
                            } else {
                                x.style.display = 'none';
                            }
                        }
                        function myFunctionb() {
                            var url_string = window.location.href;
                            var url = new URL(url_string);
                            var c = url.searchParams.get("c");
                            var x = document.getElementById('2');
                            var y = document.getElementById('1');
                            if (x.style.display === 'none') {
                                x.style.display = 'block';
                                y.style.display = 'none';
                            } else {
                                x.style.display = 'none';
                            }
                        }
                        function rekap() {
                            var url_string = window.location.href;
                            var url = new URL(url_string);
                            var v = document.getElementById("per");
                            var v2 = document.getElementById("per2");
                            var c = url.searchParams.get("rekap");
                            var d = url.searchParams.get("periode");
                            var x = document.getElementById('2');
                            var y = document.getElementById('1');

                            if (c === "durasi") {
                                y.style.display = 'block';
                                x.style.display = 'none';
                                if (d === null) {
                                    document.getElementById('id01').style.display = 'block';
                                    v.innerHTML = document.getElementsByName('ul')[0].children[0].innerHTML;
                                } else {

                                    v.innerText = d;
                                }


                            } else if (c === "kondisi") {
//                                alert('masuk kondisi');
                                if (d === null) {

                                    document.getElementById('id02').style.display = 'block';
                                    var str = document.getElementsByName('ul2')[0].children[0].innerHTML;
                                    v2.innerHTML = str.substring(9);
//                                    alert('masuk kondisi 1');
                                } else {

                                    x.style.display = 'block';
                                    y.style.display = 'none';

                                    var str = document.getElementsByName('ul2')[0].children[0].innerHTML;
                                    v2.innerText = d;


                                }
                                x.style.display = 'block';
                                y.style.display = 'none';
                            } else {
                                document.getElementById('id03').style.display = 'block';
                            }

//                if (x.style.display === 'none') {
//                    
//                } else {
//                    x.style.display = 'none';
//                }
                        }
        </script>
        <script>
//            $('#periode li').click(function () {
//                //console.log($(this).attr('data-input'));
////                                                    alert($(this).attr('data-input'));	// this will alert data-input value.
//                $('#per').val($(this).attr('data-input'));
//
//            });
        </script>

        <!-- //here ends scrolling icon -->
    </body>
</html>