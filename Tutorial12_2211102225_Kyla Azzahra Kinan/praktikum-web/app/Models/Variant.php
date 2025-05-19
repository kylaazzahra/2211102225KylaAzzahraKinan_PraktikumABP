<?php

/*
Nama : Kyla Azzahra Kinan
Nim : 2211102225
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = ['variant_name'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
