<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guide.in - Resep dipilih</title>
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
            <input class="input-field" type="text" placeholder="Search" />
        </div>
    </nav>
    <section>
        <div class="row">
            <div class="col-standard">
                <h1 style="margin-bottom: 1em;">
                    <p> <b><?= $resep['nama_resep']; ?></b> </p>
                </h1>
                <img width="400" height="400" src="/assets/imgresep/<?= $resep['img_resep']; ?>" alt="">
            </div>
            <div class="col-standard">
                <h3 style="margin-bottom: 1em;"><b>Bahan-bahan : </b></h3>
                <p style="word-wrap: break-word; margin-bottom: 4em;">
                    <?= $resep['bahan_resep']; ?>
                </p>

            </div>
        </div>
        <div class="step">
            <h3><b>Langkah-langkah : </b></h3>
            <p>
                <?= $resep['langkah_resep']; ?>

            </p>
        </div>
        <div class="send-recipe">
            <h3><b>Kirimkan resepmu kesini!</b></h3>
            <p>Punya resep sendiri untuk dikirimkan? <a href="/reg-recipe">Kirimkan disini!</a></p>
        </div>

        <div class="komentar">
            <form action="/komentar/submit" method="POST">

                <?php if (!$isComment) { ?>
                    <h3><b>Masukan Nama</b></h3>
                    <input name="namaUser" style="border-radius: 10px; width: 300px; height: 35px; margin-bottom: 3em;" type="text" required>
                <?php } ?>

                <h3><b>Komentar</b></h3>
                <input name="isiKomentar" style="border-radius: 10px; width: 726px; height: 127px; margin-bottom: 1em;" type="text"> <br>
                <input name="idResep" type="hidden" value="<?= $resep['id']; ?>">
                <button type="submit" class="btn-link" style="margin-bottom: 2em;">Post</button>
            </form>
            <div class="card">
                <ul>
                    <?php foreach ($komens as $key => $komen) { ?>
                        <li class="inner-card">
                            <b>
                                <?= $komen['nama_user']; ?>
                            </b><br><br>
                            <?= $komen['isi_komentar']; ?> <br><br>
                            <p><?= $komen['date']; ?></p> <br>

                            <!-- Replies -->
                            <?php foreach ($replies as $key => $reply) { ?>
                                <?php if ($reply['id_komentar'] == $komen['id']) : ?>
                                    <b>
                                        <?= $reply['nama_user']; ?>
                                    </b><br><br>
                                    <?= $reply['isi_komentar']; ?> <br><br>
                                    <p><?= $reply['date']; ?></p> <br>
                                <?php endif ?>
                            <?php } ?>
                            <!-- /Replies -->

                            <!-- Inputreply -->
                            <form action="/reply/submit" method="POST">

                                <?php if (!$isComment) { ?>
                                    <h3><b>Masukan Nama</b></h3>
                                    <input name="namaUserReply" style="border-radius: 10px; width: 300px; height: 35px; margin-bottom: 3em;" type="text">
                                <?php } ?>

                                <h3><b>Reply</b></h3>
                                <input name="isiKomentarReply" style="border-radius: 10px; width: 300px; height: 35px; margin-bottom: 1em;" type="text"> <br>
                                <input name="idKomen" type="hidden" value="<?= $komen['id']; ?>">
                                <button type="submit" class="btn-link" style="margin-bottom: 2em;">Post</button>
                            </form>
                            <!-- /reply -->

                        </li>
                    <?php } ?>
                </ul>
            </div>
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