<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailsewa extends Model
{
    //
    protected $fillable = ['kamera_id','tanggal_sewa','nama_customer','jenis_kelamin','alamat','no_telepon','no_ktp','jumlah_hari'];

    public function Kamera()
    {
    	return $this->belongsTo('App\Kamera');
    }
}
