    return view('welcome');
});
Route::group(['prefix' => 'admin'] , function() {
    Route::get('news/create', 
'Admin\NewsController@add')->middleware('auth');
});
    Route::get('news/create', 'Admin\NewsController@add');});

//課題3//
Route::get('XXX', 'AAAController@bbb');
    
//課題4//
Route::get('admin/profile/create',
'Admin\ProfileController@add');
'Admin\ProfileController@add')->middleware('auth');

Route::get('admin/profile/edit',
'Admin\ProfileController@edit');
Auth::routes();
'Admin\ProfileController@edit')->middleware('auth'); Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
