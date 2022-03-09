<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ders-1</title>
</head>
<body>
     <!-- html yorum satırı -->   

     <?php
     /*  açıklama satırıbloğu( çoklu satır kullanılabilir) */ 

     // tek satır açıklma için kullanılır

     /* kullanılan komut:
      echo: ekrana yazdırma işlemini yapar
           komut içerisinde html etiketleri kullanılabilir.
           çift yada tek tırnak kulllanılabilir
           çift tırnqak ile kullanıldıpında içiresindeki değişkenlerin içeriğini ekrana yazar.
           nokta operatörü ile birleştirme işlemi yapılabilir
           ters slash(/) kaçış karakteridir. özel ifadelerden önce kullanılır


      */

     echo"<h3> Adnan Menderes Üniversitesi</h3>";
     echo"<h4> Aydın Meslek Yüksekokulu</h4>";
     echo" bilgisayar mühendisiği " . " aymes";
     echo" <br>bilgisayar mühendisiği " . "<br>  aymes";

     echo "<hr> <h4> değişken tanımlama</h4>";
     echo"<ol>
         <li> deşken ismimleri $ ile başlar</li>
         <li> değşken isimmleri sayısal ifadeler ile başlayamaz<li>
         <li> değişken isimlerind boşluk kullanılmaz. iki kelime birinci_sinif birincisinifbirinci-sinif örnekleri kulanılabilir</li>
         <li> değişken isimleri küçük-büyük harfe uyarlıdır.\$sayi !=\$sayi</li>
         <li> değişke ismi, değişkenin taşıdığı ifade etmeli.</li>
         <li> değişken içeriğinde çift tırnak veya tek tırnak kulllanılabilir </li>
         <li> değişken içerisinde sayısal bir ifade varsatırnak kullanmak gerekli değildir </li>
         <li> değişken içerisindeki ekrena echo komutu ile kulanılabilir </li>

     </ol>";
     echo" <hr> <h4> Değişken Tanımlama Örnekleri  </h4>";
     $isim = "ahmet";
     $soyisim ="erimez";
     $gsm ="121231123";

      echo $isim ."<br>";
      echo "$soyisim $gsm";
      
      echo" <hr> <h4> uygulama  </h4>";
     
      $üniversite="Adnan Menderes Üniversitesi";
      $isim = "senanur";
      $soyisim ="boduroglu";
      $gsm ="216029019";

     ?> 
       <form action="">
           <label for="üniversite">üni:</label>
           <input type="text" name="" value="<?php echo $üniversite;?>"  id="üniversite"  disabled > <br>

           <label for="isim">isim:</label>
           <input type="text" name="" value="<?php echo $isim;?>"  id="isim "   disabled> <br>

           <label for="soyisim">soyisim:</label>
           <input type="text" name="" value="<?php echo $soyisim;?>"  id="soyisim "   disabled> <br>

           <label for="gsm">gsm:</label>
           <input type="text" name="" value="<?php echo $gsm;?>"  id="gsm "   disabled> <br>



       </form>

</body>
</html>