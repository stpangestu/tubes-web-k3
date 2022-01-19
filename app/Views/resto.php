<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guide.in - Resep</title>
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
            <a class="nav-link" href=""> <b>Resep</b> </a>
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
    <h1 style="margin-left: 4%; margin-bottom: 4%;">
            kami akan membantu anda mencari restoran terbaik!
        </h1>
        <!-- baru -->
        <div class="col-standard">
            <p>Pilih Daerah : </p>
            <select style="width: 150px; height: 32px; text-align: center;" name="" id="">
                <option value="" disabled selected>Plih Daerah</option>
                <option value="">Jakarta</option>
                <option value="">Depok</option>
                <option value="">Bogor</option>
                <option value="">Bekasi</option>
            </select>
        </div>

        <div class="row-center" style="margin-bottom: 5%;">
            
                <div class="col ">
                    <a class="link-card" href="/restaurant-info">
                        <img class="img-resto" src="img/resto1.jpg" alt="">
                        <p style=" font-family: 'inter';"> <b>

                                
                            </b>
                        </p>
                        <span>5.0<i class="fas fa-star"></i></span>
                        <p>Jakarta</p>
                    </a>
                </div>

        </div>
    </section>

    <footer>Designed by kelompok 3</footer>
</body>

</html>