<!DOCTYPE html>
<html lang="en">
    <?php
    include_once 'controller/LaporanDAO.php';
    $detail = new LaporanDAO();
    ?>

    <head>
        <title>Lihat Laporan Jalan</title>
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
                                <li class="menu__item"><a href="index.php" class="menu__link">Beranda</a></li>
                                <li class="menu__item menu__item--current"><a href="#" class="menu__link">Lihat Data</a></li>

                                <li class="menu__item"><a href="index.php?input=add" class="menu__link">LAPOR SEKARANG!</a></li>
                            </ul>
                            <div class="agileinfo_social_icons">



                            </div>

                        </nav>
                    </div>
                </nav>

            </div>
        </div>
        <!-- //banner -->
        <!-- banner-bottom -->

        <div class="container">
            <div class="grid_3 grid_4 w3layouts">

                <div class="" style="background-color: #f0f0f0; padding: 30px; border-radius: 20px;  margin-bottom: 50px; margin-top: 100px">
                    <div class="well" style="color: #204d74; text-align: center">
                        <h1>Daftar Data Laporan </h1>
                    </div>
                    <form action="" method="POST">

                        <div class="bs-docs-example">
                            <table class="table table-hover">
                                <thead>
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1"<td><button class="btn-info" >Search</button></a></td></span>
                                    <input type="text"  class="form-control" name="Input_Cari" placeholder="" aria-describedby="sizing-addon1">

                                </div>
                                <tr>
                                    <th>ID Laporan</th>
                                    <th>Nama Jalan</th>
                                    <th>Tanggal Laporan</th>
                                    <th>Status</th>
                                </tr>
                                </thead>

                                <tbody> 
                                <div class = "input-group input-group-lg w3_w3layouts">    
                                    <?php
                                    $data1 = $detail->DetailPerbaikan();
                                    while ($row = $this->model->fetch($data1)) {
//                                    while ($row = $this->model->fetch($data)) {
                                        if ($row['Status_laporan'] == 0) {
                                            $status = 'Laporan Ditolak';
                                        } else if ($row['Status_laporan'] == 1) {
                                            $status = 'Laporan Masuk';
                                        } else if (($row['Status_laporan'] == 2)) {
                                            $status = 'Proses Pengerjaan';
                                        } else {
                                            $status = 'Selesai';
                                        }
                                        //lopping baris table 
                                        echo "                                            
					<tr data-toggle='modal' data-target='#myModal" . $row['id_laporan'] . "'>     
						<td> " . $row['id_laporan'] . " </td>   
                                                <td> " . $row['nama_Jalan'] . "</td>
                                                <td> " . $row['Tgl_laporan'] . "</td>
                                                <td> " . $status . "</td>
                                               
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
                                    <span class="input-group-addon" id="sizing-addon1" >Pelapor</span>
                                    <input type="text" class="form-control" placeholder="' . $row['email'] . '" aria-describedby="sizing-addon1" readonly="">
                                </div>
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1" >Nama Jalan</span>
                                    <input type="text" class="form-control" placeholder="' . $row['nama_Jalan'] . '" aria-describedby="sizing-addon1" readonly="">
                                </div>
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <img src="data:image/jpeg;base64,' . base64_encode($row['foto']) . '" class="img-responsive"/>
                                    <input type="text" style="width: 100%; height: 50px; text-align: center; background-color: #f0f0f0" readonly="" placeholder="' . $row['longitude'] . ',' . $row['latitude'] . '">
                                        
                                </div>
                                <div class="input-group input-group-lg w3_w3layouts">
                                    <span class="input-group-addon" id="sizing-addon1"  >Saran Pelapor</span>
                                    <textarea class="input-lg" style="width: 100%; height: 100%" placeholder="' . $row['saran'] . '" readonly=""></textarea>
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
                    </div>
                    <div class = "clearfix"> </div>
                </div>

            </div>
        </div>

        <!--        <div class="modal video-modal fade" id="myModalL100000001" tabindex="-1" role="dialog" aria-labelledby="myModal">
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
                </div>-->
        <!--        <div class = "modal video-modal fade" id = "myModalL100000001" tabindex = "-1" role = "dialog" aria-labelledby = "myModal">
                    <div class = "modal-dialog" role = "document">
                        <div class = "modal-content">
                            <div class = "modal-header">
                                Data Laporan
                                <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;
                                    </span></button>
                            </div>
                            <section>
        
                                <div class = "modal-body">
        
                                    <div class = "" style = "background-color: #f0f0f0; padding: 30px; border-radius: 20px">
                                        <div class = "input-group input-group-lg w3_w3layouts">
        <?php
//                                    $ID_Jalan = 'L100000001';
//                                    $link = mysqli_connect("localhost", "root", "", "lazarus");
//                                    $sql = "select * from Laporan left join Masyarakat on Laporan.email = Masyarakat.email WHERE id_laporan = '$ID_Jalan'";
//                                    $result = mysqli_query($link, $sql);
//                                    $row = mysqli_fetch_array($result);
//                                    mysqli_close($link);
//                                    echo '
//                                    <span class = "input-group-addon" id = "sizing-addon1" >Email Pengirim </span>
//                                    <input type = "text" class = "form-control" value = ' . $row['email'] . ' aria-describedby = "sizing-addon1" readonly = "">
//                                </div>
//                                <div class = "input-group input-group-lg w3_w3layouts">
//                                    <span class = "input-group-addon" id = "sizing-addon1" >No. Telepon &#160;&nbsp&nbsp&nbsp;</span>
//                                    <input type = "text" class = "form-control" value = ' . $row['nomor_hp'] . ' aria-describedby = "sizing-addon1" readonly = "">
//                                </div>
//                                  <div class = "input-group input-group-lg w3_w3layouts">
//                                    <span class = "input-group-addon" id = "sizing-addon1" >Nama Jalan &#160;&nbsp&nbsp&nbsp;</span>
//                                <input type = "text" class = "form-control" value = "jl. Turi" aria-describedby = "sizing-addon1" readonly = "">
//                                </div>
//                                
//                               <div class = "input-group input-group-lg w3_w3layouts">
//                                   <img class="img-responsive" src="data:image/jpeg;base64,' . base64_encode($row['foto']) . '"/>
//                                    <input type="text" style="width: 100%; height: 50px; text-align: center; background-color: #f0f0f0" value= "">
//                                </div>
//                                 <div class = "input-group input-group-lg w3_w3layouts">
//                                    <span class = "input-group-addon" id = "sizing-addon1" >Longitude   &#160;&nbsp&nbsp&nbsp;</span>
//                                <input type = "text" class = "form-control" value = ' . $row[1] . ' aria-describedby = "sizing-addon1" readonly = "">
//                                </div>
//
//                                 <div class = "input-group input-group-lg w3_w3layouts">
//                                    <span class = "input-group-addon" id = "sizing-addon1" >Latitude    &#160;&nbsp&nbsp&nbsp;</span>
//                                <input type = "text" class = "form-control" value = ' . $row[2] . ' aria-describedby = "sizing-addon1" readonly = "">
//                                </div>
//                                <div class="input-group input-group-lg w3_w3layouts">
//                                    <span class="input-group-addon" id="sizing-addon1"  >Saran</span>';
//                                    echo "<input type = 'text' class = 'form-control' value='$row[saran]'  >     </div>";
        ?>
                                        </div>
                                        </section>
                                    </div>
                                </div>
                        </div>-->

        <script src="js/bootstrap.js"></script>
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
                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf7FALA_C8nQFFy1A8D6NWavSyS_rqIBc&callback=myMap"></script>
    </body>
</html>