
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <h1 style="color: #4D4949; text-align: center; margin: 8%; font-size: 50px;"><b>İletişim Formu Bilgileriniz:</b></h1>
    <style>
            body 
            {
                color: #DDDDDD; /* Koyu Gri */
                background-color: #8D9990; /* Açık Gri */
            }
            table.tablo 
            {
                width: 30%; /* Tablonun genişliği yüzde 30 olacak */
                height: 35vh; /* Tablonun yüksekliği ekran yüksekliğinin yüzde 25'si olacak */
                margin: 0 auto; /* Tabloyu yatayda ekran genişliğine göre ortalamak için */
                border-collapse: collapse;
                border-spacing: 0;
                border-radius: 10px;
                background-color: #3F4D42;
                position: fixed; /* Tabloyu sabit bir pozisyonda tutar */
                top: 50%; /* Tablonun üst kenarını ekranın ortasına hizalar */
                left: 50%; /* Tablonun sol kenarını ekranın ortasına hizalar */
                transform: translate(-50%, -50%); /* Tabloyu ekranın ortasına taşır */
            }

            #yazi
            {
                width: 200px;
                height: 30px;
                border-radius: 10px;
            }

            #bildirim
            {
                width: 200px;
                height: 30px;
                border-radius: 10px;
                background-color: #E2E6E3;
            }

            #mesaj
            {
                width: 200px;
                height: 40px;
                border-radius: 10px;
                background-color: #E2E6E3;
            }

            #geributon 
            {
                width: 100px;
                height: 25px;
                border-radius: 10px;
                background-color: #E2E6E3;
            }
        </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adsoyad = $_POST["adsoyad"];
        $email = $_POST["email"];
        $mesaj = $_POST["mesaj"];
        $amac = $_POST["iletisimAmaci"];
        $onay = $_POST["onay"];

        if ($onay) {
            $o = "Bu form gönderen tarafından onaylanmıştır!";
        } else {
            $o = "Bu form gönderen tarafından onaylanmamıştır!";
        }

        if ($amac == "resmi") {
            $a = "Resmi";
        } elseif ($amac == "ozel") {
            $a = "Özel";
        } else {
            $a = "Önemli";
        }

        if (empty($adsoyad) || empty($email) || empty($mesaj)) {
            echo "Lütfen tüm alanları doldurun.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Geçerli bir e-posta adresi girin.";
        } else {
            echo "<table class='tablo'>";
            echo "<tr><th colspan=2 class='bildirim'>$o</th></tr>";
            echo "<tr><th class='yazi'>İletişim Amacı:</th><th class='bildirim'>$a</th></tr>";
            echo "<tr><th class='yazi'>Ad Soyad:</th><th class='bildirim'>$adsoyad</th></tr>";
            echo "<tr><th class='yazi'>E-mail:</th><th class='bildirim'>$email</th></tr>";
            echo "<tr><th class='yazi'>Mesajınız:</th></tr>";
            echo "<tr><th colspan=2 class='mesaj'>$mesaj</th></tr>";
            echo "<tr><th colspan=2><a href='piletisim.html'><button id='geributon'>Geri Dön</button></a></th></tr>";
            echo "</table>";
        }
    } else {
        echo "Bu sayfa doğrudan erişilemez.";
    }
    ?>
</body>
</html>