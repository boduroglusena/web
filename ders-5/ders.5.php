<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> php de dizilere devam </h3>
    <?php
       
    $isimler = array();
    $isimler[] = "gizem";
    $isimler[] = "emre";
    $isimler[] = "samet";
    $isimler[] = "sena";

    echo "<pre>";
    print_r($isimler);
    echo "</pre><hr>";

    $isimler2 = array();
    $isimler2["isim1"] = "gizem";
    $isimler2["isim2"] = "emre";
    $isimler2["isim3"] = "samet";
    $isimler2["isim4"] = "sena";
    $isimler2[] = "gülcan";


    echo "<pre>";
    print_r($isimler2);
    echo "</pre>";

    $ogrencidetay = array(
        "id"        => 1,
        "adi"       => "havva",
        "soyadı"    => "yıldız",
        "bolum"     => "Bilgisayar",
        "yas"       => 20,
        "dersler"   => array(
            "ders1" => "Web Proglama",
            "ders2" => "Veri Tabanı",
            "ders3" => "Mobil Proglama", 
        ),
        "sınıf"    => 2,
        "memleket" => "İzmir",
    );
    echo "<pre>";
    print_r($ogrencidetay);
    echo "</pre>";
    

 /* uygulama:
çıktı: havvanur isimli öğrencinin web proglama , veri tabanı, mobil uygulama dersleri vardır.
 
 */
echo $ogrencidetay["adi"] ." isimli öğrencinin " . $ogrencidetay["dersler"]["ders1"] . ", " . $ogrencidetay["dersler"]["ders2"] . ", " . $ogrencidetay["dersler"]["ders3"] . " dersleri vardır";


$ogrenciDetayları=array(
    array(
    "id"        =>1,
    "adi"       =>"havva",
    "soyadı"    =>"yıldız",
    "bolum"     =>"bilgisayar",
    "yas"       => "22",
    "dersler"   =>array(
        "ders1" =>"web programlama",
        "ders2" =>"veri tabanı",
        "ders3" =>" mobil programlama",
    ),
    "sınıf"=> 2,
    "memleket"=>"izmir",
        
    ),
    array(
    "id"        =>2,
    "adi"       =>"havva",
    "soyadı"    =>"yıldız",
    "bolum"     =>"bilgisayar",
    "yas"       => "22",
    "dersler"   =>array(
        "ders1" =>"web programlama",
        "ders2" =>"veri tabanı",
        "ders3" =>" mobil programlama",
    ),
    "sınıf"=> 2,
    "memleket"=>"izmir",
    ),
    array(
    "id"        =>3,
    "adi"       =>"havva",
    "soyadı"    =>"yıldız",
    "bolum"     =>"bilgisayar",
    "yas"       => "22",
    "dersler"   =>array(
        "ders1" =>"web programlama",
        "ders2" =>"veri tabanı",
        "ders3" =>" mobil programlama",
    ),
    "sınıf"=> 2,
    "memleket"=>"izmir",
    ),
);
echo"<pre>";
print_r($ogrenciDetayları);
echo"</pre>";


    /*
      yukarıdaki dizinin her elemanı bir öğrenci detayına karşılık gelmektedir
Bu öğrencilere ait detayları aşağıdaki şekilde bir tablo oluşturup içerisine yazdırınız.

#id   #adi     #soyadi     #bölüm       #dersler             #sınıf 
1     havva    yıldız      Bilgisayar   Web Programlama      2
                                        Veri Tabanı 
                                        Mobil Programlama
    
    */
    
    
    
    
    
    
    
    
    ?>
    <hr>
    <h3>Koşul İfadeleri (If-Else)</h3>
    <p>İf-Else Bloklarında öncelikle koşul belirtilir ve sonraki dallanma koşula göre devam eder.</p>


    <h5>Karşılaştırma Operatörleri</h5>
    <ol>
        <li> == ($a == $b) Eşit ise. (Genellikle Matematiksel bir karşılaştırma yapılır.)</li>
        <li> === ($a === $b) Denk ise. (Genellikle String bir karşılaştırma yapılır.)</li>
        <li> != ($a != $b) Eşit değil ise. (Genellikle Matematiksel bir karşılaştırma yapılır.)</li>
        <li> !== ($a !== $b) Denk değil ise. (Genellikle String bir karşılaştırma yapılır.)</li>
        <li> > ($a > $b) Büyük ise.</li>
        <li> >= ($a >= $b) Büyük veya eşit ise.</li>
        <li>
            < ($a < $b) Küçük ise.</li>
        <li>
            <= ($a <=$b) Küçük veya eşit ise.</li>

    </ol>

    <h5>Mantıksal Operatörler</h5>
    <ol>
        <li> ! (olumsuzsa) (!$a) --> $a'nın değeri False ise True döner. Aksini yapar olumsuz mu diye sorar. </li>
        <li> && - AND (ve) ($a && $b ) --> $a ve $b'nin değeri olumlu ise True döner, iki koşul da sağlanmak zorundadır. Koşullardan bir tanesi false dönerse genel değer False olur. </li>
        <li> || - OR (veya) ($a || $b) --> $a'nın veya $b'nin herhangi birisinin değeri olumlu ise sonuç True olarak döner. Herhangi birisinin koşulu sağlaması genel dönüşü True yapar. </li>
    </ol>

    <h4>Not:</h4>

    <ol>
        <li>Elseif sürekli tekrar eden sorgu bloğu açar.</li>
        <li>Else son kapanış koşuludur. (Herhangi bir şart belirtilmez. Hiçbir önkoşul gerçekleşmediğinde çalışacak son koşulu ifade eder.)</li>
    </ol>

    <?php

    /*     if (condition) {
        # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }else {
        # code...
    } */


    $sayi1 = 123;
    $sayi2 = 345;
    $metin = "Adü";

    /* Değer Varsa */
    if ($sayi1) {
        echo "<br>If bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı : $sayi1";
    }

    /* Değer Yoksa */
    if (!$sayi1) {
        echo "<br>If bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı";
    }

    /* eşitlik Varsa */
    if ($sayi1 == $sayi2) {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    } else {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    }

    /* eşitlik Yoksa Varsa */
    if ($sayi1 != $sayi2) {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    } else {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    }

    /* Denklik Varsa */

?>



</body>
</html>