<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProcessController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\password;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/





Route::get('/test', function (){

    $password = "test";

    echo Hash::make($password);
    
});









Route::get('/', function () {
        return view("pages.login.frontlogin");
})->name('frontlogin');

Route::post("authenticate", [LoginController::class, "login"])->name("login");



// Route::get('/logout', function () {
//     Auth::logout();
//     return redirect()->route('login');
// });



// Route::get('/dashboard', function () {
//     return view("pages.dashboard");
// })->name('dashboard')->middleware('ifLoggedout'); 




// ADMIN //

Route::view('dashboard', 'pages.admin.dashboard', 

            [
                'name'=>'Clarkiee',
                'pagetitle'=>'Dashboard'
            ]


)->name('dashboard');




Route::view('patient_record', 'pages.admin.patientR', 

            [
                'name'=>'Clarkiee',
                'pagetitle'=>'Patients_record'
            ]


)->name('patient_record');





Route::view('consultation_record', 'pages.admin.consultationR', 

            [
                'name'=>'Clarkiee',
                'pagetitle'=>'Consultation_record'
            ]


)->name('consultation_record');


Route::view('notification', 'pages.admin.notification', 

            [
                'name'=>'Clarkiee',
                'pagetitle'=>'Notification'
            ]


)->name('notification');

Route::view('Reports', 'pages.admin.reports', 

            [
                'name'=>'Clarkiee',
                'pagetitle'=>'Reports'
            ]


)->name('reports');
