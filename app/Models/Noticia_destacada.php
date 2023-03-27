<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia_destacada extends Model
{
    protected $table = 'Noticia_destacada';
    protected $guarded=['update_at'];
    use HasFactory;
}
