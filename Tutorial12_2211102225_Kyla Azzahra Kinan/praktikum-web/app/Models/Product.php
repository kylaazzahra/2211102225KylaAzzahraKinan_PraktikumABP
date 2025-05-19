<?php

/*
Nama : Kyla Azzahra Kinan
Nim : 2211102225
*/


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nama'];

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
}
