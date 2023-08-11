<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemController1;
use App\Http\Controllers\ItemController2;


use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SearchController;




Route::get('/', function () {
     return view('product');
 });


Route::get('/product2', function () {
    return view('product2');
});

Route::get('/top', function () {
    return view('top');
});

Route::get('/womentop', function () {
    return view('womentop');
});

Route::get('/bike', function () {
    return view('bike');
});

Route::get('/accessories', function () {
    return view('accessories');
});

Route::get('/learn', function () {
    return view('learn');
});


Route::get('/runsdry', function () {
    return view('runsdry');
});



Route::get('/wfitness', function () {
    return view('wfitness');
});

Route::get('/Bfitness', function () {
    return view('Bfitness');
});

Route::get('/sbelt', function () {
    return view('sbelt');
});

Route::get('/gym', function () {
    return view('gym');
});


Route::get('/hybrid', function () {
    return view('hybrid');
});

Route::get('/helmetblue', function () {
    return view('helmetblue');
});

Route::get('/helmetpink', function () {
    return view('helmetpink');
});

Route::get('/helmetred', function () {
    return view('helmetred');
});



Route::get('/Ahsunglass', function () {
    return view('Ahsunglass');
});

Route::get('/MH120A', function () {
    return view('MH120A');
});

Route::get('/towel', function () {
    return view('towel');
});

Route::get('/wbinocular', function () {
    return view('wbinocular');
});





Route::get('/Fnet', function () {
    return view('Fnet');
});



Route::get('/scooter', function () {
    return view('scooter');
});

Route::get('/Ride100', function () {
    return view('Ride100');
});



Route::get('/about', function () {
    return view('about');
});



Route::get('/running_blue_tshirt', function () {
    return view('running_blue_tshirt');
});

Route::get('/keepdry_layer', function () {
    return view('keepdry_layer');
});

Route::get('/running_grey_tshirt', function () {
    return view('running_grey_tshirt');
});

Route::get('/top_black', function () {
    return view('top_black');
});

Route::get('/red_tshirt', function () {
    return view('red_tshirt');
});

Route::get('/red_bike', function () {
    return view('red_bike');
});

Route::get('/men_non_stretchable', function () {
    return view('men_non_stretchable');
});

Route::get('/knife_black', function () {
    return view('knife_black');
});



Route::get('/yellow_ball', function () {
    return view('yellow_ball');
});



Route::get('/orange_net', function () {
    return view('orange_net');
});

Route::get('/helmet', function () {
    return view('helmet');
});




Route::get('/index1', function () {
    return view('index1');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/basketball', function () {
    return view('basketball');
});



Route::get('/OrangeBall', function () {
    return view('OrangeBall');
});

Route::get('/YellowBall', function () {
    return view('YellowBall');
});

Route::get('/BlueBall', function () {
    return view('BlueBall');
});

Route::get('/RedBall', function () {
    return view('RedBall');
});

Route::get('/Baseball', function () {
    return view('Baseball');
});

Route::get('/WBall', function () {
    return view('WBall');
});

Route::get('/BHelmet', function () {
    return view('BHelmet');
});

Route::get('/BBat', function () {
    return view('BBat');
});

Route::get('/Football', function () {
    return view('Football');
});



Route::get('/FPump', function () {
    return view('FPump');
});

Route::get('/OFBall', function () {
    return view('OFBall');
});

Route::get('/YFBall', function () {
    return view('YFBall');
});





Route::get('/cricket', function () {
    return view('cricket');
});

Route::get('/CShoe', function () {
    return view('CShoe');
});

Route::get('/CBat', function () {
    return view('CBat');
});

Route::get('/CLeather', function () {
    return view('CLeather');
});

Route::get('/CGlovs', function () {
    return view('CGlovs');
});

Route::get('/CGuard', function () {
    return view('CGuard');
});

Route::get('/wicket', function () {
    return view('wicket');
});

Route::get('/MFooter', function () {
    return view('MFooter');
});

Route::get('/sandles', function () {
    return view('sandles');
});

Route::get('/socks', function () {
    return view('socks');
});

Route::get('/Shoe123', function () {
    return view('Shoe123');
});



Route::get('/MBottom', function () {
    return view('MBottom');
});

Route::get('/Tracksuit', function () {
    return view('Tracksuit');
});

Route::get('/NFShort', function () {
    return view('NFShort');
});

Route::get('/WFShort', function () {
    return view('WFShort');
});

Route::get('/WFooter', function () {
    return view('WFooter');
});

Route::get('/WBottom', function () {
    return view('WBottom');
});

Route::get('/GLeggin', function () {
    return view('GLeggin');
});

Route::get('/RunningShort', function () {
    return view('RunningShort');
});

Route::get('/HTrouser', function () {
    return view('HTrouser');
});



Route::get('/KidsTop', function () {
    return view('KidsTop');
});

Route::get('/BSwimsuit', function () {
    return view('BSwimsuit');
});

Route::get('/LegSwimsuit', function () {
    return view('LegSwimsuit');
});

Route::get('/Pswimsuit', function () {
    return view('Pswimsuit');
});

Route::get('/Sswimsuit', function () {
    return view('Sswimsuit');
});

Route::get('/KidsScooter', function () {
    return view('KidsScooter');
});



Route::get('items', [ItemController::class, 'index']);  
Route::get('cart', [ItemController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ItemController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ItemController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ItemController::class, 'remove'])->name('remove.from.cart');





Route::view('add','SingUp');
Route::post('add',[RegistrationController::class,'addData']);

Route::view('form','Login');
Route::post('form',[LoginController::class,'login']);

/***********************search data*********************************/

Route::get('/search',[SearchController::class,'search'])->name('web.search');


/********************************************************************** */

//Route::get('payment', 'PaymentController@index');
Route::get('payment',[PaymentController::class,'index']);
//Route::post('charge', 'PaymentController@charge');
Route::post('charge',[PaymentController::class,'charge']);
//Route::get('success', 'PaymentController@success');
Route::get('success',[PaymentController::class,'success']);
//Route::get('error', 'PaymentController@error');
Route::get('error',[PaymentController::class,'error']);



