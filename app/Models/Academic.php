<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;
    protected $table = 'academic';
    protected $fillable = ['no','nim','nm_student','cd_subject','nm_subject','sks','semester','grade'];
    protected $dates = ['created_at','updated_at'];
}
