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
                  "laptop" =>"hp","bias"=>"Byun Baekhyun","Fandom" => "Exo-L"
    );
    print_r( array_merge($data, $data2));

  ?>
  </body>
</html> 
