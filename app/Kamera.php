<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamera extends Model
{
    //
    protected $fillable = ['gambar','merk_kamera','harga_sewa'];

    public function detail_sewa()
    {
    	return $this->hasMany('App\Detailsewa');
    }
}
