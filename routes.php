Route::get('/compete', function () {
    return view('compete');
});

Route::get('/question', function () {
    return view('question');
});

Route::get('/problem', function () {
    return view('problem');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});



Route::get('/send','mailController@send');