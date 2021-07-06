<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_parent';
    use HasFactory;
}
