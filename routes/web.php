<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\TuteurController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;


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
Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);
Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']);
Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);








Route::get('/delete-tuteur/{id}', [TuteurController::class, 'delete_tuteur']);
Route::get('/updat-tuteur/{id}', [TuteurController::class, 'updat_tuteur']);
Route::post('/updat/traitement', [TuteurController::class, 'updat_tuteur_traitement']);
Route::get('/tuteur', [TuteurController::class, 'liste_tuteur']);
Route::get('/ajouter2', [TuteurController::class, 'ajouter2_tuteur']);
Route::post('/ajouter2/traitement', [TuteurController::class, 'ajouter2_tuteur_traitement']);



Route::get('/delete-post/{id}', [PostController::class, 'delete_post']);
Route::get('/update3-post/{id}', [PostController::class, 'update3_post']);
Route::post('/update3/traitement', [PostController::class, 'update3_post_traitement']);
Route::get('/post', [PostController::class, 'liste_post']);
Route::get('/ajouter3', [PostController::class, 'ajouter3_post']);
Route::post('/ajouter3/traitement', [PostController::class, 'ajouter3_post_traitement']);



Route::get('/delete-tag/{id}', [TagController::class, 'delete_tag']);
Route::get('/update4-tag/{id}', [TagController::class, 'update4_tag']);
Route::post('/update4/traitement', [TagController::class, 'update4_tag_traitement']);
Route::get('/tag', [TagController::class, 'liste_tag']);
Route::get('/ajouter4', [TagController::class, 'ajouter4_tag']);
Route::post('/ajouter4/traitement', [TagController::class, 'ajouter4_tag_traitement']);