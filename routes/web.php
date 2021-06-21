<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', 'HomeController@index')->name('home');

// User Routes
Route::group(['namespace' => 'Frontend'], function () {
    Auth::routes();
    //post page
    Route::get('post/', 'Post\HomeController@index');
    Route::get('post/{post}', 'Post\PostController@post')->name('post');
    Route::get('post/tag/{tag}', 'Post\HomeController@tag')->name('post.tag');
    Route::get('post/category/{category}', 'Post\HomeController@category')->name('post.category');

    // contact_us
    Route::get('contact', 'Contact\ContactController@show')->name("contact.show");
    Route::post('contact/send', 'Contact\ContactController@send')->name("contact.send");
});

//Admin Routes
Route::group(['namespace' => 'Backend'], function () {
    Route::get('admin/home', 'HomeController@index')->name('admin.home');
    //Route show_users
    Route::get('admin/users', 'UserController@showusers')->name('user.showusers');
    Route::delete('admin/users/{user} ', 'UserController@destroyshowusers')->name('user.destroyshowusers');
    // Develop Routes
    Route::resource('admin/user', 'UserController');
    // Roles Routes
    Route::resource('admin/role', 'RoleController');
    // Permission Routes
    Route::resource('admin/permission', 'PermissionController');
    // Post Routes
    Route::resource('admin/post', 'PostController');
    // Route::post('getPosts', 'PostController@getAllPosts');
    // Tag Routes
    Route::resource('admin/tag', 'TagController');
    // Category Routes
    Route::resource('admin/category', 'CategoryController');
    Route::resource('admin/about', 'AboutController');
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
});
