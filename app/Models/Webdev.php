<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Webdev extends Model
{
    //
    protected $table = 'webdev';
    protected $fillable = ['framework', 'deskripsi'];
}
