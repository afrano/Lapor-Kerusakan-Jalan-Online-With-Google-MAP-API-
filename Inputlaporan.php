<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Input Laporan</title>
        <!-- custom-theme -->
        <link rel="icon" href="images/logo64.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Karate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //custom-theme -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
        <!-- //js -->
        <!-- font-awesome-icons -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Shadows+Into+Light+Two&amp;subset=latin-ext" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
        <style>
            img {
                max-width: 100%;
                max-height: 100%;
            }
            label {
                cursor: pointer;
                /* Style as you please, it will become the visible UI component. */
            }

            #imgInp {
                opacity: 0;
                position: absolute;
                z-index: -1;
            }
            input[type=text], input[type=email],textarea {
                resize: none;
                text-align: center;
                border-radius: 4px;
            }

        </style>
    </head>

    <body onload="javascript:getLocation()">
        <!-- banner -->

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
                            <li class="menu__item "><a href="index.php" class="menu__link">Beranda</a></li>
                            <li class="menu__item"><a href='index.php?tampilLaporan=add' class="menu__link">Lihat Data </a></li>

                            <li class="menu__item menu__item--current"><a href="#" class="menu__link">LAPOR SEKARANG!</a></li>
                        </ul>

                        <div class="agileinfo_social_icons">
                            <ul class="nav navbar-nav">

                            </ul>
                        </div>
                    </nav>

                </div>
        </div>
        <!-- //banner -->
        <!-- typography -->
        <div class="banner-bottom">
            <div class="container">
                <center><div class="grid_4 grid_4 w3layouts">
                        <form action="" name="diambil" id="diambil" method="POST" onsubmit="terdeteksi('position')" enctype="multipart/form-data">
                            <div class="" style="background-color: #f0f0f0; padding: 30px; border-radius: 20px; width: fit-content">
                                <center><div>
                                        <div class="well"><center><h1>Input Laporan</h1></center></div>
                                        <?php
                                        while ($row = $this->model->fetch($data)) {
                                            $angka = substr($row['id_laporan'], -9);
                                            $L = substr($row['id_laporan'], 0, 1);
                                            $angka++;
                                            $tes = $angka;
                                            $hasil = $L . $tes;

                                            $tgl_Lapor = date('d/m/Y');
                                            echo '<div class="input-group input-group-lg w3_w3layouts">
                                            <input type="hidden" name="id_laporan" value="' . $hasil . '"  class="form-control" aria-describedby="sizing-addon1" >
                                            </div> ';
                                            echo '<input type="hidden" name="tgl_Lapor" value="' . $tgl_Lapor . '" >
                                            </div> ';
                                        }
                                        ?>
                                        <div class="input-group input-group-lg w3_w3layouts">
                                            <input name="email" type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon1" required="">
                                        </div>

                                        <div class="input-group input-group-lg w3_w3layouts">
                                            <input type="text" name="nomor_telpon" class="form-control" onkeypress='validate(event)' placeholder="Nomor telpon" maxlength="12" aria-describedby="sizing-addon1" required="">
                                        </div>

                                        <div class="input-group input-group-lg w3_w3layouts">
                                            <div style="background-color: #cccccc; border-radius: 4px">

                                                <img id="blah" src="" alt=""  style=" height: 384px; width: 208; padding: 0px ">
                                                <input type="text" id="gps" name="lat" style="width: 100%; height: 50px; text-align: center; background-color: #f0f0f0" readonly="" placeholder="" required="">
                                                <input type="text" required="" id="gps2" name="lon" style="width: 100%; height: 50px; text-align: center; background-color: #f0f0f0" readonly="" placeholder="" required="">
                                                <div > <center><input <label id="submit" type="button" value="Validasikan Posisi" style="width: 100%"  class="btn btn-primary"></center>
                                                </div>
                                                <input type="text" name="namajalan" id="NamaJalan" style="width: 100%; height: 50px; text-align: center; background-color: #f0f0f0" readonly="" placeholder="Temukan Posisi" required="">
                                            </div>
                                            <center><label style="width: 100%" for="imgInp" class="btn btn-primary">Camera</label></center>
                                            <input type="file" accept="image/*;capture=camera" name="image" style="" id="imgInp"  onclick="document.getElementById('file').click();"/>                                                                        
                                        </div>

                                        <div class="input-group input-group-lg w3_w3layouts">
                                            <center><textarea name="saran" class="input-lg"  placeholder="Kritik dan Saran"></textarea></center>
                                        </div>
                                    </div></center>
                                <div style="text-align: center">
                                    <input type="checkbox" style="margin: 10px" required=""><i style="padding: 5px" >
                                        Saya setuju untuk membantu proses <br>pembenaran jalan dari Dinas Pekerjaan Umum Sleman</i>
                                </div>
                                <br><br><br>
                                <div class="wthree_footer_grid_right">
                                    <CENTER>  <input onclick="validdata();" class="btn-success" style="width: 100%" name="submit" type="submit" value="Simpan" > </center>

                                </div>
                                <div hidden="" style="height: 30%; background-color: red; position: relative; box-shadow: inset 0px 2px 2px 2px #cccccc " id="map" >
                                </div>

                            </div>
                            <script>
                                function initMap() {
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 8,
                                        center: {lat: -6.121435, lng: 106.774124}
                                    });
                                    var geocoder = new google.maps.Geocoder;
                                    var infowindow = new google.maps.InfoWindow;

                                    document.getElementById('submit').addEventListener('click', function () {
                                        geocodeLatLng(geocoder, map, infowindow);
                                    });
                                }
                                namajalan = document.getElementById("NamaJalan");
                                function geocodeLatLng(geocoder, map, infowindow) {

                                    var latt = document.getElementById('gps').value;
                                    var lon = document.getElementById('gps2').value;
//                                    var input = document.getElementById('latlng').value;
//                                    var latlngStr = input.split(',', 2);
//                                  var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
                                    var latlng = {lat: parseFloat(latt), lng: parseFloat(lon)};
                                    geocoder.geocode(
                                            {'location': latlng},
                                            function (results, status) {
                                                if (status === 'OK') {
                                                    if (results[1]) {
                                                        map.setZoom(15);
                                                        var marker = new google.maps.Marker({
                                                            position: latlng,
                                                            map: map
                                                        });
//                                                        if (results[4].address_components[4].long_name === kab) {
//
//                                                            alert('Bukan Jalan Sleman');
//                                                        } else {
//                                                            
//                                                            alert('Bukan jasld Sleman');
//                                                        }

                                                        infowindow.setContent(results[0].formatted_address);
                                                        infowindow.open(map, marker);
                                                    } else {
                                                        window.alert('No results found');
                                                    }
                                                } else {
                                                    window.alert('Geocoder failed due to: ' + status);
                                                }
                                                namajalan.value = infowindow.getContent();
                                            });
                                }
                            </script>
                            <script async defer
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW_u3PHV3bRsMPlcR3ikqH9NFRfeccLQ8&callback=initMap">
                            </script>

                    </div>
                    </form>
            </div></center>
        <!-- typography -->
        <!-- footer -->

        <div class="clearfix"> </div>
    </div>

</div>

<!-- //footer -->
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <div class="fa fa-bell">Notifikasi</div>

            </div>
            <section>
                <div class="modal-body" style="padding: 50px">

                    <center><h2>Data telah berhasil disimpan</h2>
                        silahkan tunggu feedback laporan anda dari kami
                    </center>

                </div>
                <div class="modal-body" style="padding: 50px">

                    <center>
                        <form action="index.php">
                            <button class="btn-success"> <h1>Kembali ke Home</h1> </button>
                        </form>
                    </center>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <div class="fa fa-bell">Notifikasi</div>

            </div>
            <section>
                <div class="modal-body" style="padding: 50px">

                    <center> Penginputan Data hanya bisa dilakukan melalui perangkat Smartphone!
                    </center>

                </div>
                <div class="modal-body" style="padding: 50px">

                    <center>
                        <form action="index.php">
                            <button class="btn-success"> <h1>Kembali ke Home</h1> </button>
                        </form>
                    </center>
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
<script type="text/javascript">
    $(":file").filestyle();
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
        var regex = /[0-9]|\./;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault)
                theEvent.preventDefault();
        }
    }
</script>
<!-- //here ends scrolling icon -->

<script>
    var x = document.getElementById("gps");
    var y = document.getElementById("gps2");
    var latlon = (x, y);
    latlon.getElementsByTagName("haha");
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.value = position.coords.latitude;
        y.value = position.coords.longitude;

    }

    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
    });
    // deteksi smartphone atau bukan
//            var isMobile = false;
//            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
//                    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4)))
//                isMobile = true;
//            if (!isMobile) {
//                alert("Input data hanya bisa diakses oleh pengguna Smartphone!");
//                window.location.replace("http://localhost/Hapus/index.php");
//           }
           // -------------------------------------------

    function validdata()
    {
        if (document.latihan.gps.value === "")
        {
            alert("Lokasi tidak ditemukan");
        }
    }
</script>
<!--        function GetAddress( $lat, $lng )
{   
    // Construct the Google Geocode API call
    //
    $URL = "http://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${lng}&sensor=false";

    // Extract the location lat and lng values
    //
    $data = file( $URL );
    foreach ($data as $line_num => $line) 
    {
        if ( false != strstr( $line, "\"formatted_address\"" ) )
        {
            $addr = substr( trim( $line ), 22, -2 );
            break;
        }
    }

    return $addr;
}-->
<?php
if (isset($_POST['submit'])) { //jika button submit diklik maka panggil fungsi insert pada controller
    // $main = new JalanDAO();
    $main = new LaporanDAO();
    $main->insert();
}
?>
</body>
</html>