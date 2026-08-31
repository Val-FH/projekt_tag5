<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anmeldung extends Model
{
    protected $fillable = [
        'vorname',
        'nachname',
        'email',
        'kurs', 
        'teilnahme',
        'startdatum',
        'bemerkung',
        'interessen',
        'datenschutz'
    ];

    protected $casts = [
        'startdatum' => 'date'
    ];
}
