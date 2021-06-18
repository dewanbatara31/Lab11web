<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="introduce">
        <div class="row">
            <img src="foto saya" title="Dewan Batara S" alt="Dewan Batara S" class="image-circle" width="230"
            style="float: left; border: 2px solid black;">
            <h1>Hello!</h1>
            <p> Nama saya Dewan Batara Subarjah dan sering dipanggil Dewan. Saya lahir di <i>Bekasi</i> pada tanggal 31 Agustus 2000 
          sebagai anak ketiga dari lima bersaudara. Saat ini, saya tinggal bersama orang tua dan keluarga di <i>Bekasi</i>.</p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>