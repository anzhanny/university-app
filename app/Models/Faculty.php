<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $table = 'faculty';
    protected $fillable = ['no','nm_fac','amount_lecturer','amount_student','amount_major'];
    protected $dates = ['created_at','updated_at'];
}
