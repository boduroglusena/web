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
?>
<table border="1">
    <tr>
        <td>#id</td>
        <td>#adı</td>
        <td>#soyadı</td>
        <td>#yas</td>
        <td>#bolum</td>
        <td>#dersler</td>
        <td>#sınıf</td>
         <td>#memleket</td>
       
    </tr>
  <tr>
      <td><?php echo $ogrenciDetayları["ogrt1"]["ıd"]     ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt1"]["adı"]    ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt1"]["soyadı"] ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt1"]["bolum"]  ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt1"]["yas"]    ?> </td>
      <td> <?php for ($i=0; $i < 3; $i++) {
               echo $ogrenciDetayları["ogrt1"]["dersler"][$1];
               echo "<br>";
          
      } ?></td>
      
      
  </tr>

  <tr>
      <td><?php echo $ogrenciDetayları["ogrt2"]["ıd"]     ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt2"]["adı"]    ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt2"]["soyadı"] ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt2"]["bolum"]  ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt2"]["yas"]    ?> </td>
      <td> <?php for ($i=0; $i < 3; $i++) {
               echo $ogrenciDetayları["ogrt2"]["dersler"][$1];
               echo "<br>";
          
      } ?></td>
      
      
  </tr>

  <tr>
      <td><?php echo $ogrenciDetayları["ogrt3"]["ıd"]     ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt3"]["adı"]    ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt3"]["soyadı"] ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt3"]["bolum"]  ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt3"]["yas"]    ?> </td>
      <td> <?php for ($i=0; $i < 3; $i++) {
               echo $ogrenciDetayları["ogrt3"]["dersler"][$1];
               echo "<br>";
          
      } ?></td>
      
      
  </tr>

  <tr>
      <td><?php echo $ogrenciDetayları["ogrt1"]["ıd"]     ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt1"]["adı"]    ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt1"]["soyadı"] ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt1"]["bolum"]  ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt1"]["yas"]    ?> </td>
      <td> <?php for ($i=0; $i < 3; $i++) {
               echo $ogrenciDetayları["ogrt1"]["dersler"][$1];
               echo "<br>";
          
      } ?></td>
      
      
  </tr>


</table>
</body>
</html>