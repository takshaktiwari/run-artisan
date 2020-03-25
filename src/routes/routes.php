<?php

Route::group(['namespace' => 'Kodexploit\Runartisan\Http\Controllers'], function(){
	if (env('APP_DEBUG', false) == true) {
		Route::get('run', 'RunartisanController@index');
		Route::get('run/command', 'RunartisanController@command');

		Route::get('run/list', 'RunartisanController@list');
		Route::get('run/cache_all', 'RunartisanController@cache_all');
		Route::get('run/clear_all', 'RunartisanController@clear_all');
		Route::get('run/seed', 'RunartisanController@seed');

		Route::get('run/clear-compiled', 'RunartisanController@clear_compiled');
		Route::get('run/down', 'RunartisanController@down');
		Route::get('run/env', 'RunartisanController@env');
		Route::get('run/inspire', 'RunartisanController@inspire');
		Route::get('run/optimize', 'RunartisanController@optimize');
		Route::get('run/serve', 'RunartisanController@serve');
		Route::get('run/up', 'RunartisanController@up');

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

		Route::get('run/migrate', 'MigrateController@migrate');
		Route::get('run/migrate/fresh', 'MigrateController@fresh');
		Route::get('run/migrate/install', 'MigrateController@install');
		Route::get('run/migrate/refresh', 'MigrateController@refresh');
		Route::get('run/migrate/reset', 'MigrateController@reset');
		Route::get('run/migrate/rollback', 'MigrateController@rollback');
		Route::get('run/migrate/status', 'MigrateController@status');

		Route::get('run/notifications/table', 'RunartisanController@notifications_table');
		Route::get('run/optimize/clear', 'RunartisanController@optimize_clear');
		Route::get('run/package/discover', 'RunartisanController@package_discover');
		
		Route::get('run/queue/failed', 'QueueController@failed');
		Route::get('run/queue/failed-table', 'QueueController@failed_table');
		Route::get('run/queue/flush', 'QueueController@flush');
		Route::get('run/queue/forget', 'QueueController@forget');
		Route::get('run/queue/listen', 'QueueController@listen');
		Route::get('run/queue/restart', 'QueueController@restart');
		Route::get('run/queue/retry', 'QueueController@retry');
		Route::get('run/queue/table', 'QueueController@table');
		Route::get('run/queue/work', 'QueueController@work');

		Route::get('run/route/cache', 'RouteController@cache');
		Route::get('run/route/clear', 'RouteController@clear');
		Route::get('run/route/list', 'RouteController@list');

		Route::get('run/schedule/run', 'RunartisanController@schedule_run');
		Route::get('run/session/table', 'RunartisanController@session_table');
		Route::get('run/storage/link', 'RunartisanController@storage_link');
		Route::get('run/stub/publish', 'RunartisanController@stub_publish');
		
		Route::get('run/view/cache', 'ViewController@cache');
		Route::get('run/view/clear', 'ViewController@clear');

		#	any other which is not in this routes
		Route::get('run/{param1?}/{param2?}/{param3?}', 'RunartisanController@index');
	}
});
				