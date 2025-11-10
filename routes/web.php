    <?php

    // Admin Properties

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\Site\SiteController;
    use App\Http\Controllers\Admin\DashboardAdminController;
    use App\Http\Controllers\Admin\JenisHewanController;
    use App\Http\Controllers\Admin\RasHewanController;
    use App\Http\Controllers\Admin\KategoriController;
    use App\Http\Controllers\Admin\KategoriKlinisController;
    use App\Http\Controllers\Admin\TindakanTerapiController;
    use App\Http\Controllers\Admin\PetController;
    use App\Http\Controllers\Admin\RoleController;
    use App\Http\Controllers\Admin\UserController;
    use App\Http\Controllers\Admin\PemilikController;

    // Resepsionis Properties

    use App\Http\Controllers\Resepsionis\DashboardResepsionisController;

    // Perawat Properties

    use App\Http\Controllers\Perawat\DashboardPerawatController;

    // Dokter Properties

    use App\Http\Controllers\Dokter\DashboardDokterController;

    // Pemilik Properties

    use App\Http\Controllers\Pemilik\DashboardPemilikController;

    // Routing

    Route::get('/', [SiteController::class, 'index'])->name('site.home');

    Route::get('/tentang-kami', function () {
        return view('site.tentang-kami');
    })->name('site.tentang-kami');

    Route::get('/layanan', function () {
        return view('site.layanan');
    })->name('site.layanan');

    Route::get('/kontak', function () {
        return view('site.kontak');
    })->name('site.kontak');

    Route::get('/cek-koneksi', [SiteController::class, 'cekKoneksi'])->name('site.cek-koneksi');

    Auth::routes();

/*
|--------------------------------------------------------------------------
| Rute Admin (Role ID 1)
|--------------------------------------------------------------------------
*/

    Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin'], function () {
        Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard.index');
        Route::get('/jenis-hewan', [JenisHewanController::class, 'index'])->name('admin.jenis-hewan.index');
            Route::get('/jenis-hewan/create', [JenisHewanController::class, 'create'])->name('admin.jenis-hewan.create');
                Route::post('/jenis-hewan/store', [JenisHewanController::class, 'store'])->name('admin.jenis-hewan.store');
            Route::get('/jenis-hewan/{id}/edit', [JenisHewanController::class, 'edit'])->name('admin.jenis-hewan.edit');
                Route::put('/jenis-hewan/{id}', [JenisHewanController::class, 'update'])->name('admin.jenis-hewan.update');
        Route::get('/jenis-hewan', [JenisHewanController::class, 'index'])->name('admin.jenis-hewan.index');
        Route::get('/ras-hewan', [RasHewanController::class, 'index'])->name('admin.ras-hewan.index');
        Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.kategori.index');
        Route::get('/kategori-klinis', [KategoriKlinisController::class, 'index'])->name('admin.kategori-klinis.index');
        Route::get('/tindakan-terapi', [TindakanTerapiController::class, 'index'])->name('admin.tindakan-terapi.index');
        Route::get('/pet', [PetController::class, 'index'])->name('admin.pet.index');
        Route::get('/role', [RoleController::class, 'index'])->name('admin.role.index');
        Route::get('/user', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/pemilik', [PemilikController::class, 'index'])->name('admin.pemilik.index');
    });

/*
|--------------------------------------------------------------------------
| Rute Resepsionis (Role ID 4)
|--------------------------------------------------------------------------
*/

    Route::middleware(['isResepsionis'])
        ->prefix('resepsionis') 
        ->group(function () {
    
    Route::get('/dashboard', [DashboardResepsionisController::class, 'index'])
        ->name('resepsionis.dashboard.index');
    
    });

/*
|--------------------------------------------------------------------------
| Rute Perawat (Role ID 3)
|--------------------------------------------------------------------------
*/

    Route::middleware(['isPerawat'])
        ->prefix('perawat') 
        ->group(function () {
    
    Route::get('/dashboard', [DashboardPerawatController::class, 'index'])
        ->name('perawat.dashboard.index');
    });

/*
|--------------------------------------------------------------------------
| Rute Dokter (Role ID 2)
|--------------------------------------------------------------------------
*/

    Route::middleware(['isDokter'])
        ->prefix('dokter') 
        ->group(function () {
    
    Route::get('/dashboard', [DashboardDokterController::class, 'index'])
        ->name('dokter.dashboard.index');
    });

