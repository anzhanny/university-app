<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    use HasFactory;
    protected $table = 'krs';
    protected $fillable = ['no','cd_subject','cd_major','nim'];
    protected $dates = ['created_at','updated_at'];
}
