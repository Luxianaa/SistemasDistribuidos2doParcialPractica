<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/graphiql', [
    'as' => 'graphiql',
    'uses' => '\MLL\GraphiQL\GraphiQLController@index',
]);