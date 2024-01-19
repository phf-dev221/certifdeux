<?php

use App\Http\Controllers\BienController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\PubliciteController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SouscrisController;
use App\Http\Controllers\TemoignageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*routes pour l'administrateurs seulement*/

Route::middleware(['auth:api', 'admin'])->group(function () {
    /**biens */
    Route::post('biens/store', [BienController::class, 'store']);

    Route::delete('biens/{bien}/destroy', [BienController::class, 'destroy']);
    Route::post('biens/{bien}/accepte', [BienController::class, 'acceptBien']);
    Route::post('biens/{bien}/refuse', [BienController::class, 'refuseBien']);

    /*demandes publicites*/
    Route::post('demandes/{demande}/accept', [DemandeController::class, 'accept']);
    Route::post('demandes/{demande}/refuse', [DemandeController::class, 'refuse']);
    Route::get('demandes/acceptedDemande', [DemandeController::class, 'acceptedDemande']);
    Route::get('demandes/refusedDemande', [DemandeController::class, 'refusedDemande']);

    /*publicités*/
    Route::post('pubs/{publicite}/update', [PubliciteController::class, 'update']);
    Route::post('pubs/{publicite}/destroy', [PubliciteController::class, 'destroy']);
    Route::post('pubs/{publicite}/invalide', [PubliciteController::class, 'invalidPub']);
    Route::post('pubs/store', [PubliciteController::class, 'store']);

    /*catégories de biens*/
    Route::post('categories/{categorie}/update', [CategorieController::class, 'update']);
    Route::delete('categories/{categorie}/destroy', [CategorieController::class, 'destroy']);
    Route::post('categories/store', [CategorieController::class, 'store']);

    /*contacts*/
    Route::get('contacts/index', [ContactController::class, 'index']);
    Route::get('contacts/{contact}/show', [ContactController::class, 'show']);

    /*temoignages*/
    Route::post('temoignages/{temoignage}/accept', [TemoignageController::class, 'accept']);

    /*utilisateurs*/
    Route::get('users/index', [AuthController::class, 'index']);
    Route::put('{user}/archive', [AuthController::class, 'archive']);
    Route::get('users/archives', [AuthController::class, 'userArchive']);
    Route::get('users/nonArchives', [AuthController::class, 'userNonArchive']);

});

/*routes pour biens*/
Route::get('biens/index', [BienController::class, 'index']);
Route::get('biens/{bien}/show', [BienController::class, 'show']);
Route::post('biens/{bien}/update', [BienController::class, 'update']);


/*Routes pour demande */
Route::post('demandes/store', [DemandeController::class, 'store']);
Route::post('demandes/{demande}/update', [DemandeController::class, 'update']);
Route::post('demandes/{demande}/show', [DemandeController::class, 'show']);
Route::get('demandes/index', [DemandeController::class, 'index']);
Route::delete('demandes/{demande}/destroy', [DemandeController::class, 'destroy']);


/*routes pour pub */
Route::get('pubs/index', [PubliciteController::class, 'index']);
Route::get('pubs/{publicite}/show', [PubliciteController::class, 'show']);


/*routes pour les categories*/
Route::get('categories/index', [CategorieController::class, 'index']);


/*routes pour contact*/
Route::post('contacts/store', [ContactController::class, 'store']);
Route::post('contacts/{contact}/update', [ContactController::class, 'update']);
Route::delete('contacts/{contact}/destroy', [ContactController::class, 'destroy']);

/*routes pour temoignage*/
Route::post('temoignages/store', [TemoignageController::class, 'store']);
Route::get('temoignages/index', [TemoignageController::class, 'index']);
Route::get('temoignages/{temoignage}/show', [TemoignageController::class, 'show']);

/**routes pour les roles */
Route::post('roles/store', [RoleController::class, 'store']);
Route::post('roles/{role}/update', [RoleController::class, 'update']);


/*routes pour les utilisateurs*/
Route::post('register', [AuthController::class, 'register']);
Route::post('users/{user}/update', [AuthController::class, 'update']);
Route::get('users/{user}/show', [AuthController::class, 'show']);
Route::post('users/whatsapp/{user}', [AuthController::class, 'sendWhatsapp'])->name('whatsapp');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::post('me', [AuthController::class, 'me']);

/*newsletter*/
Route::post('news', [SouscrisController::class, 'newsletter']);
Route::post('news/store', [SouscrisController::class, 'store']);


