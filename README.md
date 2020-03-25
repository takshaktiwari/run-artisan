
# Run Artisan
#### `composer require kodexploit/runartisan`


This package is made for **Laravel 5.5 +** and will be useful for those who want to run `Artisan commands` via url. I case when you have deployed your application on a shared server in there is no **terminal** or terminal is not working, in that case you can use install this package and run your basic and most usefull commands via url.

You will only be able to access these urls or package when your `APP_DEBUG` variable is set to `true` in your .env file. (`APP_DEBUG=true`)
Base URL for this package will be [https://example.com/run/{param1}/{param2}.](#)

**For Example:-**
> https://example.com/run/list 

> https://example.com/run/migrate

> https://example.com/run/cache/clear


|  URL| Description |
|--|--|
|  /| 					This is the home page where you can find information about this package |
|/command| 				Global URL from where you can run almost every commands by passing a parameter `cmd`. **E.g.** `https://example.com/run/command?cmd=migrate`  `https://example.com/run/command?cmd=migrate:rollback --step=1`   `https://example.com/run/command?cmd=cache:clear` |
| /list	| 				Lists all artisan commands|
|/cache_all|			Generates cache of config, view, event. It runs these commands `config:cache` `view:cache` `event:cache`|
|/clear_all |			Clears cache of `config, view, event, route`. It runs these commands `config:clear` `view:clear` `event:clear` `route:clear`|
|/seed|					Seed the database with records `db:seed`|
|/clear-compiled|		Remove the compiled class file `db:clear-compiled`|
|/down	|				Put the application into maintenance mode `down`|
|/env|					Display the current framework environment `env`|
|/inspire|				Display an inspiring quote `inspire`|
|/optimize|				Cache the framework bootstrap files `optimize`|
|/serve	|				Serve the application on the PHP development server `serve`|
|/up	|				Bring the application out of maintenance mode `up`|
|/cache/clear|			Flush the application cache `cache:clear`
|/cache/forget|			Remove an item from the cache `cache:forget`
|/cache/table	|		Create a migration for the cache database table `cache:table`
|/config/cache|			Create a cache file for faster configuration loading `config:cache`
|/config/cache|			Remove the configuration cache file `config:cache`
|/db/seed|				Seed the database with records `db:seed`
|/db/wipe	|			Drop all tables, views, and types `db:wipe`
|/event/cache|			Discover and cache the application's events and listeners `event:cache`
|/event/clear|			Clear all cached events and listeners `event:clear`
|/event/generate	|	Generate the missing events and listeners based on registration `event:generate`
|/event/list|			List the application's events and listeners `event:list`
|/key/generate|			Set the application key `key:generate`
|/migrate|				Run the database migrations `migrate`
|/migrate:fresh|		Drop all tables and re-run all migrations `migrate:fresh`
|/migrate/install|		Create the migration repository `migrate:install`
|/migrate/refresh|		Reset and re-run all migrations `migrate:refresh`
|/migrate/reset|		Rollback all database migrations `migrate:reset`
|/migrate/rollback|		Rollback the last database migration `migrate:rollback`
|/migrate/status| 		Show the status of each migration `migrate:status`
|/notifications/table|	Create a migration for the notifications table `notifications:table`
|/optimize/clear|		Remove the cached bootstrap files `optimize:clear`
|/package/discover|		Rebuild the cached package manifest `package:discover`
|/queue/failed|			List all of the failed queue jobs `queue:failed`
|/queue/failed-table|	Create a migration for the failed queue jobs database table `queue:failed-table`
|/queue/flush|			Flush all of the failed queue jobs `queue:flush`
|/queue/forget|			Delete a failed queue job `queue:forget`
|/queue/listen|			Listen to a given queue `queue:listen`
|/queue/restart|		Restart queue worker daemons after their current job `queue:restart`
|/queue/retry|			Retry a failed queue job `queue:retry`
|/queue/table|			Create a migration for the queue jobs database table `queue:table`
|/queue/work|			Start processing jobs on the queue as a daemon `queue:work`
|/route/cache|			Create a route cache file for faster route registration `route:cache`
|/route/clear|			Remove the route cache file `route:clear`
|/route/list|			List all registered routes `route:list`
|/schedule/run|			Run the scheduled commands `schedule:run`
|/session/table|		Create a migration for the session database table `session:table`
|/storage/link|			Create the symbolic links configured for the application `storage:link`
|/stub/publish|			Publish all stubs that are available for customization `stub:publish`
|/view/cache|			Compile all of the application's Blade templates `view:cache`
|/view/clear|			Clear all compiled view files `view:clear`


> **Email**: 	takshaktiwari@gmail.com

> **Web**:	[takshaktiwari.com](takshaktiwari.com)
