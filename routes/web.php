<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BannerinfoController;
use App\Http\Controllers\TugasharianController;
use App\Http\Controllers\tugasbulananController;
use App\Http\Controllers\TugasmingguanController;
use App\Http\Controllers\DatatugasharianController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('back.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware(['auth', 'verified']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware(['auth', 'verified']);
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware(['auth', 'verified']);

Route::middleware(['auth', 'adminMiddleware'])->group(function () {

    

   
   
    
    // BANNER INFO
    


    

    Route::get('/tugas/search', [TugasController::class, 'search'])->name('tugas.search');



    

});
Route::get('/user', function(){
        return view('back.dashboard.dashboarduser');

    });


Route::middleware(['auth', 'userMiddleware'])->group(function () {
    Route::get('/userdashboard', [DashboardController::class, 'Userindex']);
    
    
     // TUGAS BULANAN
    Route::get('/tugasbulanan', [tugasbulananController::class, 'index'])->name('tugasbulanan');
    Route::get('/formtugasbulanan', [tugasbulananController::class, 'formtugasbulanan'])->name('formtugasbulanan'); 
    Route::post('/storetugasbulanan', [tugasbulananController::class, 'storetugasbulanan'])->name('storetugasbulanan');
    Route::get('/edittugasbulanan/{id}', [tugasbulananController::class, 'edittugasbulanan'])->name('edittugasbulanan');
    Route::put('/updatetugasbulanan/{id}', [tugasbulananController::class, 'updatetugasbulanan'])->name('updatetugasbulanan');
    Route::delete('/deletetugasbulanan/{id}', [tugasbulananController::class, 'deletetugasbulanan'])->name('deletetugasbulanan');

    Route::get('/tugasmingguan',[TugasmingguanController::class, 'index'])->name('tugasmingguan');
    Route::get('/formtugasmingguan',[TugasmingguanController::class, 'formtugasmingguan'])->name('formtugasmingguan');
    Route::post('/storetugasmingguan',[TugasmingguanController::class, 'storetugasmingguan'])->name('storetugasmingguan');
    Route::get('/edittugasmingguan/{id}', [TugasmingguanController::class, 'edittugasmingguan'])->name('edittugasmingguan');
    Route::put('/updatetugasmingguan/{id}', [TugasmingguanController::class,  'updatetugasmingguan'])->name('updatetugasmingguan');
    Route::delete('/deletetugasmingguan/{id}', [TugasmingguanController::class, 'deletetugasmingguan'])->name('deletetugasmingguan');

    Route::get('/tugasharian',[TugasharianController::class, 'index'])->name('tugasharian');
    Route::get('/formtugasharian',[TugasharianController::class, 'formtugasharian'])->name('formtugasharian');
    Route::post('/storetugasharian',[TugasharianController::class, 'storetugasharian'])->name('storetugasharian');
    Route::get('/edittugasharian/{id}', [TugasharianController::class, 'edittugasharian'])->name('edittugasharian');
    Route::put('/updatetugasharian/{id}', [TugasharianController::class,  'updatetugasharian'])->name('updatetugasharian');
    Route::delete('/deletetugasharian/{id}', [TugasharianController::class, 'deletetugasharian'])->name('deletetugasharian');

     Route::get('/datatugasharian', [DatatugasharianController::class, 'index'])->name('datatugasharian');
    Route::get('/formdatatugasharian', [DatatugasharianController::class, 'create'])->name('formdatatugasharian');
    Route::post('/storedatatugasharian', [DatatugasharianController::class, 'store'])->name('storedatatugasharian');
    Route::get('/editdata/{id}', [DatatugasharianController::class, 'edit'])->name('editdatatugasharian');
    Route::put('/updatedatatugasharian/{id}', [DatatugasharianController::class, 'update'])->name('updatedatatugasharian');
    Route::delete('/deletedatatugasharian/{id}', [DatatugasharianController::class, 'destroy'])->name('deletedatatugasharian');

    Route::get('/bannerinfo', [BannerinfoController::class, 'index'])->name('bannerinfo');
    Route::get('/formbannerinfo', [BannerinfoController::class, 'formbannerinfo'])->name('formbannerinfo');
    Route::post('storebannerinfo', [BannerinfoController::class, 'storebanner'])->name('storebanner');
    Route::get('/editbanner/{id}', [BannerinfoController::class, 'editbanner'])->name('editbanner');
    Route::put('/updatebanner/{id}', [BannerinfoController::class, 'updatebanner'])->name('updatebanner');
    Route::delete('/deletebanner/{id}', [BannerinfoController::class, 'deletebanner'])->name('deletebanner');




});


    



require __DIR__.'/auth.php';
