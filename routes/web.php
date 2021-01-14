<?php

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





Route::get('/', function () {
    return view('home')->with('status', 'background');
})->middleware('auth');

// Route::get('/', function () {
//     return view('edit')->with('status','background');

// })->middleware('auth');

// Route::get('/edit/{id}',"EmployeeCheck@edit");

// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('config:cache');
//     return 'DONE'; //Return anything
// });




Route::get('/login', function () {

    if (Auth::guest()) {
        return view('login');
    } else {
        redirect('/home');
    }
});


Route::get('/employee/{id}', 'EmployeeCheck@show');
Route::get('/employee', 'EmployeeCheck@index');

// Route::get('/form',"CarController@create");
// Route::get('/show/{id}',"CarController@show");
// Route::get('/show/{id}','CarController@show')->name('PDF_report');
Route::get('/pdfview/{id}', 'EmployeeCheck@pdfview');
// Route::post('/form',"EmployeeCheck@store");
Route::get('/delete{id}', "EmployeeCheck@destroy");
Route::get('/edit/{id}', "EmployeeCheck@edit");
// Route::get('/edit/{id}',"EmployeeCheck@edit");

Route::post('/update/{id}', "EmployeeCheck@update");

// Route::post('/generateId',"EmployeeCheck@generateId");

// Route::resource('employee','EmployeeCheck');


Route::get('/test/{test}', 'TestController@Show');

Route::get('/bgform/{id}', 'FormController@bgform');
Route::get('/emergencyform/{id}', 'FormController@emergencyform');
Route::get('/educationform/{id}', 'FormController@educationform');
Route::get('/experienceform/{id}', 'FormController@experienceform');
Route::get('/physicalform/{id}', 'FormController@physicalform');
Route::get('/medicalform/{id}', 'FormController@medicalform');
Route::get('/witnessform/{id}', 'FormController@witnessform');

Route::get('/appform/{id}', 'FormController@appform');
Route::get('/phycert/{id}', 'FormController@phycert');
Route::get('/polcert/{id}', 'FormController@polcert');
Route::get('/resign/{id}', 'FormController@resignform');
Route::get('/clearance/{id}', 'FormController@clear_cert');
Route::get('/discharge/{id}', 'FormController@discharge');
Route::get('/uniform/{id}', 'FormController@uniform_issue');
Route::get('/show/{id}', 'FormController@show');




Route::get('/home', function () {
    return view('home')->with('status', 'background');
})->middleware('auth');



Route::post('/home', 'EmployeeController@create');
Route::post('/home/save_background', 'EmployeeController@create_bgInfo');
Route::post('/home/save_emergency', 'EmployeeController@create_emergency');
Route::post('/home/save_education', 'EmployeeController@create_education');
Route::post('/home/save_physical', 'EmployeeController@create_physical');
Route::post('/home/save_medical', 'EmployeeController@create_medical');
Route::post('/home/save_witness', 'EmployeeController@create_witness');
Route::post('/home/save_experience', 'EmployeeController@create_experience');
// Route::post('/home/save_editable', 'EmployeeController@create_editable');





Route::get('/search', function () {
    return view('search');
});

Route::post('/search', 'EmployeeController@show');


Route::get('/uniform', function () {
    return view('uniform');
})->middleware('auth');

Route::post('/search_uniform', 'UniformController@show');
Route::post('/insert_uniform', 'UniformController@store');

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
