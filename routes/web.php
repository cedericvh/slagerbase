<?php

$router->group(['namespace' => 'Client'], function($router) {
    $router->get('/', 'IndexController@index')->name('client.index.index');
    $router->get('/ambacht', 'AmbachtController@index')->name('client.ambacht.index');
    $router->get('/specialiteiten', 'SpecialtiesController@index')->name('client.specialiteiten.index');
    $router->get('/folders', 'FoldersController@index')->name('client.folders.index');
    $router->get('/contact', 'ContactController@index')->name('client.contact.index');
    $router->get('/bestelonline', 'OrdersController@index')->name('client.orders.index');
    $router->get('/bestelonline-confirm', 'OrdersController@success')->name('client.orders.success');
    $router->get('/nieuwsbrief', 'NewsController@index')->name('client.newsletter.index');
    $router->get('/bedanktnieuwsbrief', 'NewsController@success')->name('client.newsletter.success');  
    $router->post('/bestelonline', 'OrdersController@store')->name('client.orders.store');
    $router->post('/nieuwsbrief', 'NewsController@store')->name('client.newsletter.store');
});

$router->group(['namespace' => 'Admin', 'prefix' => 'admin'], function($router) {
    $router->group(['middleware' => 'guest'], function($router) {
        $router->get('/login', 'AuthController@getLogin')->name('admin.auth.getLogin');
        $router->post('/login', 'AuthController@postLogin')->name('admin.auth.postLogin');
    });
    $router->group(['middleware' => 'auth.admin'], function($router) {
        $router->get('/', 'NewsitemsController@index')->name('admin.newsitems.index');
        $router->get('/newsletter', 'NewsController@index')->name('admin.newsletter.index');
        $router->get('/orders', 'OrdersController@index')->name('admin.orders.index');
        $router->get('/logout', 'AuthController@getLogout')->name('admin.auth.getLogout');
        $router->post('/orders/emails', 'OrdersController@sendEmails')->name('admin.orders.sendEmails');
        $router->post('/newsletter', 'NewsController@store')->name('admin.newsletter.store');
        
        $router->resource('/templates', 'TemplatesController', ['as' => 'admin']);
        $router->get('/templates/{template}/destroy', 'TemplatesController@destroy')->name('admin.templates.delete');
      
        $router->resource('/newsitems', 'NewsitemsController', ['as' => 'admin']);
        $router->get('/newsitems/{newsitem}/destroy', 'NewsitemsController@destroy')->name('admin.newsitems.delete');      
        
        $router->resource('/promoties', 'PromotiesController', ['as' => 'admin']);        
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index');
