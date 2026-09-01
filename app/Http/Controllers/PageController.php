<?php

namespace App\Http\Controllers;

use App\Models\Kurse;
use Illuminate\Http\Request;
use App\Models\Anmeldung;

class PageController extends Controller
{
// public array $kurse = [ 
 //   'PHP 101' => 'Php Grundlagenkurs',
 //   'SQL 101' => 'SQL Grundlagenkurs',
 //   'HTML 101' => 'HTML Grundlagenkurs',
 //   'CSS 101' => 'CSS Grundlagenkurs',
 //   'Laravel für Anfänger' => 'Laravel Grundlagenkurs'];

public function welcome(){
    return view('welcome' );
}
public function kontakt(){
    return view('kontakt' );
}
public function impressum(){
    return view('impressum' );
}
public function pinguine(){
    return view('pinguine' );
}

public function kurse(){
    return view('kurse', [
        'kurse' => Kurse::orderBy('bezeichnung')->get(),
    ]);
}

public function anmeldung(){
    return view('anmeldung', [
        'kurse' => Kurse::orderBy('bezeichnung')->get(),
    ]);
}
public function anmeldungAuswerten(Request $request){
    $request->validate([
        'vorname' => ['required', 'string', 'min:3', 'max:255'],
        'nachname' => ['required', 'string','min:2' ,'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'kurses_id' => ['required', 'exists:kurse,id'],
        'teilnahme' => ['required', 'in:vor_ort, online'],
        'startdatum' => ['nullable', 'date'],
        'bemerkung' => ['nullable', 'string','max:500'],
        'datenschutz' => ['required'],
        'interessen' =>['nullable', 'array'],
    ]);    

Anmeldung::create($request->only([
    'vorname',
    'nachname' ,
    'email',
    'kurses_id' ,
    'teilnahme',
    'startdatum',
    'bemerkung',
    'datenschutz' ,
]));
$kurse = Kurse::findOrFail($request->input('kurses_id'));

    return redirect('/danke')->with([
        'vorname' => $request->input('vorname'),
        'nachname' => $request->input('nachname'),
        'email' => $request->input('email'),
        'kurs' => $kurse->bezeichnung,
        'teilnahme' => $request->input('teilnahme'),
        'startdatum' => $request->input('startdatum'),
        'bemerkung' => $request->input('bemerkung'),
        'datenschutz' => $request->input('datenschutz'),
        'interessen' => $request->input('interessen', []),
    ]);
}

public function danke(){
    return view('danke');
}
public function anmeldungen(){
    $anmeldungen = Anmeldung::latest('id')->get();
    return view('anmeldungen', [
        'anmeldungen' => $anmeldungen,
    ]);
}

}
