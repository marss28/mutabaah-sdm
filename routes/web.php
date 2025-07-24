<?php
use App\Http\Controllers\DataTugasMingguanController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BannerinfoController;
use App\Http\Controllers\TugasbulananController;
use App\Http\Controllers\TugasmingguanController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('auth.login');
});





Route::get('/dashboard', function () {
    return view('back.dashboard.dashboard');
})->middleware (['auth', 'verified'])->name('dashboard');

// Route::middleware(['auth', 'userMiddleware'])->group(function () {

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

    
    // BANNER INFO
    Route::get('/bannerinfo', [BannerinfoController::class, 'index'])->name('bannerinfo');
    Route::get('/formbannerinfo', [BannerinfoController::class, 'formbannerinfo'])->name('formbannerinfo');
    Route::post('storebannerinfo', [BannerinfoController::class, 'storebanner'])->name('storebanner');
    Route::get('/editbanner/{id}', [BannerinfoController::class, 'editbanner'])->name('editbanner');
    Route::put('/updatebanner/{id}', [BannerinfoController::class, 'updatebanner'])->name('updatebanner');
    Route::delete('/deletebanner/{id}', [BannerinfoController::class, 'deletebanner'])->name('deletebanner');


    // TUGAS MINGGUAN
    Route::get('/tugasmingguan', [TugasmingguanController::class, 'index'])->name('tugasmingguan');
    Route::get('/formtugasmingguan', [TugasmingguanController::class, 'formtugasmingguan'])->name('formtugasmingguan');
    Route::post('storetugasmingguan', [TugasmingguanController::class, 'storetugasmingguan'])->name('storetugasmingguan');
    Route::get('/edittugasmingguan/{id}', [TugasmingguanController::class, 'edittugasmingguan'])->name('edittugasmingguan');
    Route::post('/update/{id}', [TugasController::class, 'update'])->name('update');

    Route::delete('/deletetugasmingguan/{id}', [TugasmingguanController::class, 'deletetugasmingguan'])->name('deletetugasmingguan');


    // DATA TUGAS MINGGUAN
    Route::get('/datatugasmingguan', [DataTugasMingguanController::class, 'index'])->name('datatugasmingguan');
    Route::get('/formdatatugasmingguan', [DataTugasMingguanController::class, 'create'])->name('formdatatugasmingguan');
    Route::post('/storedatatugasmingguan',[DataTugasMingguanController::class, 'store'])->name('storedatatugasmingguan');
    Route::get('/datatugasmingguan/{id}/edit', [DataTugasMingguanController::class, 'edit'])->name('editdatatugasmingguan');
    Route::put('/updatedatatugasmingguan/{id}', [DataTugasMingguanController::class,  'update'])->name('updatedatatugasmingguan');
    Route::delete('/datatugasmingguan/{id}', [DataTugasMingguanController::class, 'destroy'])->name('deletedatatugasmingguan');
    
    Route::get('/tugas/search', [TugasController::class, 'search'])->name('tugas.search');



    

// });
Route::get('/user', function(){
        return view('back.dashboard.dashboarduser');

    });


// Route::middleware(['auth', 'adminMiddleware'])->group(function () {

    Route::get('/userdashboard', [DashboardController::class, 'Userindex']);


// });


    



require __DIR__.'/auth.php';
