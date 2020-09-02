<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    // protected $table = 'testimonies';
    protected $fillable = ['nama', 'jabatan','testimoni', 'foto'];
}