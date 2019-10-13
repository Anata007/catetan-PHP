<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>catetan</title>
  </head>
  <body>

    <?php

    function jarak(){
      echo "<br>";
    };
      // <------KOMENTAR DAN VARIABEL----->
      // dalam php komentar dapat ditulis menggunakan [// atau /**/]

      // aturan penulisan variabel
      // 1. diawali dengan tanda dollar
      // 2. tidak boleh diawali dengan angka

      // syntax penulisan
      $a = "contoh";

      // Cara summon
      echo $a ;
      echo "<br>";
      echo "text sembarang ".$a." text sembarang";
      echo "<br>";

      jarak();
     //<-------- METODE MATH DAN METODE STRING------->
     /*
     METODE MATH
     1. round       -> membulatkan
     2. rand(x, y)  -> acak
     3. max         -> maksimal
     4. min         -> minimal
     */
     // syntax metode math
     $math1 = 2.34;
     $math2 = 32;
     $math3 = 1000;
     echo round($math1);
     echo "<br>";
     echo rand(2, 17);
     echo "<br>";
     echo max($math1, $math2, $math3);

     jarak();
     jarak();
     /*
     METODE STRING
     strlen()                              -> jumlah huruf (spasi dihitung)
     str_word_count()                      -> jumlah kata
     str_replace(find, replace, $variabel) -> ngganti kata
     */
     // syntax
     $b = "halo indonesia";
     print str_word_count($b);
     jarak();
     print strlen($b);
     jarak();
     print str_replace("halo", "hai", $b);

     jarak();
     jarak();

     // <--------ARRAY------>
     // cara mendefinisikan array
     $array1 = array("value3", "value1", "value4", "value2");
     // atau
     $array2 = ["value5", "value6", "value7", "value7" ];

     //output
     print_r($array1);
     jarak();
     print_r($array2);
     jarak();
     echo $array1[2];

     jarak();
     jarak();

     /* <-------METODE ARRAY-->
     1. array_unique()  -> array yang unik (tanpa dobel)
     2. array_reverse() -> mengurutkan secara terbalik urutan array
     3. shuffle()       -> random
     4. count()         -> isi array
     5. sort()          -> mengurutkan array sesuai abjad
     */
     print_r(array_reverse(array_unique($array2)));
     jarak();
     shuffle($array1);
     print_r($array1);
     jarak();
     sort($array1);
     print_r($array1);
     jarak();
     echo count($array1);

    /* <-------ASSOCIATIVE ARRAY + Method ----->

      $a_array = array ("nama"   => "alif",
                 "kelas" => "XMIPA6",
                 "umur" => 9;);
      method :
      1. array_values()
      2. array_keys()
      3. array_merge()
    */
    jarak();
    jarak();

    $a_array1 = array ("nama"   => "alif",
               "kelas" => "XMIPA6",
               "umur" => 9);
    $a_array2 = array ("bulan lahir"   => "juli",
              "ibu" => "atik winarni",
              "jumlah ibu" => 1);

    print_r(array_values($a_array1));
    jarak();
    print_r(array_keys(array_merge($a_array1, $a_array2)));
    jarak();
    print_r(array_keys($a_array1));

    jarak();
    jarak();

    // <---------MULTI DIMENSI ARRAY-------->
    $m_array = array( array("aku", "saya", "penulis"),
                      array("kamu", "engkau", "kalian"),
                      array("dia", "beliau", "mereka"));

    print_r($m_array);
    jarak();
    echo $m_array[2][1];
    // digit pertama menandakan array vertikal. digit kedua yg horizontal

    jarak();
    jarak();

    // <-----for loop------>
    // for(inisialisasi; batas; increment/decrement){ baris kode};
    for($i= 0; $i<5; $i++){
      echo $m_array[0][$i].jarak();
    }; //<--- itu menampilkan array secara banyak

     // bilangan fibonacci = 2 3 5 8 13 21 34 55
     $f = 2;
     $z = 3;
     echo $f." ".$z." ";
     for($i = 0; $i<6; $i++){
      $o = $f + $z;
      echo $o." ";
      $f = $z;
      $z = $o;
    };

    jarak();
    jarak();

    // <------foreach------->
    // digunakan untuk mengeluarkan array
    // foreach($variabel_pilihan as $variabel_untuk_print);
    foreach($array1 as $p){
      echo $p." ";
    };
    jarak();
    // <----foreach associativ----->
    // digunakan untuk mengeluarkan value dan atau key array
    // foreach($variabel_pilihan as $variabel_untuk_print_key => $variabel_untuk_print_value);
    foreach( $a_array1 as $key=> $value){
      echo $key.jarak();
    }

    jarak();
    jarak();

    // while dan do while
    /*
    WHILE
    $variabel_inisialisasi = nilai;
    while (syarat){
      apa yang harus dilakukan;
      metode (increment/decrement);
    };

    DO WHILE
    $variabel inisialisasi= nilai;
    do{
      hal yg wajib dilakukan
      metode(increment/decrement);
      }while(batas/syarat);



    */
    $x = 1;
    while ($x <= 10){
      echo $x." ";
      $x++;
    }

    jarak();

    $y= 5;
    do{
      echo "kui".$y." ";
      $y++;
    }while($y < 8);

    jarak();
    jarak();

    // <-----------BOOLEAN-------->
    // tipe data yang menunjukkan value benar atau salah
    // true = benar
    // false = salah
    // !true = salah

    // <--------if else------->
    // if(syarat){hal yang harus dilakukan;};
    /*
    operator logika
    1. ==  -> sama dengan, tanpa memperhatikan tipe data
    2. === -> sama dengan, dengan memperhatikan tipe data
    3. <=  -> kurang dari samadengan
    4. >=  -> lebih dari sama dengan
    5. <   -> kurang dari
    6. >   -> lebih dari
    */
    $angkaif = 4;
    if($angkaif == 4){
      echo "angkanya sama dengan".$angkaif;
    };

    jarak();
    jarak();

    $uangku = 4000;
    $uang_muson = 1000;
    $headset = 7000;
    if($uang_muson > $headset){
      echo "muson beli headset";
    }elseif( $uangku > $headset){
      echo "alif beli headset";
      jarak();
      if ($uangku*2 >= $headset){
        echo "boleh beli 2";
      }else{
        echo "tidak bisa beli 2";
      }
    }else {
      echo "rasah neko2 su";
    }

    jarak();
    jarak();

    // && dan || -> syarat pada if

    $rokok = 7000;
    $uangmu = 3000;
    $umurmu = 13;
    $tabunganmu = 2000;

    if( $uangmu > $rokok && $umurmu > 18){
      echo "boleh beli rokok";
    }else {
      echo "ga boleh beli cok";
    }

    jarak();

    if($tabunganmu > $rokok || $uangmu > $tabungan){
      echo "boleh beli rokok";
    }else{
      echo "g oleh lah cok";
    };


    jarak();
    jarak();

    // <----switch case---->
    $nama9 = "alisf";
    switch($nama9){
      case "muson";
        echo "namanya muson";
        break;
      case "alif";
        echo "namanya alif";
        break;
      case "mama";
        echo "namanya mama";
        break;
      default:
        echo "ga ada yg bener";
    }

    jarak();
    jarak();

    //<---- fungsi ---->
    function alpha($text){
      echo "papa"." ".$text;
    };

    alpha("romea");

    jarak();
    jarak();

    // <------return--------
    function perkalian($h, $j){
      $hasil = $h*$j;
      return $hasil;
    }

    $hasil2 = 10*perkalian(5,4);
    echo $hasil2;

    jarak();
    jarak();

    // <-----SCOPE VARIABEL------->
    $s_a = 20;
    $s_b = 40;

    function pertambahan(){
      global $s_a, $s_b;
      $s_c = $s_a + $s_b;
      echo $s_c;
    };

    pertambahan();

    jarak();
    jarak();

    // anonymous function
    $anonim = function($parmet){
      echo $parmet;
    };

    $binonim = $anonim; //anonymous function dapat diduplikasi dengan variabel lain

    $binonim("selamat siang"); //summon fungsi berbentuk variabel harus pake "()"

    jarak();
    jarak();

    // call back function
    $calle = function($func1){
      echo "selamat".$func1;
    };
    // error display
    // phpinfo();

    jarak();
    jarak();

    // die and var dump

    var_dump($array1);
    // die();

    // RAMPUNG CIEEEEE RAMPUNG





    ?>
  </body>
</html>
