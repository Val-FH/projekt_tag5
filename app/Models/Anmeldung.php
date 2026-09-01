<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anmeldung extends Model
{
    protected $fillable = [
        'vorname',
        'nachname',
        'email',
        'kurse_id', 
        'teilnahme',
        'startdatum',
        'bemerkung',
        'interessen',
        'datenschutz'
    ];

    protected $casts = [
        'startdatum' => 'date'
    ];
    public function course()
    {
        return $this->belongsTo(Kurse::class);
    }
}
