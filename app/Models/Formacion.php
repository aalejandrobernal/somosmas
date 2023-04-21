<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{
    protected $guarded=['id','update_at'];
    protected $table = 'Formaciones';
    use HasFactory;
}
