<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kurse extends Model
{
    protected $fillable = ['bezeichnung', 'beschreibung'];

    public function anmeldungen(){
        return $this->hasMany(Anmeldung::class);
    }
}
