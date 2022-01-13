<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guide.in - Resep makanan dan Restoran</title>
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
    <div>
        <nav>
            <!-- <div style="margin-left: 5em">
                <a class="nav-link" href=""> <b>Home</b> </a>
                <a class="nav-link" href=""> <b>Resep</b> </a>
                <a class="nav-link" href=""> <b>Resto</b> </a>
            </div> -->
            <div style="margin-left: 43em">
                <h2 class="nav-brand">Guide.in</h2>
            </div>
            <div style="margin-right: 10em" class="input-container">
                <i class="fa fa-search icon"> </i>
                <input class="input-field" type="text" placeholder="Search" />
            </div>
        </nav>

        <section>
            <div style="
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
          ">
                <div style="padding-left: 3em;">
                    <h1 class="wel-mess">
                        <p>Mari memasak</p>
                        <p>dengan resep</p>
                        <p>terbaik!</p>
                    </h1>
                    <h3 style="
                font-family: 'inter';
                font-style: normal;
                color: gray;
                font-size: 24px;
                line-height: 32px;
                margin-top: 5%;
                margin-bottom: 5%;
              ">
                        <p>Ingin memasak tetapi tidak tahu bagaimana memulainya?</p>
                        <p> jangan khawatir lagi!</p>

                    </h3>
                    <a class="btn-link" href="/home">Mulai</a>
                </div>
                <div>
                    <img class="home-image" src="img/spaghetti-1932466__480 1.jpg" alt="" srcset="" />
                </div>
            </div>
        </section>
    </div>
    <footer>Designed by kelompok 3</footer>
</body>

</html>