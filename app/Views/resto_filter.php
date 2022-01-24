<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guide.in - Restoran</title>
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
        <h1 style="margin-left: 4%; margin-bottom: 4%;">
            kami akan membantu anda mencari restoran terbaik!
        </h1>
        <!-- baru -->
        <div class="col-standard">
            <p>Pilih Daerah : </p>
            <form action="/restaurant/filter" method="POST">
                <select style="width: 150px; height: 46px; text-align: center; border-radius: 6px;" name="filterDaerah" id="">
                    <option value="null" disabled selected>Plih Daerah</option>
                    <option>Jakarta</option>
                    <option>Depok</option>
                    <option>Bogor</option>
                    <option>Bekasi</option>
                </select>
                <button type="submit" class="btn-link">submit</button>
            </form>
        </div>

        <div class="row-center" style="margin-bottom: 5%;">
            <?php foreach ($resto as $key => $res) : ?>
                <div class="col ">
                    <a class="link-card" href="/restaurant-info/<?= $res['id']; ?>">
                        <img class="img-resto" src="/assets/imgrestoran/<?= $res['img_restoran']; ?>" alt="">
                        <p style=" font-family: 'inter';"> <b>

                                <?= $res['nama_restoran']; ?>
                            </b>
                        </p>
                        <span><b><?= $res['rating_restoran']; ?> </b><i class="fas fa-star" style="color: gold;"></i></span>
                        <p><b><?= $res['daerah_restoran']; ?></b></p>
                    </a>
                </div>
            <?php endforeach ?>
        </div>





    </section>

    <footer>Designed by kelompok 3</footer>
</body>

</html>