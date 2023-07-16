<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    protected $table = 'lecturer';
    protected $fillable = ['no','nip','name','addres','religion','date_year','gender','tertiary_education'];
    protected $dates = ['created_at','updated_at'];
}
