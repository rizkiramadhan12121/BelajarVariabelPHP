<?php

   $siswapplg = [
      "nama" => ["Rizki","Dapid","Ronney","Taqy"],
      "materi" => ["PHP","C#","ABK","ABK 2"],
      "nilai" => [90,95,0,0], 
   ];

//  foreach ($siswapplg as $key => $value ) {
//     echo $siswapplg [$key][2];
//     echo "<br/>";
//  }

      foreach ($siswapplg as $key => $value ) {
      foreach ($value as $val) {
         echo $val;
         echo "<br/>";
}
         echo "<br/>";
}
