
 <?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [DashboardController::class, 'home']);
Route::get('/about', [DashboardController::class, 'about']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/input', [StudentController::class, 'create']);
Route::get('/student/{studentt}', [StudentController::class, 'show']);
Route::post('/student', [StudentController::class, 'store']);
Route::delete('/student/{studentt}', [StudentController::class, 'destroy']);
Route::get('/student/{studentt}/edit', [StudentController::class, 'edit']);
Route::patch('/student/{studentt}', [StudentController::class, 'update']);
