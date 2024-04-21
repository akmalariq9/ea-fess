<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Message;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    return view('fess');
})->name('fess');

Route::post('/submit-fess', function () {
  DB::table('messages')->insert([
    'message' => request('fess_text'),
    'created_at' => now(),
    'updated_at' => now(),
]);
    return redirect()->route('fess')->with('success', 'Fess submitted successfully!');
})->name('submit.fess');

Route::get('/wellsaid', function () {
    $messages = Message::all();
    return view('card', compact('messages'));
})->name('wellsaid');