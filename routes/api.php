<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\StudentController;
use App\http\controllers\StudentBookController;
use App\http\controllers\TeacherController;
use App\http\controllers\TeacherBookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/', function () {
//     return 11;
// });


// Route::get('/docs', function () {
//     return "lia pacarnya mingyu";
// });

// //basic mengguakan tabmbah kurang kali dan bagi
// Route::post('/myname', function (Request $request) {
//     return $request->nilai1 + $request->nilai2;
// });


// //json_data_type

// //contoh
// Route::get('/json_data_type', function () {
//     return 12;
// });

// //STRING  | ""/''

// Route::get('/json_data_type', function () {
// //    $data = "Lia"; 
//     return  123;

//     return $data;
// });


// //OBJECT    | {}

// Route::get('/json_data_type', function () {
//     $data = array(
//         "name" => "lia",
//         "age" => 23
//     );
//         return $data;
//     });


//     // ARRAY    | []
//     Route::get('/json_data_type', function () {
//         //ARRAY ONLY    

//         $data = array("lia","mingyu");

//             return $data;
//         });

//     Route::get('/json_data_type', function () {
//         // ARRAY OBJECT

//             $data = array(array(
//                 "name" => "mingyu",
//                 "age"  => 26
//             ), array( 
//                 "name" => "lia",
//                 "age"  => 23
//             ), array(
//                 "name" => "eunhyuk",
//                 "age"  => 20
//             ));
//                 return $data;
//             });


//     // // BOOLEAN  | TRUE / FALSE
//     // Route::get('/json_data_type', function () {
//     //     $data = true;

//     //     return $data;

//     // });


// // NULL     | null
// Route::get('/json_data_type', function () {
//     $data = null;

//     return $data;

// });


//CONDITIONAL STATEMENTS
// (IF)     | 1 kondisi

// Route::get('/php_conditional', function (Request $request) {

//     $cuaca = "terang";
//     $data  = "tidak mati lampu";

//         if ($cuaca ="hujan") {
//             $data = "mati lampu";
//         }

//     return $data;

// });

//         // IF ELSE      | 1/2 kondisi

// Route::get('/php_conditional', function (Request $request) {

//     $cuaca = "hujan";
//     $data  = "Tidak mati lampu";

//     if ($cuaca == "hujan") {
//         $data  = "Mati lampu";

//     } else {
//      $data = "Tidak mati lampu";
//     }

//     return $data;

//    });

//    // IF... ELSE....ELSE    | Lebih dari dua kondisi

// Route::get('/php_conditional', function (Request $request) {

//     $cuaca = "mendung";
//     $data  = "Tidak mati lampu";

//     if ($cuaca == "hujan") {
//         $data  = "Mati lampu";

//     } else if ($cuaca == "mendung") {
//                 $data = "lampu redup";
//     } else {
//             $data = "tidak mati lampu";
//     }

//     return $data;

//    });


//    // SWITCH    | Lebih dari dua kondisi
//  Route::get('/php_conditional', function (Request $request) {

//     $cuaca = "gak jelas";
//     $data  = "Tidak mati lampu";

//     switch ($cuaca) {
//         case 'hujan':
//             $data = "mati lampu";
//             break;
//         case 'mendung':
//            $data = "lampu redup";
//             break;
//         default:
//             $data ="tidak mati lampu";
//             break;
//     }

//     return $data;

//    });



// CONTROLLER

Route::get('php_conditional',          [LearnController::class, 'php_conditional']);
Route::get('json_data_type',           [LearnController::class, 'json_data_type']);

// ROUTE 
// CRUD     : CREATE, READ, UPDATE, DELETE

Route::get('student',                   [StudentController::class, 'index']);   //READ ALL
Route::post('student',                  [StudentController::class, 'store']);   //CREATE
Route::get('student/{id}',              [StudentController::class, 'show']);  //Read One/Only   
Route::put('student/{id}',              [StudentController::class, 'update']); //UPDATE
Route::delete('student/{id}',           [StudentController::class, 'destroy']); //DELETE


// CRUD STUDENT BOOK

Route::get('studentbook',                   [StudentBookController::class, 'index']);
Route::post('studentbook',                  [StudentBookController::class, 'store']);
Route::get('studentbook/{id}',              [StudentBookController::class, 'show']);
Route::put('studentbook/{id}',              [StudentBookController::class, 'update']);
Route::delete('studentbook/{id}',           [StudentBookController::class, 'destroy']);

Route::get('teacher',                   [TeacherController::class, 'index']);   //READ ALL
Route::post('teacher',                  [TeacherController::class, 'store']);   //create
Route::get('teacher/{id}',              [TeacherController::class, 'show']);
Route::put('teacher/{id}',              [TeacherController::class, 'update']);
Route::delete('teacher/{id}',           [TeacherController::class, 'destroy']);

// //CRUD TEACHER BOOK

// Route::get('teacherbook',               [TeacherBookController::class, 'index']);   //READ ALL
// Route::post('teacherbook',              [TeacherBookController::class, 'store']);   //create
// Route::get('teacherbook/{id}',          [TeacherBookController::class, 'show']);
// Route::put('teacherbook/{id}',          [TeacherBookController::class, 'update']);
// Route::delete('teacherbook/{id}',       [TeacherBookController::class, 'destroy']);
