<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_eleve';
    use HasFactory;
}
