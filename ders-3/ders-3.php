<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


/*kuruk ve yığın veri yapılarının php üzerinde dizileri kullanarak örneendirmesi */ 

/*  uygulama rasgale üretilen sayının 50 den büyükse  
     gectiniz - notunuz : xx 
     50 den  küçükse 
     kaldınız notunuz: xx         uytgulamsı gerçekleştiriniz


*/
$not = rand(10, 100);
if ($not >= 50) {
    echo "geçtiniz notunuz";
} else {
    echo "kaldınız notunuz";
}
   
     echo "<h3> sık kullanılan string fonksiyonlar</h3>";

     $yazi =  "Aydın Adnan Menderes Üniversitesi";
     echo gettype($yazi);
     echo "<br> Değişken İçeriği: $yazi (" . gettype($yazi) . ")" ;

     /*içeriğin büyük harfle dönüştürülmesi */

     echo "<br> \$yazi içeriğin büyük harfle yazılması :" .  $buyuk_yazi = strtoupper($yazi);
     echo "<br> \$yazi içeriğin büyük harfle yazılması :" .  $buyuk_yazi =mb_strtoupper($yazi);


     /*içeriğin küçük harfle dönüştürülmesi */

     echo "<br> \$yazi içeriğin küçük harfle yazılması :" .  $kucuk_yazi = strtolower($yazi);
     echo "<br> \$yazi içeriğin küçük harfle yazılması :" .  $kucuk_yazi = mb_strtolower($yazi);

    /*içeriğin ilk harfinin büyük harfle dönüştürülmesi */
    echo "<br> \$yazi içeriğin ilk harfinin büyük harfle harfle yazılması :" .  $ilk_yazi = ucfirst($kucuk_yazi);
    

    /*içeriğin tüm kelimelerin ilk harfinin büyük harfle dönüştürülmesi */ 
    echo "<br> \$yazi içeriğin  tüm kelimelerin ilk harfinin,  büyük harfle harfle yazılması :" .  $kelime = ucwords($kucuk_yazi); 

    /*içeriğin harf sayısı  */ 
    echo "<br> \$yazi içeriğin  harf sayısı:" .  strlen($yazi);

    /* ascii char karşılığı  */
    echo "<br> ascii karakterleri: ";
    echo "<br>karakter karşışığı:" . chr(109);
    echo "<br>karakter karşışığı:" . chr(64);
      
    /* uygulama 32-127 char karşılıkları:  */
    for ($i = 32; $i <= 127; $i++){
        echo "$i-" .  chr($i) .  "-";
    }

    /* metnin parçalanarak diziye dönüştürülmesi (explode):  */
    $dizi = explode(" ", $yazi);
    echo "<br>";
    print_r($dizi);

     /* uygulama paragraftaki kelime ve cümle saylarını alt alta yazdırması  */

     $metin = "Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir
      hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler
      olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır.";

    $kelimlerDizisi = explode(" ", $metin);
    $cumlelerDizisi = explode(" ", $metin);

    echo "<br> kelime sayısı: " . count($kelimlerDizisi);
    echo "<br> cumle sayısı: " . count($cumlelerDizisi);

    /* uygulama 
    veri tabanından gelen sayı 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırın
     */
    echo "<br> ";
     $tarih = "2021-12-25";
     $yenitarih = explode("-", $tarih);
     echo "$yenitarih[2] - $yenitarih[1] - $yenitarih[0]";


     /*dizinin metne  dönüştürülmesi (implode):  */
     echo "<br> ";
     $aylar = ["ocak","subat","mart", "nisan", "mayıs"];
     print_r($aylar);
     $aylarString = implode(" ", $aylar);
     echo "<br> String: $aylarString";

     /*  verilen bir metnin belirtilen sayı kadara ayrılarak bir dizi içeriğigine aktarılması. Eğer sayı belirtilenmezse metni harf harf böler  */
     echo "<br> ";
     $iban = "TR0010002000300040005000";
     $ibanYeni = str_split($iban,4);
     print_r($ibanYeni);

     echo "<br> ";
     foreach($ibanYeni as $parca){
         echo "$parca";
     }

      


     











    ?>
</body>
</html>