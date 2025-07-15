<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tugasbulananController;
use App\Http\Controllers\BannerinfoController;
use App\Http\Controllers\TugasmingguanController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('back.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    
    Route::get('/tugasbulanan', [tugasbulananController::class, 'index'])->name('tugasbulanan');
    Route::get('/formtugasbulanan', [tugasbulananController::class, 'formtugasbulanan'])->name('formtugasbulanan'); 

    
    // BANNER INFO
    Route::get('/bannerinfo', [BannerinfoController::class, 'index'])->name('banner_info');
    Route::get('/formbannerinfo', [BannerinfoController::class, 'formbannerinfo'])->name('formbannerinfo');


    Route::get('/tugasmingguan',[TugasmingguanController::class, 'index'])->name('tugasmingguan');
    Route::get('/formtugasmingguan',[TugasmingguanController::class, 'formtugasmingguan'])->name('formtugasmingguan');
    Route::post('/storetugasmingguan',[TugasmingguanController::class, 'storetugasmingguan'])->name('storetugasmingguan');
    Route::get('/edittugasmingguan/{id}', [TugasmingguanController::class, 'edittugasmingguan'])->name('edittugasmingguan');
    Route::put('/updatetugasmingguan/{id}', [TugasmingguanController::class,  'updatetugasmingguan'])->name('updatetugasmingguan');
    Route::delete('/deletetugasmingguan/{id}', [TugasmingguanController::class, 'deletetugasmingguan'])->name('deletetugasmingguan');


});

    



require __DIR__.'/auth.php';
