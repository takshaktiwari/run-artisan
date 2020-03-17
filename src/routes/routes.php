<?php


Route::group(['namespace' => 'Kodexploit\Runartisan\Http\Controllers'], function(){

	Route::get('run', 'RunartisanController@index');
	Route::get('run/list', 'RunartisanController@list');
	Route::get('run/cache_all', 'RunartisanController@cache_all');
	Route::get('run/clear_all', 'RunartisanController@clear_all');
	Route::get('run/seed', 'RunartisanController@seed');

	Route::get('run/migrate', 'MigrateController@migrate');
	Route::get('run/migrate/fresh', 'MigrateController@fresh');
	Route::get('run/migrate/install', 'MigrateController@install');
	Route::get('run/migrate/refresh', 'MigrateController@refresh');
	Route::get('run/migrate/reset', 'MigrateController@reset');
	Route::get('run/migrate/rollback', 'MigrateController@rollback');
	Route::get('run/migrate/status', 'MigrateController@status');

	Route::get('run/cache/clear', 'CacheController@clear');
	Route::get('run/cache/forget', 'CacheController@forget');
	Route::get('run/cache/table', 'CacheController@table');

	Route::get('run/config/cache', 'ConfigController@cache');
	Route::get('run/config/clear', 'ConfigController@clear');

	Route::get('run/db/seed', 'DbController@seed');
	Route::get('run/db/wipe', 'DbController@wipe');

	Route::get('run/event/cache', 'EventController@cache');
	Route::get('run/event/clear', 'EventController@clear');
	Route::get('run/event/generate', 'EventController@generate');
	Route::get('run/event/list', 'EventController@list');

	Route::get('run/key/generate', 'KeyController@generate');

	Route::get('run/route/cache', 'RouteController@cache');
	Route::get('run/route/clear', 'RouteController@clear');
	Route::get('run/route/list', 'RouteController@list');
	
	Route::get('run/view/cache', 'ViewController@cache');
	Route::get('run/view/clear', 'ViewController@clear');

});
				