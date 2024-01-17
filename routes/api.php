<?php

use App\Http\Controllers\BienController;
use App\Http\Controllers\DemandeController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*routes pour les biens trouves*/
Route::post('biens/store', [BienController::class, 'store']);
Route::get('biens/index', [BienController::class, 'index']);
Route::get('biens/{bien}/show', [BienController::class, 'show']);
Route::post('biens/{bien}/update', [BienController::class, 'update']);
Route::delete('biens/{bien}/destroy', [BienController::class, 'destroy']);
Route::post('biens/{bien}/accepte', [BienController::class, 'acceptBien']);
Route::post('biens/{bien}/refuse', [BienController::class, 'refuseBien']);

/*Routes pour demande */
Route::post('demandes/store', [DemandeController::class, 'store']);
Route::post('demandes/{demande}/update', [DemandeController::class, 'update']);
Route::post('demandes/{demande}/show', [DemandeController::class, 'show']);
Route::get('demandes/index', [DemandeController::class, 'index']);
Route::post('demandes/{demande}/destroy', [DemandeController::class, 'destroy']);
Route::post('demandes/{demande}/accept', [DemandeController::class, 'accept']);
Route::post('demandes/{demande}/refuse', [DemandeController::class, 'refuse']);
Route::get('demandes/acceptedDemande', [DemandeController::class, 'acceptedDemande']);
Route::get('demandes/refusedDemande', [DemandeController::class, 'refusedDemande']);

/*routes pour es utilisateurs*/

Route::post('register', [AuthController::class, 'register']);
Route::post('users/{user}/update', [AuthController::class, 'update']);
Route::get('users/index', [AuthController::class, 'index']);
Route::put('{user}/archive', [AuthController::class, 'archive']);
Route::get('users/archives', [AuthController::class, 'userArchive']);
Route::get('users/nonArchives', [AuthController::class, 'userNonArchive']);
Route::post('users/whatsapp/{user}', [AuthController::class, 'sendWhatsapp'])->name('whatsapp');


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);


});
