<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
            <a class="nav-link" href=""> <b>Home</b> </a>
            <a class="nav-link" href=""> <b>Resep</b> </a>
            <a class="nav-link" href=""> <b>Resto</b> </a>
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
            Apa yang ingin anda masak hari ini?
        </h1>
        <!-- baru -->
        <div class="row-center">
            <b style=" font-family: 'inter';">
                Resep Terbaru
            </b>
        </div>

        <!-- populer -->
        <div class="row-center" style="margin-bottom: 5%;">
            <div class="col">
                <img width="200px" src="https://images.unsplash.com/photo-1593642532871-8b12e02d091c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=812&q=80" alt="">
                <p>Test</p>
            </div>
        </div>
        <div class="row-center">
            <b style=" font-family: 'inter';">
                Resep Populer
            </b>
        </div>
        <div class="row-center" style="margin-bottom: 5%;">
            <div class="col">
                <img width="200px" src="https://images.unsplash.com/photo-1593642532871-8b12e02d091c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=812&q=80" alt="">
                <p>Test</p>
            </div>
        </div>
        <div class="row-center">
            <b style=" font-family: 'inter';">
                Lihat Resep Berdasarkan Kategori
            </b>
        </div>
        <div class="row-center" style="margin-left: 3%;">
            <div class="col">
                <a class="btn-category" href=""> <b>Sayuran</b> </a>
                <a class="btn-category" href=""> <b>Makanan Khas</b> </a>
                <a class="btn-category" href=""> <b>Makanan Utama</b></a>
                <a class="btn-category" href=""><b>Makanan Pembuka</b></a>
                <a class="btn-category" href=""><b>Makanan Penutup</b></a>
                <a class="btn-category" href=""><b>Minuman</b></a>
                <a class="btn-category" href=""><b>Snack</b></a>
                <a class="btn-category" href=""><b>Dessert</b></a>
            </div>
        </div>
    </section>

    <footer>Designed by kelompok 3</footer>
</body>

</html>