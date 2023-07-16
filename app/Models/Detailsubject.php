<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailsubject extends Model
{
    use HasFactory;
    protected $table = 'detailsubject';
    protected $fillable = ['subject_id','lecturer_id','class_year'];
    protected $dates = ['created_at','updated_at'];
}
