<?php
// Kullanıcı adı ve şifre kontrolü
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullaniciadi = $_POST["kullaniciadi"]; // Kullanıcı adını alın
    $sifre = $_POST["sifre"]; // Şifreyi alın

    $gecerliKullaniciadi = array("g221210002@sakarya.edu.tr", "G221210002@sakarya.edu.tr");
    $gecerliSifre = array("g221210002", "G221210002");

    // Kullanıcının girişi başarılı değilse
    $girisBasarili = false;

    // Kullanıcı adı ve şifre doğrulama
    if (in_array($kullaniciadi, $gecerliKullaniciadi) && in_array($sifre, $gecerliSifre)) {
        $girisBasarili = true;
    }
    if ($girisBasarili) {
    } else {
        header("Location: pgiris.html"); // Başarısız ise tekrar giriş sayfasına yönlendir
        exit();
    }
}
error_reporting(E_ERROR ^ E_NOTICE);
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Benim Websitem</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <style>
        .custom-jumbotron 
        {
            background-color: #e9ecef;
            padding: 2rem;
        }
        body {
            background-color: #8D9990;
        }
    </style>
</head>
<body>

<nav class='navbar navbar-expand-lg navbar-light bg-light'>
    <a class='navbar-brand' href='#'>Benim Websitem</a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav'
            aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNav'>
        <ul class='navbar-nav'>
            <li class='nav-item active'>
                <a class='nav-link' href='#'>Anasayfa</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='phakkimda.html'>Hakkımda</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='pozgecmis.html'>Özgeçmiş</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='psehrim.html'>Şehrim</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='ptakimimiz.html'>Takımımız</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='pilgialanlarim.html'>İlgi Alanlarım</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='piletisim.html'>İletişim</a>
            </li>
        </ul>
    </div>
    <!-- Profil Kutucuğu -->
    <div class='ml-auto'>
        <div class='navbar-text pr-3'>
            <img src='talhairis.jpeg' alt='Profil Fotoğrafı2' class='img-fluid rounded-circle' style='max-width: 40px;'>
            <span class='pl-2'><?php echo $kullaniciadi; ?></span>
        </div>
    </div>
</nav>

<div class='container mt-4'>
    <div class='row justify-content-center'>
        <div class='col-lg-8'>
            <div class='jumbotron jumbotron-fluid custom-jumbotron'>
                <div class='container'>
                    <h1>Hoşgeldiniz, <?php echo $kullaniciadi; ?></h1>
                    <p>Merhaba, adım Talha İris ve bu benim kişisel websitem. Benimle ilgili daha fazla bilgi için gezinebilirsiniz!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
</body>
</html>
