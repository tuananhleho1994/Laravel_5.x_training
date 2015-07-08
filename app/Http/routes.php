<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*===================================Route================================================================================*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', function(){
    return view("hello.helloworld");
});

//Route::get('value/{id}', function($id){
//    echo "Value 01: ".$id;
//})->where(array('id'=>'[a-zA-Z0-9]+'));

Route::get('value/{id}', function($id){
    echo "Value 01: ".$id;
})->where(['id'=>'[a-zA-Z0-9]+']);

Route::post('foo/bar', function () {
    return 'Hello World';
});
/*========================Updating=======================================*/
Route::put('foo/bar', function () {
    // Updating
});

Route::delete('foo/bar', function () {
    // Updating
});
/*========================End Updating=======================================*/
Route::match(['get', 'post'], '/', function () {
    return 'Hello World';
});

Route::any('redirect', function () {
    $url = url('value/100');
    echo "<a href='".$url."'>Click here</a><br/>";
    return redirect($url);
});

Route::any('foo', function () {
    $url = url('value/100');
    echo "<a href='".$url."'>Click here</a><br/>";
    return $url;
});

//Route::get('user/{name?}', function ($name = null) {
//    return $name;
//});
//
//Route::get('user/{name?}', function ($name = 'John') {
//    return $name;
//});

Route::get('user/profile', ['as'=>'userProfile', 'uses'=>'UserController@showProfile']);

Route::get('route', function(){
    $url = route('userProfile');
    echo $url."<br/>";
    return redirect()->route('userProfile');
});

Route::get('user/profile/{name}/{age}', ['as'=>'userParam', 'uses'=>'UserController@someParam']);
Route::get('routeRedirect', function(){
    $url = route('userParam', array('name'=>'Do Tuan Anh', 'age'=>'21'));
    echo $url."<br/>";
    return redirect()->route('userParam', array('name'=>'Do Tuan Anh', 'age'=>'21'));
});
/*========================Updating=======================================*/
//Route::group(['namespace' => 'Customer', 'prefix'=>'customer/{id}'], function(){
//    // Controllers Within The "App\Http\Controllers\Admin" Namespace
//    Route::get('custom/{countId}', 'CustomController@index')->where(['countId'=>'[0-9]+']);
//
//    Route::group(['namespace' => 'User'], function()
//    {
//        // Controllers Within The "App\Http\Controllers\Admin\User" Namespace
//    });
//})->where(['id'=>'[0-9]+']);
/*========================End Updating=======================================*/
Route::group(['namespace' => 'Customer', 'prefix'=>'customer/{id}'], function(){
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('custom/{countId}', 'CustomController@index')->where(['countId'=>'[0-9]+']);

    Route::group(['namespace' => 'User'], function()
    {
        // Controllers Within The "App\Http\Controllers\Admin\User" Namespace
    });
});
/*===================================End Route================================================================================*/


/*===================================Middleware==========================================================================*/
Route::get('form/profileGet', function(){
    return view('form.profile');
});
Route::post('form/profilePost', ['middleware' => 'age', function(){
    echo "<script>alert('This is method post')</script>This is post";
}]);
/*===================================End Middleware==========================================================================*/


/*===================================URL==========================================================================*/
Route::get('url/', function(){
    $url_01 = url('value/100');
    $url_02 = action('Customer\CustomController@index', ['countId'=>100]);
    $url_03 = route('userParam', array('name'=>'Do Tuan Anh', 'age'=>'21'));
    echo $url_01."<br/>";
    echo $url_02."<br/>";
    echo $url_03."<br/>";
});
/*===================================End URL==========================================================================*/


/*===================================RESTful Resource Controllers==========================================================================*/

Route::resource('photo','PhotoController',['names'=>['create'=>'photo.build']]);// Restful Controller

Route::resource('bboy','BboyController',array('only'=>array('index','show')));// Restful Controller

Route::resource('bgirl','BgirlController',array('except'=>array('index','show')));// Restful Controller
//Route::resource('photo', 'PhotoController',
//    ['names' => ['create' => 'photo.build']]);

Route::controller('implicit','ImplicitController');// Implicit Controller
/*===================================End RESTful Resource Controllers==========================================================================*/
/*===================================Request==========================================================================*/
Route::get('request/show',['as'=>'form','uses'=>'RequestController@show']);
Route::post('request/store','RequestController@store');
Route::put('request/update/{id}', 'RequestController@update');
Route::get('request/uri', 'RequestController@uri');

Route::get('request/file','RequestController@getFile');
Route::post('request/file','RequestController@postFile');
/*===================================End Request==========================================================================*/