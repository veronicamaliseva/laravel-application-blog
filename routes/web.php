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
    return view('pages.homepage');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {
    $name = request('contact_name');
    $email = request('contact_email');
    $textarea = request('contact_textarea');

    $myNewContact = new \App\Contact;

    $myNewContact->fullname = $name;
    $myNewContact->email = $email;
    $myNewContact->textarea = $textarea;

    $myNewContact->save();
    return redirect('/');
});

Route::get('/blogs', function () {
    
    $posts = \App\Post::get();

    return view('pages.blogs', [
        'mainigais' => 'cits',
        'blogi' => $posts,
    ]);
    
});

Route::get('/single-blog', function () {
    return view('pages.single-blog');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/login/facebook', 'Auth\LoginController@redirectToFacebook')->name('fblogin');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleFacebookCallback')->name('fbcallback');


