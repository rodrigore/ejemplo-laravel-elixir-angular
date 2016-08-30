<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('scores', 'ScoresController@index');
Route::get('scores/create', 'ScoresController@create');
Route::post('scores/create', 'ScoresController@store');

Route::get('test', function () {

    return \App\Score::limit(1)
        ->select('id', 'username')
        ->newest()
        ->paginate();

    $score = \App\Score::find(1);

    return $score->repos()->create([
        'url' => 'google.cl',
        'stars' => 1,
        'lang' => 'js'
    ]);
});

Route::get('porquesi', function () {
    return \App\Score::first();
});
