<?php

use Illuminate\Database\Seeder;
use App\Detailsewa;
use App\Kamera;
class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample kamera
        $kamera1 = Kamera::create(['gambar'=>'','merk_kamera'=>'Canon Eos 5000D','harga_sewa'=>'100000']);

        //sample detailsewa
        $sewa1 = Detailsewa::create(['kamera_id'=>'1','tanggal_sewa'=>'2017-08-08','nama_customer'=>'Risma','jenis_kelamin'=>'perempuan','alamat'=>'banjaran','no_telepon'=>'089620062225','no_ktp'=>'0004044988','jumlah_hari'=>'3']);
    }
}
