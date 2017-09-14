<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Daftar Laporan</title>
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
                                <li class="menu__item"><a href="#" class="menu__link">Admin</a></li>
                            </ul>
                            <div class="agileinfo_social_icons">

                                <li class="nav menu__item">                     
                                    <a id="logout" href="logout_1.php" class=" menu__link" data-toggle="dropdown">LOG OUT <b class="caret"></b></a>

                                </li>

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
                        <h1>Daftar Laporan Perbaikan Jalan  </h1>
                    </div>
                    <div class="bs-docs-example">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID Laporan</th>
                                    <th>Nama Jalan</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody> 

                                <?php
                                //Joinkan tabel jalan dan tabel koordinator jalan, bila aksi di klik tambahkan data ke tabel laporan
                                while ($row = $this->model->fetch($data)) {
                                    echo "
					<tr>  
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[6]</td>
						<td><a href='index.php?kerjakan=$row[0]' onClick=\"return confirm('Kerjakan Jalan ?')\"\><button>Kerjakan</button></a></td>
					</tr>
				";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
        <div class="" >
            <div class="container">


            </div>
        </div>

        <!-- bootstrap-pop-up -->
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
        <!-- start-smoth-scrolling -->
        <!-- here stars scrolling icon -->

        <script type="text/javascript">
            function myMap() {
                var mapCanvas = document.getElementById("map");
                var mapOptions = {
                    center: new google.maps.LatLng( < %= a % > , 110.343595),
                            zoom: 15
                };
                var map = new google.maps.Map(mapCanvas, mapOptions);
            }
            $(document).ready(function () {
                /*
                 var de
                 faults = {
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