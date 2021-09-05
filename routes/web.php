<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\StoreUserController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('Dashboard', [AdminController::class, 'Dashboard'])->name('Dashboard');

    Route::get('Users', [UserController::class, 'index'])->name('Users');
    Route::post('Delete-User', [UserController::class, 'delete'])->name('delete.user');
    Route::get('Edit-User/', [UserController::class, 'edit'])->name('edit.user');
    Route::post('Update-User', [UserController::class, 'update'])->name('update.user');
    Route::get('Search_User', [UserController::class, 'search'])->name('Search_User');



    Route::get('Orders', [CommandController::class, 'index'])->name('Orders');
    Route::post('Store-Command', [CommandController::class, 'store'])->name('store.command');
    Route::post('Delete_Order', [CommandController::class, 'delete'])->name('delete.order');
    Route::get('Edit_Order', [CommandController::class, 'edit'])->name('Edit_Order');
    Route::post('Update-Order', [CommandController::class, 'update'])->name('update.order');
    Route::get('Create_Order', [CommandController::class, 'create'])->name('Create_Order');
    Route::post('Store-Order', [CommandController::class, 'store_order'])->name('store.order');
    Route::get('Search_Order', [CommandController::class, 'search'])->name('Search_Order');
    Route::get('Get_Orders', [AdminController::class, 'get_command'])->name('Get_Orders');


    Route::get('Factures', [FactureController::class, 'index'])->name('Factures');
    Route::post('Store-Facture', [FactureController::class, 'store'])->name('Store_Facture');
    Route::post('Delete_Facture', [FactureController::class, 'delete'])->name('Delete_Facture');
    Route::get('Edit_Facture', [FactureController::class, 'edit'])->name('Edit_Facture');
    Route::post('Update_Facture', [FactureController::class, 'update'])->name('Update_Facture');
    Route::get('Create_Facture', [FactureController::class, 'create'])->name('Create_Facture');
    Route::get('Search_Facture', [FactureController::class, 'search'])->name('Search_Facture');
    Route::get('Pdf_Facture', [FactureController::class, 'pdf'])->name('Pdf_Facture');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('Edit-User-Account/', [UserController::class, 'my_account'])->name('edit.user.acount');
    Route::post('Update-User-Account', [UserController::class, 'update_user_account'])->name('update.user.account');
});

Route::get('locale/{locale}', [FrontController::class, 'switch'])->name('switch.locale');
Route::get('Commande-Triporteur', [FrontController::class, 'triporteur'])->name('triporteur');
Route::get('Commande-Pick-UP', [FrontController::class, 'pick'])->name('pick');
Route::get('Commande-Honda', [FrontController::class, 'honda'])->name('honda');
Route::get('Commande-Camionnette', [FrontController::class, 'camionnette'])->name('camionnette');
Route::get('Commande-Camion', [FrontController::class, 'camion'])->name('camion');
Route::get('Commande-Remoque', [FrontController::class, 'remoque'])->name('remoque');
Route::get('Commande-Camion A Benne', [FrontController::class, 'benne'])->name('benne');
Route::post('Triporteur-Gmail', [FrontController::class, 'triporteur_gmail'])->name('triporteur.gmail');

Route::post('Store-Command', [CommandController::class, 'store'])->name('store.commandes');
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('home', [FrontController::class, 'index'])->name('home');


Route::post('Store-User', [StoreUserController::class, 'create'])->name('create.user');


Auth::routes();
