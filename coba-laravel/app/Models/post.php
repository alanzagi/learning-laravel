<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Berfungsi agar field selain 'id' dapat diisi sekaligus menjaga agar id tidak ditulis
    protected $guarded = ['id'];
}
