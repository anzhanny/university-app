<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khs extends Model
{
    use HasFactory;
    protected $table = 'khs';
    protected $fillable = ['no','cd_subject','nim','grade'];
    protected $dates = ['created_at','updated_at'];
}
