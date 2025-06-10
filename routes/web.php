    <?php

    use App\Http\Controllers;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Coba;
    use App\Http\Controllers\PegawaiDBController;
    use App\Http\Controllers\RAMController;

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

    //Rout.get(); -> java

    Route::get('/', function () {
        return view('welcome');
    }); //simple controller

    Route::get('/selamat', function () {
        return view('welcome');
    });

    Route::get('halo', function () {
        return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
    });

    Route::get('blog', function () {
        return view('blog');
    });

    Route::get('hello', [Coba::class, 'helloworld']);

    Route::get('frontend', function () {
        return view('frontend');
    });

    Route::get('pertama', function () {
        return view('pertama');
    });

    Route::get('soal6', function () {
        return view('soal6');
    });

     Route::get('linktree', function () {
        return view('tugaslinktree');
    });

    Route::get('js1', function () {
        return view('js1');
    });

    Route::get('js2', function () {
        return view('js2');
    });

     Route::get('bootstrap1', function () {
        return view('bootstrap1');
    });

     Route::get('bootstrap2', function () {
        return view('bootstrap2');
    });
     Route::get('danantara', function () {
        return view('danantara');
    });
    Route::get('imagesprites', function () {
        return view('imagesprites');
    });
    Route::get('rwdimages', function () {
        return view('rwdimages');
    });
    Route::get('indexx', function () {
        return view('indexx');
    });
    Route::get('tugaslinktree', function () {
        return view('tugaslinktree');
    });
    Route::get('dosen', [Coba::class,'index']);

    // Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);

    Route::get('/formulir', [PegawaiController::class,'formulir']); //halaman isian form
    Route::post('/formulir/proses', [PegawaiController::class,'proses']); //action form

    // route blog
    Route::get('/blog', [BlogController::class, 'home']);
    Route::get('/blog/tentang', [BlogController::class, 'tentang']);
    Route::get('/blog/kontak', [BlogController::class, 'kontak']);

    Route::get('/pegawai',[PegawaiDBController::class,'index']);
    Route::get('/pegawai/tambah',[PegawaiDBController::class,'tambah']);
    Route::post('/pegawai/store',[PegawaiDBController::class,'store']);
    Route::get('/pegawai/edit/{id}',[PegawaiDBController::class,'edit']);
    Route::post('/pegawai/update',[PegawaiDBController::class,'update']);
    Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class,'hapus']);
    Route::get('/pegawai/cari',[PegawaiDBController::class,'cari']);

    Route::get('/ram',[RAMController::class,'ram']);
    Route::get('/ram/tambah',[RAMController::class,'tambah']);
    Route::post('/ram/store',[RAMController::class,'store']);
    Route::get('/ram/edit/{id}',[RAMController::class,'edit']);
    Route::post('/ram/update',[RAMController::class,'update']);
    Route::get('/ram/hapus/{id}',[RAMController::class,'hapus']);
    Route::get('/ram/cari',[RAMController::class,'cari']);



    // / -> publised url
    // isi function yang kedua adalah viewnya ada direct html(super simple), view blade(simple flow), dan controller(complex) untuk aksesnya
