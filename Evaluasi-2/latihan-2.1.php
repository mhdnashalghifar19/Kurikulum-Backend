<?php

class PendaftaranSantriGontor{
   protected $dataSantri = [
      [
         'User ID'=>'M-10',
         'Nama'=>'Fadil'
      ],
      [
         'User ID'=>'M-11',
         'Nama'=>'Fahri'
      ],
   ];

   public function tambahdatasantri(){
      $i=count($this->dataSantri);
      echo "Input ID Santri = ";
      $this->dataSantri[$i]['User ID']=trim(fgets(STDIN));
      echo "Input Nama Santri = ";
      $this->dataSantri[$i]['Nama']=trim(fgets(STDIN));
      print_r ($this->dataSantri);

   }
}

class PendaftaranSantriBaru extends PendaftaranSantriGontor{
      public $daftar_santri = [
         'Nama'   =>'Rahmat'
      ];
}


