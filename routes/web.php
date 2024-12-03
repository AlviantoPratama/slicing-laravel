<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    return view('tasks.index');
});

Route::get('/tasks', function () {
    $tasks = [
        [
            'resi' => 'bil772406641',
            'status' => 'Dikirim (Driver)',
            'type' => 'Dijemput',
            'origin' => 'Jakarta',
            'destination' => 'Yogyakarta',
            'created_at' => '13 Sep, 2024',
            'due_date' => '20 Sep, 2024',
        ],
        [
            'resi' => 'bil772406642',
            'status' => 'Diterima (Agustina)',
            'type' => 'Dijemput',
            'origin' => 'Jakarta',
            'destination' => 'Yogyakarta',
            'created_at' => '13 Sep, 2024',
            'due_date' => '20 Sep, 2024',
        ],
        [
            'resi' => 'bil772406641',
            'status' => 'Drop (CSM Jakarta Branch)',
            'type' => 'Dijemput',
            'origin' => 'Jakarta',
            'destination' => 'Yogyakarta',
            'created_at' => '13 Sep, 2024',
            'due_date' => '20 Sep, 2024',
        ],
        [
            'resi' => 'bil772406641',
            'status' => 'Drop (CSM Jakarta Branch)',
            'type' => 'Dijemput',
            'origin' => 'Jakarta',
            'destination' => 'Yogyakarta',
            'created_at' => '13 Sep, 2024',
            'due_date' => '20 Sep, 2024',
        ],
        [
            'resi' => 'bil772406641',
            'status' => 'Drop (CSM Jakarta Branch)',
            'type' => 'Dijemput',
            'origin' => 'Jakarta',
            'destination' => 'Yogyakarta',
            'created_at' => '13 Sep, 2024',
            'due_date' => '20 Sep, 2024',
        ],
        
    ];

    return view('tasks.index', compact('tasks'));
});
