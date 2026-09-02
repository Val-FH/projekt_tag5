<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kurse extends Model
{
    protected $fillable = [
        'bezeichnung', 'beschreibung'
        ];

    public function anmeldung(){
        return $this->hasMany(Anmeldung::class, 'kurses_id');
    }
}
