<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\AnimateurController;
use App\Http\Controllers\DRController;
use App\Http\Controllers\DRIFController;
use App\Http\Controllers\CDCController;
use App\Http\Controllers\FiliereController;

// Test route
Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});

Route::middleware('api')->group(function () {
    // Routes pour les régions
    Route::apiResource('regions', RegionController::class);
    
    // Routes pour les villes
    Route::apiResource('villes', VilleController::class);
    
    // Routes pour les formations
    Route::apiResource('formations', FormationController::class);
    
    // Routes pour les participants
    Route::apiResource('participants', ParticipantController::class);
    
    // Routes pour les animateurs
    Route::apiResource('animateurs', AnimateurController::class);
    
    // Routes pour les DRs
    Route::apiResource('drs', DRController::class);
    
    // Routes pour les DRIFs
    Route::apiResource('drifs', DRIFController::class);
    
    // Routes pour les CDCs
    Route::apiResource('cdcs', CDCController::class);
    
    // Routes pour les filières
    Route::apiResource('filieres', FiliereController::class);
});

Route::get('/test-connection', function () {
    return response()->json([
        'message' => 'Backend connection successful!',
        'status' => 'connected'
    ]);
});
