
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <h1 style="color: #4D4949; text-align: center; margin: 8%; font-size: 50px;"><b>İletişim Formu Bilgileriniz.</b></h1>
    <style>
            body 
            {
                color: #3B3B40; /* Koyu Gri */
                background-color: #8D9990; /* Açık Gri */
            }
            table.tablo 
            {
                width: 30%; /* Tablonun genişliği yüzde 30 olacak */
                height: 25vh; /* Tablonun yüksekliği ekran yüksekliğinin yüzde 25'si olacak */
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
            #mya
            {
                width: 200px;
                height: 30px;
                border-radius: 10px;
                background-color: #E2E6E3;
            }

            #mye
            {
                width: 200px;
                height: 30px;
                border-radius: 10px;
                background-color: #E2E6E3;
            }

            #mym
            {
                width: 200px;
                height: 30px;
                border-radius: 10px;
                background-color: #E2E6E3;
            }

            #mybutton 
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

        if (empty($adsoyad) || empty($email) || empty($mesaj)) {
            echo "Lütfen tüm alanları doldurun.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Geçerli bir e-posta adresi girin.";
        } else {
            echo "<table class='tablo'>";
            echo "<tr><th style='color: #E2E6E3;'>Ad Soyad</th><th>$adsoyad</th></tr>";
            echo "<tr><th style='color: #E2E6E3;'>E-mail</th><th>$email</th></tr>";
            echo "<tr><th style='color: #E2E6E3;'>Mesajınız:</th><th>$mesaj</th></tr>";
            echo "</table>";
        }
    } else {
        echo "Bu sayfa doğrudan erişilemez.";
    }
    ?>

    <table class="tablo">
        <tr>
            <th style="color: #E2E6E3;">Ad Soyad</th>
            <th><input type="text" id="mya" name="adsoyad" disabled></th>
        </tr>
        <tr>
            <th style="color: #E2E6E3;">E-mail</th>
            <th><input type="text" id="mye" name="email" disabled></th>
        </tr>
        <tr>
            <th style="color: #E2E6E3;">Mesajınız:</th>
            <th><input type="text" id="mym" name="mesaj" disabled></th>
        </tr>
        <tr>
            <th colspan="2"><button id="mybutton">Geri Dön</button></th>
        </tr>
    </table>
</body>
</html>