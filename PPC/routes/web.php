<?php

Route::get('/', 'PagesController@login');

Route::get('/cursos', 'PagesController@cursos');

Route::get('/professores', 'PagesController@professores');

Route::get('/ppc', 'PagesController@ppc');

Route::get('/disciplinas', 'PagesController@disciplinas');

Route::get('/ensino', 'PagesController@ensino');

Route::get('/reuniao', 'PagesController@reuniao');

Route::get('/avaliacao', 'PagesController@avaliacao');
