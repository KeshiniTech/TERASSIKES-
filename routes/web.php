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

Route::get('/profile', function () {
    return view('profile.home');
    // return view('user_view.home');
});
Route::get('/frame', function () {
    return view('profile.frame');
    // return view('user_view.home');
});
Route::get('/suncoin', function () {
    return view('profile.suncoin');
    // return view('user_view.home');
});
Route::get('/add-promo', function () {
    return view('profile.add-promo');
    // return view('user_view.home');
});

Route::get('/profile-page-setting', function () {
    return view('profile.profile-page-setting');
    // return view('user_view.home');
});


Route::get('/home1', function () {
    return view('user.home');
    // return view('user_view.home');
});
Route::get('/home2', function () {
    return view('user.home2');
    // return view('user_view.home');
});
Route::get('/home3', function () {
    return view('user.home3');
    // return view('user_view.home');
});
Route::get('/home4', function () {
    return view('user.home4');
    // return view('user_view.home');
});



Route::get('/category-page', function () {
    return view('user_view.categorypage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/body', function () {
//     return view('dashboard.teams');
// });

Route::get('/addnewcategory', function () {
    return view('dashboard.add_new_category');
});
Route::get('/editnewcategory', function () {
    return view('dashboard.add_new_category_edit');
});
Route::get('/summary-checkout', function () {
    return view('user_view.summary-checkout');
});
Route::get('/charts', function(){
    return view('dashboard.charts');
});

Route::get('/chart', function () {
    return view('dashboard.charts');
});
Route::get('/chats', function () {
    return view('dashboard.chats');
});
Route::get('/datatable', function () {
    return view('dashboard.datatable');
});
Route::get('/datatable2', function () {
    return view('dashboard.datatable2');
});
Route::get('/order_semmary', function () {
    return view('dashboard.order_summery_client');
});
Route::get('/order_semmary_merchain', function () {
    return view('dashboard.order_summery_merchain');
});
Route::get('/todo', function () {
    return view('dashboard.todo');
});

Route::get('/vierailijat', function () {
    return view('dashboard.Vierailijat');
});

Route::get('/tablemap', function () {
    return view('dashboard.tablemap');
});

Route::get('/product', function () {
    return view('dashboard.product');
});

Route::get('/staff', function () {
    return view('dashboard.Staff');
});
////////////////////////// settings ///////////////////////////////////////////////////
Route::get('/setting', function () {
    return view('dashboard.setting');
});
Route::get('/teams', function () {
    return view('dashboard.teams');
});
Route::get('/time_monitorings', function () {
    return view('dashboard.time_monitorings');
});
Route::get('/kolloko', function () {
    return view('dashboard.kolloko');
});
Route::get('/malit', function(){
    return view('dashboard.malit');
});
Route::get('/edit_design_file', function(){
    return view('dashboard.edit_design_file');
});
Route::get('/earn', function(){
    return view('dashboard.earn');
});

Route::get('/kampanjat', function(){
    return view('dashboard.kampjet');
});

Route::get('/qr-koodit', function () {
    return view('dashboard.settings.qr-koodit');
});

Route::get('/terassisi-somet', function () {
    return view('dashboard.settings.terassisi-somet');
});

Route::get('/avainsanat', function () {
    return view('dashboard.settings.avainsanat');
});

Route::get('/widgetti', function () {
    return view('dashboard.settings.widgetti');
});

Route::get('/facebook-pixels', function () {
    return view('dashboard.settings.facebook-pixels');
});

Route::get('/google-analytics', function () {
    return view('dashboard.settings.google-analytics');
});

// Route::get('/widgetit', function () {
//     return view('dashboard.settings.widgetit');
// });

Route::get('/tyuntekijaroolit', function () {
    return view('dashboard.settings.tyuntekijaroolit');
});


// ////////////////////// subscription ///////////////////////////////////////////////
Route::get('/subscription', function () {
    return view('subscription.index');
});
Route::get('/subscription/create-account', function () {
    return view('subscription.index');
});
Route::get('/subscription/confirm-information', function () {
    return view('subscription.index');
});
Route::get('/subscription/payment-information', function () {
   return view('subscription.index');
});
Route::get('/subscription/summary', function(){
    return view('subscription.index');
});