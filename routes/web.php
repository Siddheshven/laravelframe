<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customers;
use App\Http\Controllers\CustomerController;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

// Route::get('/', [DemoController::class,'index']);
// Route::get('/about','App\Http\Controllers\DemoController@about');
// Route::get('/courses', [SingleActionController::class]);

// Route::resource('photo', PhotoController::class);
Route::get('/', [RegistrationController::class,'index']);
Route::get('/register', [RegistrationController::class,'create']);
Route::post('/register', [RegistrationController::class,'register']);

Route::group(['prefix' => '/customer'],function(){
    Route::get('/create', [CustomerController::class,'create'])->name('customer.create');
    Route::get('/',[CustomerController::class,'view']);
    Route::post('', [CustomerController::class,'store'])->name('customer.store');
    Route::get('/delete/{id}', [CustomerController::class,'delete'])->name('customer.delete');
    Route::get('/force-delete/{id}', [CustomerController::class,'forceDelete'])->name('customer.force-delete');
    Route::get('/restore/{id}', [CustomerController::class,'restore'])->name('customer.restore');
    Route::get('/edit/{id}', [CustomerController::class,'edit'])->name('customer.edit');
    Route::post('/update/{id}', [CustomerController::class,'update'])->name('customer.update');
    Route::get('/trash',[CustomerController::class,'trash']);

});

Route::get('get-all-session',function(){
    $session = session()->all();
    p($session);
});

Route::get('set-session',function(Request $request){
    $request->session()->put('user_name','Sensei');
    $request->session()->put('user_id','123');
    $request->session()->flash('status','Success');
    return redirect('get-all-session');
});

Route::get('destroy-session',function(){
    session()->forget('user_name');
    session()->forget('user_id');
    return redirect('get-all-session');
});

Route::get('/upload',function(){
    return view('upload');
});
