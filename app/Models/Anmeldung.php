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
        'interest_id',
        'datenschutz'
    ];

    protected $casts = [
        'startdatum' => 'date'
    ];
    public function kurs()
    {
        return $this->belongsTo(Kurse::class);
    }
    public function interest()
    {
        return $this->belongsToMany(interest::class);
    }
}
