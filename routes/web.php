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


    // TUGAS BULANAN
    Route::get('/tugasbulanan', [tugasbulananController::class, 'index'])->name('tugasbulanan');
    Route::get('/formtugasbulanan', [tugasbulananController::class, 'formtugasbulanan'])->name('formtugasbulanan'); 
    Route::post('/storetugasbulanan', [tugasbulananController::class, 'storetugasbulanan'])->name('storetugasbulanan');
    Route::get('/edittugasbulanan/{id}', [tugasbulananController::class, 'edittugasbulanan'])->name('edittugasbulanan');
    Route::put('/updatetugasbulanan/{id}', [tugasbulananController::class, 'updatetugasbulanan'])->name('updatetugasbulanan');
    Route::delete('/deletetugasbulanan/{id}', [tugasbulananController::class, 'deletetugasbulanan'])->name('deletetugasbulanan');
    

    // DATA TUGAS BULANAN
    Route::get('/datatugasbulanan', [datatugasbulananController::class, 'index'])->name('datatugasbulanan');
    Route::get('/formdatatugasbulanan', [datatugasbulananController::class, 'formdatatugasbulanan'])->name('formdatatugasbulanan');

    
    // BANNER INFO
    Route::get('/bannerinfo', [BannerinfoController::class, 'index'])->name('bannerinfo');
    Route::get('/formbannerinfo', [BannerinfoController::class, 'formbannerinfo'])->name('formbannerinfo');
    Route::post('storebannerinfo', [BannerinfoController::class, 'storebanner'])->name('storebanner');
    Route::get('/editbanner/{id}', [BannerinfoController::class, 'editbanner'])->name('editbanner');
    Route::put('/updatebanner/{id}', [BannerinfoController::class, 'updatebanner'])->name('updatebanner');
    Route::get('/deletebanner/{id}', [BannerinfoController::class, 'deletebanner'])->name('deletebanner');



    Route::get('/tugasmingguan',[TugasmingguanController::class, 'index'])->name('tugasmingguan');
    Route::get('/formtugasmingguan',[TugasmingguanController::class, 'formtugasmingguan'])->name('formtugasmingguan');
    Route::post('/storetugasmingguan',[TugasmingguanController::class, 'storetugasmingguan'])->name('storetugasmingguan');
    Route::get('/edittugasmingguan/{id}', [TugasmingguanController::class, 'edittugasmingguan'])->name('edittugasmingguan');
    Route::put('/updatetugasmingguan/{id}', [TugasmingguanController::class,  'updatetugasmingguan'])->name('updatetugasmingguan');
    Route::delete('/deletetugasmingguan/{id}', [TugasmingguanController::class, 'deletetugasmingguan'])->name('deletetugasmingguan');


    Route::get('/user', function(){
        return view('template.dashboarduser');

    });

});

    



require __DIR__.'/auth.php';
