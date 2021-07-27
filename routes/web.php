<?php


use Illuminate\Support\Facades\Route;



Route::group(['namespace' => 'Frontend'], function () {
    Auth::routes();
    Route::get('/', function () {
        return view('Frontend.landing.index');
    });
    //post page
    Route::get('post/', 'Post\HomeController@index');
    Route::get('post/{post}', 'Post\PostController@post')->name('post');
    Route::get('post/tag/{tag}', 'Post\HomeController@tag')->name('post.tag');
    Route::get('post/category/{category}', 'Post\HomeController@category')->name('post.category');

    // contact_us
    Route::get('contact-us', 'Contact\ContactController@getContact');
    Route::post('contact-us', 'Contact\ContactController@saveContact');
    //comment
    Route::post('/comment/store', 'Comment\CommentController@store')->name('comments.store');
   

    
    // Route::get('add/to/cart/{id}', 'CartController@AddCart');
    // Route::get('product/cart', 'CartController@ShowCart')->name('show.cart');
    // Route::get('remove/cart/{rowId}', 'CartController@removeCart');
    // Route::post('update/cart/item/', 'CartController@UpdateCart')->name('update.cartitem');
    // Route::get('/cart/product/view/{id}', 'CartController@ViewProduct');
    // Route::post('insert/into/cart/', 'CartController@insertCart')->name('insert.into.cart');
    // Route::get('user/checkout/', 'CartController@Checkout')->name('user.checkout');
    // Route::get('user/wishlist/', 'CartController@wishlist')->name('user.wishlist');
    // Route::post('user/apply/coupon/', 'CartController@Coupon')->name('apply.coupon');
    // Route::get('coupon/remove/', 'CartController@CouponRemove')->name('coupon.remove');
    // Route::get('check', 'CartController@check');
    // // Add to Product Route 
    // Route::get('product/details/{id}/{product_name}', 'ProductController@ProductView');
    // Route::post('/cart/product/add/{id}', 'ProductController@AddCart');
    Route::post('store/newslater', 'NewsLater\NewslaterController@StoreNewslater')
        ->name('store.newslater');
    // // Order Tracking Route
    Route::post('order/traking', 'NewsLater\NewslaterController@OrderTraking')->name('order.tracking');
    // // ADD Wishlist
    // Route::get('add/wishlist/{id}', 'WishlistController@addWishlist');

    // // Pyment Step 
    // Route::get('payment/page', 'CartController@PaymentPage')->name('payment.step');
    // // Search Route
    // Route::post('product/search', 'CartController@Search')->name('product.search');
    // Route::post('user/payment/process/', 'PaymentController@Payment')->name('payment.process');
    // Route::post('user/stripe/charge/', 'PaymentController@StripeCharge')->name('stripe.charge');
    // Route::post('user/oncash/charge/', 'PaymentController@OnCash')->name('oncash.charge');
    // Route::get('success/list/', 'PaymentController@SuccessList')->name('success.orderlist');
    // Route::get('request/return/{id}', 'PaymentController@RequestReturn');
    // Route::get('products/{id}', 'ProductController@ProductsView')->name('products.view.pag');
    // Route::get('allcategory/{id}', 'ProductController@CategoryView');
    // // Contact
    // Route::get('contact/page', 'ContactController@Contact')->name('contact.page');
    // Route::post('contact/form', 'ContactController@ContactForm')->name('contact.form');
    // Route::get('admin/all/message', 'ContactController@AllMessage')->name('all.message');
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
    Route::post('getPosts', 'PostController@getAllPosts');
    // Tag Routes
    Route::resource('admin/tag', 'TagController');
    // Category Routes
    Route::resource('admin/category', 'CategoryController');
    Route::resource('admin/subcategory', 'SubCategoryController');
    Route::resource('admin/newslater', 'NewslaterController', [
        'except' => ['edit', 'update', 'show', 'store', 'create']
      ]);
    //product
    Route::resource('admin/product', 'ProductController', [
        'except' => ['update']
      ]);
      Route::get('get/subcategory/{category_id}', 'ProductController@GetSubcat'); // For Show Sub category with ajax
      Route::get('inactive/product/{id}', 'ProductController@inactive');
      Route::get('active/product/{id}', 'ProductController@active');
      Route::post('update/product/withoutphoto/{id}', 'ProductController@UpdateProductWithoutPhoto');
      Route::post('update/product/photo/{id}', 'ProductController@UpdateProductPhoto');

    Route::resource('admin/about', 'AboutController');
    Route::resource('admin/coupon', 'CouponController');
    Route::resource('admin/advertising', 'AdvertisingController');
    
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
    //contact
    Route::get('admin/contact-us','ContactController');
    Route::get('admin/contact-us/{contact}','ContactController@destroy')->name('contact.destroy');
});
