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
            <a class="nav-link" href="/restaurant"> <b>Restoran</b> </a>
            <a class="nav-link" href="/home"> <b>Resep</b> </a>
        </div>
        <div style="margin-left: -5em">
            <h2>Guide.in</h2>
        </div>
        <div style="margin-right: 10em" class="input-container">
            <i class="fa fa-search icon"> </i>
            <form action="/restaurant/search/" method="post">
                <input class="input-field" name="search" type="text" placeholder="Search" />
            </form>
        </div>
    </nav>
    <section>
        <div style=" display: flex;
  justify-content: center; gap: 2em; margin-left: -15%;">
            <div>

                <img class="img-rest-info" src="/assets/imgrestoran/<?= $resto['img_restoran']; ?>" alt="">
            </div>
            <div style="width: 400px; font-size: 22px;">

                <p style="margin-top: 20px;">
                    <!-- nama restoran -->
                <h3><b><?= $resto['nama_restoran']; ?></b></h3>
                </p><br>
                <!-- rating -->
                <p><b><?= $resto['rating_restoran']; ?> </b><i style="color: gold;" class="fas fa-star"></i></p><br>
                <!-- jam buka -->
                <p><b>Jam Buka : </b><?= $resto['jam_buka']; ?></p><br><br>
                <span><b>Alamat : </b><?= $resto['alamat_restoran']; ?></span><br><br>
                <!-- sambung gmaps -->
                <a href="<?= $resto['link_map']; ?>">

                    <i style="color: red;" class="fas fa-map-marker-alt"><span style="color: black;">arahkan</span>

                    </i>
                </a>
            </div>
        </div>
        <div>
            <div class="mapouter" style="margin-left: 10em;margin-top: 5em;">
                <!-- map embed resto -->
                <?= $resto['map_resto']; ?>
            </div>
        </div>
        </div>
    </section>

    <footer>Designed by kelompok 3</footer>
</body>

</html>