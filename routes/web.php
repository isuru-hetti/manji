<?php

use App\Http\Controllers\Hospital\AdminPortal;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PhpParser\Comment\Doc;
use App\Http\Controllers\Hospital\DoctorController;
use App\Http\Controllers\Hospital\AppointmentController;
use App\Http\Controllers\Hospital\AdminPortalController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::get('/', function () {
    return view('hospital.page.home');
});
Route::get('/about', function () {
    return view('hospital.page.about');
});
Route::get('/sign-up', function () {
    return view('hospital.page.signUp');
});
Route::get('/sign-in', function () {
    return view('hospital.page.signIn');
});
Route::get('/contactus', function () {
    return view('hospital.page.contactus');
});
// Route::get('/appointment', function () {

//     return view('hospital.page.appointment');
// });
Route::get('/payment', function () {
    return view('hospital.page.payment');
});
Route::get('/services', function () {
    return view('hospital.page.service');
});
Route::get('/doctors', function () {
$doctors = User::where('role', 'doctor')->get();

    return view('hospital.page.doctors', compact('doctors'));
});
// Route::get('/admin-portal', function () {
//     return view('hospital.page.adminPortal');
// });


Route::get('/dashboard', function () {
    return view('hospital.page.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(DoctorController::class)->middleware(['auth', 'verified'])->group(function () {
    // Route::get('/doctors', 'index')->name('doctors.index');
    Route::post('/create-doctor', 'update')->name('users.index');
     Route::post('/update-doctor', 'updateDoctor')->name('update.doctor');

});

Route::controller(AppointmentController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/appointment', 'index')->name('appointment.index');
    Route::post('/create-appointment', 'createAppointment')->name('appointment.store');

});

Route::controller(AdminPortalController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin-portal', 'index')->name('admin-portal.index');
    Route::post('/update-doctor', 'updateDoctor')->name('update.doctor');
    Route::post('/doctor-schedule-create', 'doctorSchedule')->name('update.doctor');


});

require __DIR__.'/auth.php';
