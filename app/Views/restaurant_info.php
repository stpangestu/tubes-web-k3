<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guide.in - Restoran info</title>
    <!--Css-->
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!--Font Inter-->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@400;500;600;700&family=Inter&family=Permanent+Marker&display=swap");
    </style>
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/8497bfded3.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div style="margin-left: 5em">
            <a class="nav-link" href="/"> <b>Home</b> </a>
            <a class="nav-link" href=""> <b>Restoran</b> </a>
            <a class="nav-link" href="/home"> <b>Resep</b> </a>
        </div>
        <div style="margin-left: -5em">
            <h2>Guide.in</h2>
        </div>
        <div style="margin-right: 10em" class="input-container">
            <i class="fa fa-search icon"> </i>
            <input class="input-field" type="text" placeholder="Search" />
        </div>
    </nav>
    <section>
        <div style=" display: flex;
  justify-content: center; gap: 2em; margin-left: -15%;">
            <div>

                <img class="img-rest-info" src="img/resto1.jpg" alt="">
            </div>
            <div style="width: 400px; font-size: 22px;">

                <p style="margin-top: 20px;">
                <h3><b>La Brasserie Restaurant </b></h3>
                </p><br>
                <p>5.0<i style="color: gold;" class="fas fa-star"></i></p><br>
                <p>Jam Buka : 06:00 - 23:00</p><br><br>
                <span>Alamat : Jalan Jenderal Sudirman Kav 18-20, RT.10/RW.11, Karet Tengsin, Jakarta Pusat, DKI Jakarta, Daerah Khusus Ibukota Jakarta 10220</span>
                <a href="https://www.google.com/maps/dir//La+Brasserie+Restaurant+Jalan+Jenderal+Sudirman+Kav+18-20+RT.10%2FRW.11,+Karet+Tengsin+Jakarta+Pusat,+DKI+Jakarta,+Daerah+Khusus+Ibukota+Jakarta+10220/@-6.213105,106.81872,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69f401e8b61e37:0xaac5e7534a420e95!2m2!1d106.81872!2d-6.213105">

                    <i style="color: red;" class="fas fa-map-marker-alt"><span style="color: black;">arahkan</span>

                    </i>
                </a>
            </div>
        </div>
        <div>
            <div class="mapouter" style="margin-left: 10em;margin-top: 5em;">
                <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=La%20Brassie&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org"></a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 600px;
                        }
                    </style><a href="https://www.embedgooglemap.net">google map embed iframe</a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 600px;
                        }
                    </style>
                </div>
            </div>
        </div>
    </section>

    <footer>Designed by kelompok 3</footer>
</body>

</html>