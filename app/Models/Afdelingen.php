<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Afdelingen extends Model
{
    protected $table = 'afdelingen';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
    ];

    public function allPakkettype(){
        return $this->hasMany('\App\Models\Pakkettype');
    }
}

