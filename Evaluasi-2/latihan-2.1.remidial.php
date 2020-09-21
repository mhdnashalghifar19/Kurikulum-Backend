<?php 

    class Pendaftaran{
            public static $santri = [
                [
                    'nik' =>'A001',
                    'name' => 'Fadil'
                ],
                [
                    'nik' =>'A002',
                    'name' => 'Fauzil'
                ]
            ];
    
            public static function tambahData(){
                echo "==========================\n";
                echo " Tambah Data Santri Baru  \n";
                echo "==========================\n";
    
                echo "Input NIK : ";
                $nik = trim(fgets(STDIN));
                echo "Input Nama : ";
                $name = trim(fgets(STDIN));
    
                $index = count(self::$santri);
    
                self::$santri[$index]['nik'] = $nik;
                self::$santri[$index]['name'] = $name;
    
                print_r(self::$santri);
            }
        }
    
        class Pelayanan extends Pendaftaran{
            public function __construct($pilih){
                if($pilih == "update"){
                    $this->updateData();
                }elseif($pilih == "hapus"){
                    $this->hapusData();
                }   
            }
    
            public function updateData(){
                echo "=======================\n";
                echo " Ubah Data Santri Baru \n";
                echo "=======================\n";
    
                echo "DAFTAR SANTRI\n";
                print_r(parent::$santri);
                $data = parent::$santri;
    
                echo "Inpukan NIK data yang ingin diubah = ";
                $nik = trim(fgets(STDIN));
                foreach($data as $key => $value){
                    if($data[$key]['nik'] == $nik){
                        echo "Input Nama Baru = ";
                        $data[$key]['name'] = trim(fgets(STDIN));
                    }
                }
                print_r($data);
                parent::$santri = $data;
            }

            public function hapusData(){
                echo "========================\n";
                echo " Hapus Data Santri Baru \n";
                echo "========================\n";
                
                echo "DAFTAR SANTRI\n";
                print_r(parent::$santri);
                $data = parent::$santri;

                echo "Inputkan NIK data yang ingin di hapus = ";
                $nik = trim (fgets(STDIN));
                foreach ($data as $key => $value){
                    if ($data[$key]['nik'] == $nik){
                        unset($data[$key]);
                    }
                }
                $data = array_slice($data,0,count($data));
                print_r($data);
                parent::$santri = $data;
            }
        }

            $kondisi = true;
            while ($kondisi){
                echo "==================================\n";
                echo "  Sistem Pendaftaran Santri Baru  \n";
                echo "==================================\n";
               
                echo "==MENU==\n";
                echo "1.Tambah Data Baru \n";
                echo "2.Ubah Data \n";
                echo "3.Hapus Data \n";
                echo "==Pilih Menu==\n";
                $menu = (int) trim(fgets(STDIN));
                
            
            switch ($menu) {
                case 1:
                    Pendaftaran::tambahData();
                    break;
                
                case 2:
                    $layanan = new Pelayanan("update");
                    break;
    
                case 3:
                    $layanan = new Pelayanan("hapus");
                    break;  
    
                default:
                    echo "MENU YANG ANDA INPUT TIDAK TERSEDIA\n";
                    break;
            }

            echo "\nApakah Anda masih ingin menjalankan program ? (y/n)";
            $pilih = trim(fgets(STDIN));
            if($pilih == 'n'){
                $kondisi = false;
            }
        }
        
?>       