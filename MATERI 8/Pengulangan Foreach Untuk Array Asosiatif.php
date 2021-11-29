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
