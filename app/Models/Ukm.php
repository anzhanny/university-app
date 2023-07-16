<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    use HasFactory;
    protected $table = 'ukm';
    protected $fillable = ['no','nm_ukm','activity_date','activity_place'];
    protected $dates = ['created_at','updated_at'];
}
