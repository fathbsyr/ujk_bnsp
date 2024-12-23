<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jasaai extends Model
{
    //
    protected $table = 'jasa_ai';
    protected $fillable = [
        'produk_ai', 'deskripsi'
    ];
}
