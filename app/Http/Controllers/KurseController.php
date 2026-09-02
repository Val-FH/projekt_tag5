<?php

namespace App\Http\Controllers;
use App\Models\Kurse;
use Illuminate\Http\Request;

class KurseController extends Controller
{
    public function index(){
    return view('kurse', [ 'kurse' => Kurse::orderBy('bezeichnung')->get()]);
}
public function show(Kurse $kurse)
{
    return view ('kurs' , ['kurs' =>$kurse]);
}
public function create(){
    return view('kurs_anlegen');
}
public function store(Request $request){
    $request->validate([
        'bezeichnung' => ['required', 'string', 'min:3', 'max:255'],
        'beschreibung' => ['required', 'string','max:500','min:10'],
    ]);
    Kurse::create($request->only([
        'bezeichnung',
        'beschreibung'
    ]));
    return redirect('/kurse');
}
public function edit(Kurse $kurse){
    return view('kurs_bearbeiten', ['kurs' => $kurse]);
}
public function update(Request $request, Kurse $kurse){
    $request->validate([
        'bezeichnung' => ['required', 'string', 'min:3', 'max:255'],
        'beschreibung' => ['required', 'string','max:500','min:10'],
    ]);
    $kurse->update($request->only([
        'bezeichnung',
        'beschreibung'
    ]));
    return redirect('/kurse');
}
}
