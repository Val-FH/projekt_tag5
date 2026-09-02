<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anmeldung extends Model
{
    protected $fillable = [
        'vorname',
        'nachname',
        'email',
        'kurses_id', 
        'teilnahme',
        'startdatum',
        'bemerkung',
    ];

    protected $casts = [
        'startdatum' => 'date'
    ];
    public function kurs()
    {
        return $this->belongsTo(Kurse::class, 'kurses_id');
    }
    public function interest()
    {
        return $this->belongsToMany(Interest::class, 'kurses_id');
    }
}
