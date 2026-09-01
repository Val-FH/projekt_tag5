<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = [
               'interessen'
    ];

    public function anmeldung(){
        return $this->belongsToMany(Anmeldung::class);
    }
}
