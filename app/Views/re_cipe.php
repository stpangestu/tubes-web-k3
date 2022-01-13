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
        <div class="col-standard">
            <h3 style="margin-bottom: 1em;">
                Kirimkan resepmu kesini
            </h3>
            <p style="margin-bottom: 2em;">
                kami sangat tertarik kamu ingin membagikan resepmu disini!
            </p>
            <img src="img/spaghetti.svg" alt="" style="margin-bottom: 2em;">
            <form action="">
                <h3>
                    <b>
                        Detail Resep
                    </b>
                </h3><br>
                <p>
                    Nama Resep <span style="color: red;">*</span>
                </p>
                <input type="text" style="border-radius: 6px; margin-bottom:2em; width:326px; height:32px;" required>
                <p>
                    Bahan-bahan <span style="color: red;">*</span>
                </p>
                <input type="text" style="border-radius: 6px; margin-bottom:2em; width:725px; height:102px;" required>
                <p>
                    Cara membuat <span style="color: red;">*</span>
                </p>
                <input type="text" style="border-radius: 6px; margin-bottom:2em; width:632px; height:352px;" required>
                <p>
                    Upload foto dari hasil makanan <span style="color: red;">*</span> <br>
                </p>
                <input type="file" required style="border-radius: 6px; margin-bottom:1em; width:326px; height:32px;" required>
                <p>
                    format file: JPG/PNG Max 10MB
                </p><br><br>
                <h3><b>Penulis Resep</b></h3><br><br>
                <p>
                    Nama Penulis <span style="color: red;">*</span>
                </p>
                <input type="text" required style="border-radius: 6px; margin-bottom:2em; width:326px; height:32px;" required>
                <p>
                    Email <span style="color: red;">*</span>
                </p>
                <input type="text" required style="border-radius: 6px; margin-bottom:2em; width:326px; height:32px;" required> <br>
                <br>
                <button class="btn-link" type="submit">
                    Upload resepmu
                </button>
            </form>
        </div>
    </section>

    <footer>Designed by kelompok 3</footer>
</body>

</html>