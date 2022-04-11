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
   "ogrt1" => array(
    "id"        =>1,
    "adi"       =>"havva",
    "soyadı"    =>"yıldız",
    "bolum"     =>"bilgisayar",
    "yas"       => "22",
    "dersler"   =>array(
        "web programlama",
        "veri tabanı",
        " mobil programlama",
    ),
    "sınıf"=> 2,
    "memleket"=>"izmir",
        
    ),
    "ogrt2" => array(
    "id"        =>2,
    "adi"       =>"havva",
    "soyadı"    =>"yıldız",
    "bolum"     =>"bilgisayar",
    "yas"       => "22",
    "dersler"   =>array(
        "web programlama",
        "veri tabanı",
        " mobil programlama",
    ),
    "sınıf"=> 2,
    "memleket"=>"izmir",
    ),
    "ogrt3" => array(
    "id"        =>3,
    "adi"       =>"havva",
    "soyadı"    =>"yıldız",
    "bolum"     =>"bilgisayar",
    "yas"       => "22",
    "dersler"   =>array(
        "web programlama",
        "veri tabanı",
        " mobil programlama",
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
       
    </tr>
  <tr>
      <td><?php echo $ogrenciDetayları["ogrt1"]["id"]     ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt1"]["adi"]    ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt1"]["soyadı"] ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt1"]["bolum"]  ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt1"]["yas"]    ?> </td>
      <td> <?php for ($i=0; $i < 3; $i++) {
               echo $ogrenciDetayları["ogrt1"]["dersler"][$i];
               echo "<br>";
          
      } ?></td>
      
      
  </tr>

  <tr>
      <td><?php echo $ogrenciDetayları["ogrt2"]["id"]     ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt2"]["adi"]    ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt2"]["soyadı"] ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt2"]["bolum"]  ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt2"]["yas"]    ?> </td>
      <td> <?php for ($i=0; $i < 3; $i++) {
               echo $ogrenciDetayları["ogrt2"]["dersler"][$i];
               echo "<br>";
          
      } ?></td>
      
      
  </tr>

  <tr>
      <td><?php echo $ogrenciDetayları["ogrt3"]["id"]     ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt3"]["adi"]    ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt3"]["soyadı"] ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt3"]["bolum"]  ?> </td>
      <td><?php echo $ogrenciDetayları["ogrt3"]["yas"]    ?> </td>
      <td> <?php for ($i=0; $i < 3; $i++) {
               echo $ogrenciDetayları["ogrt3"]["dersler"][$i];
               echo "<br>";
          
      } ?></td>
      
      
  </tr>




</table>
</body>
</html>