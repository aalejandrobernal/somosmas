<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Induccion extends Model
{
    protected $guarded=['id','update_at'];
    protected $table = 'Inducciones';
    use HasFactory;
}
