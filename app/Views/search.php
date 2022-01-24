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
            <a class="nav-link" href="/restaurant"> <b>Restoran</b> </a>
            <a class="nav-link" href="/home"> <b>Resep</b> </a>
        </div>
        <div style="margin-left: -5em">
            <h2>Guide.in</h2>
        </div>
        <div style="margin-right: 10em" class="input-container">
            <i class="fa fa-search icon"> </i>
            <form action="/recipe/search/" method="post">
                <input class="input-field" name="search" type="text" placeholder="Search" />
            </form>
        </div>
    </nav>
    <section>

        <!-- hasil pencarian -->
        <div class="row-center">
            <b style=" font-family: 'inter';">
                Hasil Pencarian
            </b>
        </div>

        <div class="row-center" style="margin-bottom: 5%;">
            <?php foreach ($resep as $key => $r) : ?>
                <div class="col ">
                    <a class="link-card" href="/recipe/<?= $r['id']; ?>">
                        <img width="200px" height="200px" style="border-radius: 6px;" src="/assets/imgresep/<?= $r['img_resep']; ?>" alt="">
                        <p><b><?= $r['nama_resep']; ?></b></p>
                    </a>
                </div>
            <?php endforeach ?>
        </div>

        <div class="row-center">
            <b style=" font-family: 'inter';">
                Lihat Resep Berdasarkan Kategori
            </b>
        </div>
        <div class="row-center" style="margin-left: 3%;">
            <div class="col">
                <a class="btn-category" href="/categories/Sayuran"> <b>Sayuran</b> </a>
                <a class="btn-category" href="/categories/Makanan-Khas"> <b>Makanan Khas</b> </a>
                <a class="btn-category" href="/categories/Makanan-Utama"> <b>Makanan Utama</b></a>
                <a class="btn-category" href="/categories/Makanan-Pembuka"><b>Makanan Pembuka</b></a>
                <a class="btn-category" href="/categories/Makanan-Penutup"><b>Makanan Penutup</b></a>
                <a class="btn-category" href="/categories/Minuman"><b>Minuman</b></a>
                <a class="btn-category" href="/categories/Snack"><b>Snack</b></a>
                <a class="btn-category" href="/categories/Kue-Kering"><b>Kue Kering</b></a>
            </div>
        </div>
    </section>

    <footer>Designed by kelompok 3</footer>
</body>

</html>