<?php
include 'controller/AkunDAO.php';
$main = new AkunDAO();
if (isset($_POST['login'])) {
    $main->Login($_POST['username'], $_POST['password']);
}
?>
<!DOCTYPE html>
<html lang="en" style="background-color: #0accff">
    <head>
        <title>Login</title>
        <style>
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                padding:  0px;
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content/Box */
            .modal-content {
                background-color: #fefefe;
                margin: 15% auto; /* 15% from the top and centered */
                padding: 20px;
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button */
            .close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }
        </style>
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
        <link href="css/login.css" rel="stylesheet">
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Shadows+Into+Light+Two&amp;subset=latin-ext" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
        <style>

        </style>
    </head>

    <body style="background-color: #0accff; background-image: url(images/bcklogin.jpg);background-size: cover; background-repeat: no-repeat;   background-position: center center; height: 1000px; overflow-y: hidden">
        <!-- banner -->

        <div class="" >
            <div class="" style="height: 0px">
                <nav class="navbar navbar-default" style="margin: 0px; border-radius: 0px">
                    <center>
                        <div class="navbar-header navbar-left">

                            <h1 style="color: white"><a class="navbar-brand" href="index.php" ><span><i>L</i>azarus</span></a></h1>
                        </div>
                    </center>
                    <!-- Collect the nav links, forms, and other content for toggling -->

                </nav>

            </div>
        </div>
        <!-- //banner -->
        <!-- banner-bottom -->

        <div class="container" style="height: inherit">
            <div class="grid_5 grid_5 w3layouts">

                <div class="container">  
                    <form id="contact" action="" method="post">


                        <fieldset>
                            <input name="username" placeholder="USERNAME" type="text" tabindex="1" required>
                        </fieldset>
                        <fieldset>
                            <input name="password" placeholder="PASSWORD" type="password" tabindex="2" required>
                        </fieldset>

                        <fieldset>
                            <button value="login" name="login" type="submit" id="contact-submit">LOGIN</button>
                        </fieldset>
                        <fieldset style="opacity: 0.4">
                            <a href="index.php"><center><i class="fa fa-4x fa-arrow-circle-o-left "></i></center></a>
                        </fieldset>

                    </form>
                </div>

                <!--                        <h4 style="text-align: center"><button class="btn-success" style="border-radius: 10px; padding: 15px; margin: 10px;font-size: 20px" >Laporkan!</button></h4>-->
            </div>

        </div>

        <div id="myModal" class="modal" class="modal video-modal fade">
            <?php
            if (isset($_SESSION['user'])) {
                if (substr($_SESSION['user'], 0, 1) == 'A') {
                    $akun = "admin";
                } elseif (substr($_SESSION['user'], 0, 1) == 'K') {
                    $akun = "koor";
                }
                
            }
            ?>
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="padding: 0px">
                    <div class="modal-header">
                        Selamat Datang

                        <b>
                            <br>
                            <?php
                            $main->getNameById($_SESSION['user'],$akun);
                            ?>
                        </b>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <section>
                        <div class="modal-body" >


                            <center>
                                <p style="text-align: center;">

                                    <br>
                                    anda akan dipindahkan dalam 3 detik<br>
                                    klik link dibawah jika tidak terjadi apapun
                                </p>
                                <div style="background-color: #ccc" class="btn btn-link">
                                    <a href="index.php?<?php echo $akun;?>" style="text-decoration: none; color: black">Masuk ke Halaman User</a>
                                </div>

                            </center>
                            <br><br>

                        </div>
                    </section>
                </div>
            </div>

        </div>
        <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">

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
            var modal = document.getElementById('myModal');

// Get the button that opens the modal
            var btn = false;

// Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
//            btn.onclick = function() {
//                modal.style.display = "block";
//            };
<?php
if (isset($_SESSION['user'])) {
    if (substr($_SESSION['user'], 0, 1) == 'A') {
        $akun = "admin";
    } elseif (substr($_SESSION['user'], 0, 1) == 'K') {
        $akun = "koor";
    }
    echo 'var btn = true;';
}
?>
            window.onload = function () {
                setInterval(function () {
                    window.location.href = "index.php?<?php echo $akun; ?>";
                }, 3000);
            };
            if (btn === true) {
                modal.style.display = "block";
            }

// When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }

// When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

        <!-- start-smoth-scrolling -->
        <!-- here stars scrolling icon -->

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf7FALA_C8nQFFy1A8D6NWavSyS_rqIBc&callback=myMap"></script>
        <!-- //here ends scrolling icon -->
    </body>
</html>