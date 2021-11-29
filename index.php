<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; ?> 
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

    <?php
    echo "<h1>Dasar PHP : HTML dan PHP(materi 4)</h1>";
    echo  "Halo <br>";
    echo  "Member";
    ?>
semuanya!
  
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <?php
        $nama = "Novisia Koding 123";
        $_123 = "Dasar PHP : Komentar dan Variabel(Materi 4)";

        echo "<h1>$_123</h1>";
        echo "Halo ". $nama ."<br>";
        echo "Member";
      ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Novisia  Coding";
    $nama2 = 'Materi PHP Pemula - Tipe Data Dan String(Materi 4)';

     echo "<h1>$nama2</h1>";
    echo "Selamat datang di Novisia koding"; 
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Novisia Coding";
    $nama2 = 'Materi PHP Pemula - Tipe Data Integer dan float(Materi 4)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama <br>"; 

    $angka  =1000;
    $angka2 =100.123;

    echo $angka + $angka2;
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Novisia Coding";
    $nama2 = ' Materi PHP Pemula - Metode Matematika(Materi 5)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    echo "angka hari ini adalah ". min($angka3, $angka, $angka2)
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Novisia Coding";
    $nama2 = 'Materi PHP Pemula - Operator Matematika(Materi 5)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2;

    $angka *= $angka2;

    echo $angka;
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Novisia Coding";
    $nama2 = ' Materi PHP Pemula: Metode Penanganan String(Materi 5)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    echo "angka hari ini adalah ". min($angka3, $angka, $angka2)
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

  <?php
  $nama = "Belajar Dasar Dasar PHP";
  $_123 = "Materi PHP Pemula: Metode String(Materi 5)";

  echo "<h1>$_123</h1>";
  echo "Halo ". $nama."<br>";
  echo "Member";
  ?>
  </body><html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Novisia Coding";
    $nama2 = 'Bermain Coding';

    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    $text = "Hai Semuanya Di sini";
    echo str_repeat(str_replace("Hai","Hello" , $text), 10);
   ?>
  </body>
</html>
</html> 

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1>Materi PHP Pemula - Perkenalan Array(Materi 6)</h1>

  <?php
   
    $kotak  =array('anjing', 'kurakura', 'koala');
    $nama   =['Vivi', 'Mongryong', 'Toben'];

    
    print_r(  $kotak);
    echo $nama[0]

  ?>
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Associative Array(Materi 6) </h1>

    <?php 

    $data = ['nama' => 'Novisia',
             'umur'=>21,
             'sifat'=>'humble'];

    $data ['nama'] = " Oktavia Novisia Nelo";
    echo"Nama adalah".$data ['nama'];
      
      
    ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1>Materi PHP Pemula -Metode Array(Materi 6)</h1>

  <?php
    $angka  =[5, 10, 2, 1, 6];
    $kotak  =array('anjing', 'kurakura', 'koala');
    $nama   =['Vivi', 'Mongryong', 'Toben'];

    sort($angka);
    print_r( $angka);
     

  ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <h1> Array Multi Dimensi(Materi 7) </h1>
  <?php
    $data = array(
      array("programmer", "20", "males"),
      array("designer", "20", "rajin"),
      array("manager", "20", "males banget"),
    );

    print_r($data);

    $data[2][0] ="proyek manager";
    echo $data[2][0];


  ?>
  </body>
</html> 

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1> Associative Array lanjutan(Materi 7) </h1>
  <?php
    $data = array("nama" =>"ocha",
                  "umur" =>22,
                  "status" =>"mahasiswa"
    );

     $data2 = array("suami" =>"belum ada",
                  "laptop" =>"hp","Bias" => "Byun Baekhyun","Fandom" => "Exo-L"
    );
    print_r( array_merge($data, $data2));

  ?>
  </body>
</html> 

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Pengulangan For dan Array(Materi 8)</h1>

    <?php 

    $hewan = ['anjing','babi','cicak','domba'];

    for ($i=0; $i < count($hewan); $i++)
    {
      echo "-----------------";
      echo $hewan[$i];
      echo "----------------- <br>";
    }
    ?>
  </body>
</html>

<html>
  <head>
    <meta charset="utf=8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Pengulangan For Looping(Materi 8)</h1>

    <?php 

    for ($i=0; $i<5; $i++)
    {
      echo "-----------------";
      echo "Novisia koding $i";
      echo "----------------- <br>";
    }
    ?>
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Pengulangan Foreach untuk Array asosiatif(Materi 8)</h1>

    <?php 

   
    $data = ['nama' => 'Novisia',
             'umur'=>22,
             'sifat'=>'humble'];

      foreach($data as $key => $value){
        echo $value ."<br>"; 
      }
      
    ?>
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1>Pengulangan Foreach untuk Array(Materi 8)</h1>

    <?php 

    $hewan = ['anjing','babi','cicak','domba'];

    for ($i=0; $i < count($hewan) - 1; $i++)
    {
      echo "-----------------";
      echo $hewan[$i];
      echo "----------------- <br>";
    }

      foreach($hewan as $h){
        echo "-----------------";
        echo $h;
        echo "----------------- <br>";
    }
    ?>
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1>Pengulangan While dan Do While(Materi 8)</h1>

    <?php 
   $hewan = ['anjing','babi','cicak','domba','kuda'];
   
   $i = 5;

   do{
     echo '------';
     echo $hewan[$i]. "<br>";
     $i++;
   }while( $i < count($hewan));
    
  ?>
  </body>
</html>