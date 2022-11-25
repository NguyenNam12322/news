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


Route::get('/tin-tuc', 'Frontend\blogController@index');

Route::get('/', 'Frontend\indexController@index')->name('home');

Route::get('/ckfinder.html', 'mainController@ckfinder')->middleware('auth');

Route::get('/lien-he', 'mainController@lienhe');

Route::get('/crawl', 'crawlController@updateLinkCategory');


Route::get('/', 'Frontend\indexController@index')->middleware('throttle:60')->name('homeFe');

Route::post('login-Fe', 'AjaxController@loginClientsFe')->name('login-Fe');

Route::get('logout-Fe', 'AjaxController@logout')->name('logout-Fe');

Route::get('tim', 'productController@FindbyNameOrModelOfFrontend')->name('search-product-frontend');

Route::get('/category/{slug}', 'Frontend\categoryController@index')->name('category-product');

Route::get('/login', 'Frontend\categoryController@login');

Route::get('/{slug}', 'Frontend\categoryController@details')->middleware('throttle:80')->name('details');

Route::post('ajax-clent-register', 'AjaxController@registerClient')->name('register-client-fe');

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'admins','middleware' => 'auth'], function() {


    Route::get('hot-list', 'hotController@index')->name('host-list');

    Route::post('update-order-hot','hotController@hotOrderProduct')->name('order-hot');

    Route::get('seachtitlePost', 'postController@searchTitle')->name('searTitlePost');

    Route::get('get-time-deal', 'dealController@getTimeDeal')->name('getTimeDeal');


    Route::get('update-call-phone/{id}', 'lienheController@updateCall')->name('updateCall');

    Route::get('updateTimeDeal', 'dealController@updateTimeDeal')->name('updateTimeDeal');

    Route::get('update-banner-stt', 'AjaxController@banner_update_stt')->name('editBnstt');

    Route::get('/register','customnUserController@registerUser')->name('register-user');

    Route::get('/delete-user-permission','customnUserController@deleteUser')->name('deleteUser');

    Route::get('filter-group-id', 'dealController@getProductToGroupId')->name('filter-group-id');

    Route::get('fill-product-deal', 'dealController@getProductToName')->name('filter-product-deal');

    Route::get('destroyGroupGift/{id}', 'giftController@destroyGift')->name('destroyGiftGroup');

    Route::get('giftGroupAddProduct', 'AjaxController@giftGroupAdd')->name('giftGroupAdd');

    Route::get('fill-product-deal-flash', 'flashdealController@getProductToName')->name('filter-product-deal-flash');

    Route::get('landingpage', 'mainController@landingBe')->name('landing');

    Route::get('add-css', 'mainController@addCss')->name('addcss');

    Route::get('view-history/{id}', 'productController@viewHistoryPD')->name('view-history');

    Route::get('readfile-css/{id}', 'mainController@readFileCss')->name('readCss');

    Route::post('save-css','mainController@saveCss')->name('saveCss');

    Route::get('find-post', 'postController@findPostByValue')->name('findPostAdmin');

    Route::post('/editFastPrice', 'productController@editFastPrice')->name('fast-price');

    Route::post('update-time-flash-deal', 'flashdealController@updateTimeFlashDeal')->name('update-time-flash-deal');

    Route::post('/edit-fast-Qualtity', 'productController@editFastQualtity')->name('edit-fast-qualtity');

    Route::get('update-permision', 'customnUserController@updatePermision')->name('updatePermission');

    Route::post('productContentImage', 'imageController@productContentImage')->name('imagecontents');

    Route::post('/addUser', 'customnUserController@addUser')->name('adduser');


    Route::post('/add-limit', 'AjaxController@addLimitProduct')->name('add-limit-product');

    Route::post('/remove-limit', 'AjaxController@removeLimitProduct')->name('remove-limit-product');


    Route::get('deal', 'dealController@index')->name('deal');


    Route::get('flash-deal', 'dealController@flashDeal')->name('flashDeal');

    Route::post('add-deal-flash', 'flashdealController@addDealFlash')->name('add-deal-flash');

    Route::get('editPricedeal', 'dealController@editDealPrice')->name('editPricedeal');

     Route::get('edit-price-flash-deal', 'flashdealController@editFlashDealPrice')->name('editFlashPricedeal');

    Route::post('showDealEdit', 'dealController@showDealEdits')->name('showDealEdit');

    Route::post('update-deal-price-to-id', 'dealController@updateFlashDealToId')->name('update_deal_price_to_id');

    Route::post('remove-deal-flash', 'dealController@removeDealFlash')->name('removeDealFlash');


    Route::get('add-Deal-Flashs', 'dealController@addDealFlashs')->name('addDealFlashs');

    Route::get('post-codinh', 'mainController@footerpost')->name('postcd');

    Route::get('list-flash-deal', 'dealController@viewFlashDeal')->name('viewFlashDeal');


    Route::get('home', 'HomeController@index')->name('home-admin');

    Route::get('delete-link-add', 'showController@deleteLinkAdd')->name('delete-link-add');


     Route::get('changepass', 'mainController@changepass')->name('changepassview');
    

    Route::post('info-pop-up', 'showController@addPopup')->name('add-popup');

    Route::post('user-edit-pass', 'customnUserController@changePassWord')->name('changepass');

    Route::post('add-image-background', 'showController@addBackgroundSite')->name('add-image-background');

    Route::get('rate', 'mainController@rate')->name('rate-client');

    Route::get('/group-product/selected/{id}', 'groupProductController@showProductIdToUrl')->name('group-product-selected');

    Route::get('view-user', 'customnUserController@viewUser')->name('view-user');

    Route::get('new-banner', 'mainController@newBanner')->middleware('auth');


    Route::get('order', 'Frontend\orderController@orderList')->name('order_list');

    Route::get('/order-list/{id}', 'Frontend\orderController@orderListView')->name('order_list_view');

    Route::post('/add-group-product-option', 'groupProductController@addGroupProduct')->name('add-group-product');

    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

    Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

    Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

    Route::get('show/pop-up', 'mainController@funcmorePopup')->name('pop-up-show');

    Route::get('imagescontent/{id}', 'productController@imagecontent')->name('imagescontent');


    Route::get('add-lanfding-pro', 'landingController@addLanding')->name('add-product-landing');

   
    Route::get('add-hight-light', 'landingController@add_Hight_Light')->name('add-hight-light');

    Route::get('remove-hight-light', 'landingController@removeLanding')->name('remove-hight-light');

    Route::post(    
        'generator_builder/generate-from-file',
        '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
    )->name('io_generator_builder_generate_from_file');

    Route::resource('metaSeos', 'metaSeoController');

    Route::resource('menus', 'menuController');

    Route::resource('posts', 'postController');

    Route::resource('banners', 'bannerController');

    Route::get('activeBanner', 'bannerController@activeBanner')->name('active-banner');

    Route::resource('categories', 'categoryController');

    Route::resource('groupProducts', 'groupProductController');

    Route::get('showGroupProduct', 'groupProductController@showGroupProduct')->name('showGroupProduct');

    Route::get('deleteGroupProduct', 'groupProductController@removeGrPD')->name('deleteGroupProduct');

    Route::resource('makers', 'makerController');

    Route::resource('products', 'productController');

    Route::resource('images', 'imageController');

    Route::get('find-product', 'productController@FindbyNameOrModel')->name('find-product');

    Route::get('category/{category_id}', 'productController@selectProductByCategory')->name('select-category');

    Route::get('edit-property-child', 'propertyController@editPropertyChild')->name('property-edit-child');

    Route::get('remove-property-child', 'propertyController@removePropertyChild')->name('property-remove-child');

    Route::get('child-click', 'AjaxController@findChild')->name('filter-child-click');

    Route::get('image-Product-change', 'imageController@updateImageProduct')->name('image-ajax-product');


    Route::get('add-active-post', 'postController@addActive')->name('add-active-post');

    Route::get('add-hight-light-post', 'postController@addHightLight')->name('add-hight-light-post');

    Route::resource('filters', 'filterController');


    Route::get('/filter', 'Frontend\filterController@index')->name('filter-property');

    Route::get('/filter-deal-products-add', 'dealController@GetProductbyId')->name('filter-deal-add');


    Route::get('/filter-deal-flash-products-add', 'flashdealController@GetProductbyId')->name('filter-deal-flash-add');


    Route::get('/filter-deal-products-add-deal', 'dealController@add_Deal')->name('result-add');

    Route::get('/delete-deal', 'dealController@removeDeal')->name('delete-deal');

    Route::get('/remove-flash-deal', 'flashdealController@removeDeal')->name('removeFlashDeal');



    Route::get('redirect/create', 'redirectLinkController@index')->name('redirect.creates');

    Route::get('redirect/list', 'redirectLinkController@list')->name('redirect.list');

    Route::post('redirects/create', 'redirectLinkController@store')->name('redirect.create');

    Route::post('redirect/update/{id}', 'redirectLinkController@update')->name('redirect.update');

    Route::get('redirect/delete/{id}', 'redirectLinkController@remove')->name('redirect.remove');

    Route::get('redirect/show/{id}', 'redirectLinkController@show')->name('redirect.show');

    Route::get('banner/delete/{id}','bannerController@destroy')->name('banner.destroy');



    Route::get('/active-deal', 'dealController@activeDeal')->name('active-deal');

    Route::get('/active-flash-deal', 'flashdealController@activeDeal')->name('active-flash-deal');                                            
    //ajax

    Route::post('add-selected-value-filter', 'AjaxController@addValueSelectFilter')->name('add-value-selected-filter');

    

    Route::post('add-promotion', 'AjaxController@add_promotion')->name('add-promotion');
    

    Route::post('update-post-featured', 'AjaxController@findUpdatePost')->name('update-featured');


    Route::post('add-group-gift', 'AjaxController@add_group_promotion')->name('add-group-gift');

    Route::post('add-gift', 'AjaxController@add_gift')->name('add-gift');

    Route::post('accept-rate', 'AjaxController@accept_rate')->name('accept-rate');


    Route::post('add-hot-product', 'AjaxController@addHotProduct')->name('add-hot-product');

    Route::post('add-hots-product', 'AjaxController@addHotsProduct')->name('add-hots-product');

    Route::post('remove-hot-product', 'AjaxController@removeHotProduct')->name('remove-hot-product');

    Route::post('remove-hots-product', 'AjaxController@removeHotsProduct')->name('remove-hots-product');

    Route::post('add-sale-product', 'AjaxController@addSaleProduct')->name('add-sale-product');

    Route::post('add-new-product', 'AjaxController@addNewProduct')->name('add-new-product');

    Route::post('remove-new-product', 'AjaxController@removeNewProduct')->name('remove-new-product');

    Route::post('remove-sale-product', 'AjaxController@removeSaleProduct')->name('remove-sale-product');

     

    Route::post('check-active', 'AjaxController@checkActive')->name('check-active');

    Route::post('add-active-confirm-product', 'AjaxController@addConfirm')->name('add-active-confirm');

    Route::resource('properties', 'propertyController');

    Route::resource('gifts', 'giftController');

});








