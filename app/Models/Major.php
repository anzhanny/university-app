<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    protected $table = 'major';
    protected $fillable = ['no','cd_major','nm_major'];
    protected $dates = ['created_at','updated_at'];
}
