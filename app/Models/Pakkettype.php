<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pakkettype extends Model
{
    protected $table = 'pakkettype';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'afdeling',
        'pakkettype',
    ];
    
    public function pakketypeModel(){
        return $this->belongsTo("\App\Models\Afdelingen");
    }

    
}
