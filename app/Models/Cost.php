<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;
    protected $table = 'cost';
    protected $fillable = ['nm_major','up3','sdp2','bpp'];
    protected $dates = ['created_at','updated_at'];
}
