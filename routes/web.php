<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;

Route::get('/', function () {
    $catalogPath = database_path('data/catalog_master.json');
    $products = file_exists($catalogPath) ? json_decode(file_get_contents($catalogPath), true) : [];
    return view('landing', compact('products'));
});

Route::post('/api/chat-ai', [ChatbotController::class, 'ask'])->name('chatbot.ask');
