<?php
    //  BACKEND
    Route::group(['namespace' => 'Backend','prefix' => 'admin'], function (){
        //Trang Chu
        Route::get('/','BackendHomeController@index')->name('get_backend.home');

        //User
        Route::prefix('user')->group(function(){
            Route::get('','BackendUserController@index')->name('get_backend.user.index');
            //Create
            Route::get('create','BackendUserController@create')->name('get_backend.user.create');
            //Save
            Route::post('create','BackendUserController@store');
            //update
            Route::get('update/{id}','BackendUserController@edit')->name('get_backend.user.update');
            //Save
            Route::post('update/{id}','BackendUserController@update');
            //Delete
            Route::get('delete/{id}','BackendUserController@delete')->name('get_backend.user.delete');
        });

        //Category
        Route::prefix('category')->group(function(){
            Route::get('','BackendCategoryController@index')->name('get_backend.category.index');
            //Create
            Route::get('create','BackendCategoryController@create')->name('get_backend.category.create');
            //Save
            Route::post('create','BackendCategoryController@store')->name('get_backend.category.store');
            //update
            Route::get('update/{id}','BackendCategoryController@edit')->name('get_backend.category.update');
            //Save
            Route::post('update/{id}','BackendCategoryController@update');
            //Delete
            Route::get('delete/{id}','BackendCategoryController@delete')->name('get_backend.category.delete');
        });

        //Keyword
        Route::prefix('keyword')->group(function(){
            Route::get('','BackendKeywordController@index')->name('get_backend.keyword.index');

            Route::get('create','BackendKeywordController@create')->name('get_backend.keyword.create');
            Route::post('create','BackendKeywordController@store')->name('get_backend.keyword.store');

            Route::get('update/{id}','BackendKeywordController@edit')->name('get_backend.keyword.update');
            Route::post('update/{id}','BackendKeywordController@update');

            Route::get('delete/{id}','BackendKeywordController@delete')->name('get_backend.keyword.delete');
        });

        //Product
        Route::prefix('product')->group(function(){
            Route::get('','BackendProductController@index')->name('get_backend.product.index');

            Route::get('create','BackendProductController@create')->name('get_backend.product.create');
            Route::post('create','BackendProductController@store');

            Route::get('update/{id}','BackendProductController@edit')->name('get_backend.product.update');
            Route::post('update/{id}','BackendProductController@update');

            Route::get('delete/{id}','BackendProductController@delete')->name('get_backend.product.delete');
        });

        //Menu
        Route::prefix('menu')->group(function(){
            Route::get('','BackendMenuController@index')->name('get_backend.menu.index');

            Route::get('create','BackendMenuController@create')->name('get_backend.menu.create');
            Route::post('create','BackendMenuController@store')->name('get_backend.menu.store');

            Route::get('update/{id}','BackendMenuController@edit')->name('get_backend.menu.update');
            Route::post('update/{id}','BackendMenuController@update');

            Route::get('delete/{id}','BackendMenuController@delete')->name('get_backend.menu.delete');
        });

        //Article
        Route::prefix('article')->group(function(){
            Route::get('','BackendArticleController@index')->name('get_backend.article.index');

            Route::get('create','BackendArticleController@create')->name('get_backend.article.create');
            Route::post('create','BackendArticleController@store');

            Route::get('update/{id}','BackendArticleController@edit')->name('get_backend.article.update');
            Route::post('update/{id}','BackendArticleController@update');

            Route::get('delete/{id}','BackendArticleController@delete')->name('get_backend.article.delete');
        });

        //Tag
        Route::prefix('tag')->group(function(){
            Route::get('','BackendTagController@index')->name('get_backend.tag.index');

            Route::get('create','BackendTagController@create')->name('get_backend.tag.create');
            Route::post('create','BackendTagController@store')->name('get_backend.tag.store');

            Route::get('update/{id}','BackendTagController@edit')->name('get_backend.tag.update');
            Route::post('update/{id}','BackendTagController@update');

            Route::get('delete/{id}','BackendTagController@delete')->name('get_backend.tag.delete');
        });

        //Setting
        Route::get('setting','BackendSettingController@index')->name('get_backend.setting');
        Route::post('setting','BackendSettingController@createOrUpdate')->name('get_backend.store');

        //Profile Backend
        Route::get('profile','BackendProfileController@index')->name('get_backend.profile');
        Route::post('profile','BackendProfileController@createOrUpdate')->name('get_backend.store');

    });
