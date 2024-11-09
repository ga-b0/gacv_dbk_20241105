<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'persona';
    protected $primaryKey = 'id_persona';
    public $incrementing = true;
    public $timestamps = false;
}
