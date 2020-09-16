<?php

class PerpusLipia{
    protected $dataBuku = [
    [   'isbn'=>'A-12',
        'judul'=>'cinta mati'
    ],
    [
        'isbn'=>'B-12',
        'judul'=>'cinta terlarang'
    ]

];

public function tambahBuku(){
    $i=count($this->dataBuku);

    echo "isbn = ";
    $this->dataBuku[$i]['isbn']= trim(fgets(STDIN));
    echo "judul = ";
    $this->dataBuku[$i]['judul']= trim(fgets(STDIN));
    print_r($this->dataBuku);
}
}

class PelayananPerpustakaan extends PerpusLipia{
    protected $dataPeminjaman = [
        [
            'nama'=>'leon',
            'judul buku'=>'love mati',
            'tanggal peminjaman'=>'19-09-99',
            'tanggal pengembalian'=>'19-10-99'
        ],
        [
            'nama'=>'alex',
            'judul buku'=>'love terlarang',
            'tanggal peminjaman'=>'19-11-99',
            'tanggal pengembalian'=>'19-12-99'
        ]
    ];
    protected $dataPengembalian = [];

public function dataPeminjaman(){
    $i=count($this->dataPeminjaman);

    echo "nama = ";
    $this->dataPeminjaman[$i]['nama']= trim(fgets(STDIN));
    echo "judul buku = ";
    $this->dataPeminjaman[$i]['judul buku']= trim(fgets(STDIN));
    echo "tanggal peminjaman= ";
    $this->dataPeminjaman[$i]['tanggal peminjaman']= trim(fgets(STDIN));
    echo "tanggal pengembalian = ";
    $this->dataPeminjaman[$i]['tanggal pengembalian']= trim(fgets(STDIN));
    print_r($this->dataPeminjaman);
}  

public function dataPengembalian(){
    $i=count($this->dataPengembalian);

    echo "nama = ";
    $this->dataPengembalian[$i]['nama']= trim(fgets(STDIN));
    echo "judul buku = ";
    $this->dataPengembalian[$i]['judul buku']= trim(fgets(STDIN));
    echo "tanggal peminjaman= ";
    $this->dataPengembalian[$i]['tanggal peminjaman']= trim(fgets(STDIN));
    echo "tanggal pengembalian = ";
    $this->dataPengembalian[$i]['tanggal pengembalian']= trim(fgets(STDIN));
    print_r($this->dataPengembalian);
    }  

}

$perpus = new PerpusLipia;
$layanan = new PelayananPerpustakaan;

echo "================================\n";
echo "| Pelayanan perpustakaan Lipia |\n";
echo "================================\n";
echo "1.Pendataan Buku \n";
echo "2.Peminjaman Buku \n";
echo "3.Pengembalian Buku \n";
echo "Silahkan Pilih Pelayanan ? \n";

$pilih= trim(fgets(STDIN));

switch ($pilih) {
    case 1:
        $perpus->tambahBuku();
        break;
    case 2:
        $layanan->dataPeminjaman();
        break;
    case 3:
        $layanan->dataPengembalian();
        break;
    
    default:
        echo "Pelayanan Tidak Tersedia !";
        break;
}
?>
