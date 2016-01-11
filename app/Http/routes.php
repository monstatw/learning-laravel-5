<?php

Route::get("about", "PagesController@about");

Route::get('tasks', 'TasksController@index');
Route::get('tasks/{id}', 'TasksController@show');