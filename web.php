<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function () {
    return 'welcome to my first ';
});
Route::get('/user/{name}/{age?}', function ($name, $age=0) {
    if($age==0){
    return 'the user name is:'.$name ;}
    else{
    return 'the user name is:'.$name .'<br>'.'the age is : '.$age;}
    

})->whereIn('name',['hana' ,'mahmoud']);


Route::prefix('webStructure')-> group(function (){
Route::get('/',function(){
    return' home page';
});
Route::get('About',function(){
    return'about page';
});
Route::get('ContactUs',function(){
    return'contact Us page';
});

Route::prefix('Support')-> group(function (){
    Route::get('/',function(){
        return' support page';
    });
Route::get('chat',function(){
    return'chat page';
});
Route::get('call',function(){
    return'call page';
});
Route::get('Ticket',function(){
    return'Ticket page';
});});

Route::prefix('Training')->group(function(){
    Route::get('/',function(){
        return' Training page';
    });
    Route::get('HR',function(){
        return'HR page';
    });
    Route::get('ICT',function(){
        return'ICT page';
    });
    Route::get('Marketing',function(){
        return'marketing page';
    });
    Route::get('Logistics',function(){
        return'Logistics page';
    });
});
});

