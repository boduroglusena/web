<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders-4</title>
</head>
<body>
    <h3> Php'de Diziler</h3> 
    <ol>
         <li> Dizi oluşturmak için array() fonksiyonu veya [] kullanılabilir.</li> 
         <li> Dizi içerisinde farklı türden bir çok değer bulunabilir. (int , string, double, obje)(1, 2, 3, "ahmet","125,20")</li>
         <li> Echo $diziAdi il dizi içeriği ekrana yazdırılamaz. Array to string conversion hatası verir. Fakat dizinin adı bir elamanı "echo $diziADİ [3]" şeklinde yazdırılabililr.</li>
         <li> Dizin içerisindeki string ifadeler çift tırnak ("") içerisinde yazılır.</li>
         <li> Dizinin elamnalrı virgül (,)ile ayrılır.</li>
         <li> Dizin içerisindeki int ifadeler direkt  yazılabilir.</li>
         <li> Dizinin içerisine indisler varsayılan olarak 0'dan başlar.</li>
         <li> Dizilier içerisinde diziler tanımlanabilir.</li>
    </ol>
    <?php

    $dizi1 = array(1, 2, 3, "Alican", "Ocak", "Şubat");
    $dizi2 = [1, 2, 3, "Alican"];

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "dizinin 1. elamanı:" . $dizi1[1] . "<br>";
    echo "dizinin 1. elamanının türü :" .gettype( $dizi1[1]) . "<br>";

    echo "dizinin 5. elamanı:" . $dizi1[4] . "<br>";
    echo "dizinin 5. elamanının türü :" .gettype( $dizi1[4]) . "<br>";

    echo "Dizinin 0. İndisi: <b> $dizi1[0] </b> <br>";
    echo "Dizinin 1. İndisi: <b> $dizi1[1] </b> <br>";
    echo "Dizinin 2. İndisi: <b> $dizi1[2] </b> <br>";
    echo "Dizinin 3. İndisi: <b> $dizi1[3] </b> <br>";
    echo "Dizinin 4. İndisi: <b> $dizi1[4] </b> <br>";
    echo "Dizinin 5. İndisi: <b> $dizi1[5] </b> <br>";

    /* dizinin içeriğinin forech döngüsü ile yazdırılması. */

    echo "<h4> Dizinin forech döngüsü ile yazdırılması-1 </h4>";
    foreach ($dizi1 as $eleman) {
       echo " $eleman <br>";
    }

    echo "<h4> Dizinin forech döngüsü ile yazdırılması-2 </h4>";
    foreach ($dizi1 as $anaktar => $deger ) {
       echo " $anaktar - $deger <br>";
    }
     
    /* dizinin içeriğinin for döngüsü ile yazdırılması. */

    echo "<h4> Dizinin for döngüsü ile yazdırılması-2 </h4>";

    for ($i=0; $i < count($dizi1) ; $i++) { 
       echo "$i: $dizi1[$i] <br>";
    }

    $sayilar = array(1, 2, 3, 4, 5);

    $sayilar = array(
        array(1, 2, 3, 4, 5), 
        array(10.5, 3.2, 1.7)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";


    echo "sayılar dizisinin içerisindeki dizinin ikinci elemanı: " . $sayilar[1][1] . "<br>";
    echo "sayılar dizisinin içerisindeki dizinin ikinci elemanı: " . $sayilar[0][2] . "<br>";

    echo "**************************************<br>";

    $sayilar2 = array(
        "Intager" => array(1, 2, 3, 4, 5), 
        "Double"  => array(10.5, 3.2, 1.7)
    );

    echo "<pre>";
    print_r($sayilar2);
    echo "</pre>";


    echo "sayılar dizisinin içerisindeki dizinin ikinci elemanı: " . $sayilar2["Intager"][1] . "<br>";
    echo "sayılar dizisinin içerisindeki dizinin ikinci elemanı: " . $sayilar2["Double"][2] . "<br>";

    echo "**************************************<br>";


    $bilgiler = array(
        "id"       => 1,
        "adi"      => "Ahmet",
        "soyadi"   => "erimez",
        "gsm"      => "5387569845",
        "cinsiyet" => "erkek",
        "yas"      => 30
    );

    echo " $bilgiler[adi] $bilgiler[soyadi] Hoşgeldiniz. <br> ";
    echo   $bilgiler["adi"] . " ". $bilgiler["soyadi"] . "Hoşgeldiniz." ;

    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";

    foreach ($bilgiler as $bilgi) {
       echo $bilgi ."-";
    } 



    echo "<br><br><br><br><br><br><br>";
    $bilgi = str_split($bilgiler["gsm"],3);
    foreach ($bilgi as > $value) {
        echo $value . " ";
    }


    

    
    
        
   

    
    
    
    
    
    
    
    ?>
</body>
</html>