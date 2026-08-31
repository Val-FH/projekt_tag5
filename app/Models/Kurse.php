<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kurse extends Model
{
    protected $kurse = [ 
        'PHP 101' => 'Php Grundlagenkurs',
        'SQL 101' => 'SQL Grundlagenkurs',
        'HTML 101' => 'HTML Grundlagenkurs',
        'CSS 101' => 'CSS Grundlagenkurs',
        'Laravel für Anfänger' => 'Laravel Grundlagenkurs'];

    
}
