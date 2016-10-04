<?php

Route::group(['prefix' => 'thefirst', 'namespace' => 'Devpa\TheFirst'], function () {
   Route::get('/', 'FirstController@index');
});

