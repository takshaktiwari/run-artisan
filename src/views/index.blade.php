<!DOCTYPE html>
<html>
<head>
	<title>Run Artisan Help</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" SameSite=Secure>

	<style>
		table tbody tr td {
			font-size: 14px;
			padding-top: 5px!important;
			padding-bottom: 5px!important;
		}
	</style>
</head>
<body  style="background-color: #e4e4e4" class="py-4">
	<div class="container">
		<h1 class="font-weight-bold mb-0">Run Artisan</h1>
		<h5 ><code class="text-danger">composer require kodexploit/runartisan</code></h5>

		<div class="mt-4">
			<p>
				This package is made for <b>Laravel 5.5 +</b> and will be useful for those who want to run <code>Artisan commands</code> via url. I case when you have deployed your application on a shared server in there is no <b>terminal</b> or terminal is not working, in that case you can use install this package and run your basic and most usefull commands via url.
			</p>
			<p class="text-danger">
				You will only be able to access these urls or package when your <code>APP_DEBUG</code> variable is set to <code>true</code> in your <b>.env</b> file. (<code><b>APP_DEBUG=true</b></code>)
				<br>
				Base URL for this package will be <code>https://example.com/run/{param1}/{param2}</code>.
			</p>
			<div>
				<b>For Example:-</b>
				<div class="ml-4">
					<pre class="mb-0"><i>https://example.com/run/list</i></pre>
					<pre class="mb-0"><i>https://example.com/run/migrate</i></pre>
					<pre class="mb-0"><i>https://example.com/run/cache/clear</i></pre>
				</div>
			</div>
		</div>
		
		<div class="table-responsive mt-5">
			<table class="table mb-0 bg-white">
				<thead>
					<tr>
						<th>
							URL
							<div class="small text-secondary">
								https://example.com/run
							</div>
						</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<code>/</code>
						</td>
						<td class="desc">
							This is the home page where you can find information about this package
						</td>
					</tr>
					<tr class="bg-light">
						<td>
							<code>/command</code>
						</td>
						<td class="desc">
							Global URL from where you can run almost every commands by passing a parameter <code>cmd</code>. <b>E.g.</b>
							<pre class="mb-0">https://example.com/run/command?cmd=migrate</pre>
							<pre class="mb-0">https://example.com/run/command?cmd=migrate:rollback --step=1</pre>
							<pre class="mb-0">https://example.com/run/command?cmd=cache:clear</pre>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/list</code>
						</td>
						<td class="desc">
							Lists all artisan commands
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/cache_all</code>
						</td>
						<td class="desc">
							Generates cache of <b>config, view, event</b>. It runs these commands
							<div>
								<code class="mr-2">config:cache</code>
								<code class="mr-2">view:cache</code>
								<code class="mr-2">event:cache</code>
							</div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/clear_all</code>
						</td>
						<td class="desc">
							Clears cache of <b>config, view, event, route</b>. It runs these commands
							<div>
								<code class="mr-2">config:clear</code>
								<code class="mr-2">view:clear</code>
								<code class="mr-2">event:clear</code>
								<code class="mr-2">route:clear</code>
							</div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/seed</code>
						</td>
						<td class="desc">
							Seed the database with records
							<div><code>db:seed</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/clear-compiled</code>
						</td>
						<td class="desc">
							Remove the compiled class file
							<div><code>db:clear-compiled</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/down</code>
						</td>
						<td class="desc">
							Put the application into maintenance mode
							<div><code>down</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/env</code>
						</td>
						<td class="desc">
							Display the current framework environment
							<div><code>env</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/inspire</code>
						</td>
						<td class="desc">
							Display an inspiring quote
							<div><code>inspire</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/optimize</code>
						</td>
						<td class="desc">
							Cache the framework bootstrap files
							<div><code>optimize</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/serve</code>
						</td>
						<td class="desc">
							Serve the application on the PHP development server
							<div><code>serve</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/up</code>
						</td>
						<td class="desc">
							Bring the application out of maintenance mode
							<div><code>up</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/cache/clear</code>
						</td>
						<td class="desc">
							Flush the application cache
							<div><code>cache:clear</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/cache/forget</code>
						</td>
						<td class="desc">
							Remove an item from the cache
							<div><code>cache:forget</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/cache/table</code>
						</td>
						<td class="desc">
							Create a migration for the cache database table
							<div><code>cache:table</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/config/cache</code>
						</td>
						<td class="desc">
							Create a cache file for faster configuration loading
							<div><code>config:cache</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/config/cache</code>
						</td>
						<td class="desc">
							Remove the configuration cache file
							<div><code>config:cache</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/db/seed</code>
						</td>
						<td class="desc">
							Seed the database with records
							<div><code>db:seed</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/db/wipe</code>
						</td>
						<td class="desc">
							Drop all tables, views, and types
							<div><code>db:wipe</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/event/cache</code>
						</td>
						<td class="desc">
							Discover and cache the application's events and listeners
							<div><code>event:cache</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/event/clear</code>
						</td>
						<td class="desc">
							Clear all cached events and listeners
							<div><code>event:clear</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/event/generate</code>
						</td>
						<td class="desc">
							Generate the missing events and listeners based on registration
							<div><code>event:generate</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/event/list</code>
						</td>
						<td class="desc">
							List the application's events and listeners
							<div><code>event:list</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/key/generate</code>
						</td>
						<td class="desc">
							Set the application key
							<div><code>key:generate</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/migrate</code>
						</td>
						<td class="desc">
							Run the database migrations
							<div><code>migrate</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/migrate:fresh</code>
						</td>
						<td class="desc">
							Drop all tables and re-run all migrations
							<div><code>migrate:fresh</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/migrate/install</code>
						</td>
						<td class="desc">
							Create the migration repository
							<div><code>migrate:install</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/migrate/refresh</code>
						</td>
						<td class="desc">
							Reset and re-run all migrations
							<div><code>migrate:refresh</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/migrate/reset</code>
						</td>
						<td class="desc">
							Rollback all database migrations
							<div><code>migrate:reset</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/migrate/rollback</code>
						</td>
						<td class="desc">
							Rollback the last database migration
							<div><code>migrate:rollback</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/migrate/status</code>
						</td>
						<td class="desc">
							Show the status of each migration
							<div><code>migrate:status</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/notifications/table</code>
						</td>
						<td class="desc">
							Create a migration for the notifications table
							<div><code>notifications:table</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/optimize/clear</code>
						</td>
						<td class="desc">
							Remove the cached bootstrap files
							<div><code>optimize:clear</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/package/discover</code>
						</td>
						<td class="desc">
							Rebuild the cached package manifest
							<div><code>package:discover</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/queue/failed</code>
						</td>
						<td class="desc">
							List all of the failed queue jobs
							<div><code>queue:failed</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/queue/failed-table</code>
						</td>
						<td class="desc">
							Create a migration for the failed queue jobs database table
							<div><code>queue:failed-table</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/queue/flush</code>
						</td>
						<td class="desc">
							Flush all of the failed queue jobs
							<div><code>queue:flush</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/queue/forget</code>
						</td>
						<td class="desc">
							Delete a failed queue job
							<div><code>queue:forget</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/queue/listen</code>
						</td>
						<td class="desc">
							Listen to a given queue
							<div><code>queue:listen</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/queue/restart</code>
						</td>
						<td class="desc">
							Restart queue worker daemons after their current job
							<div><code>queue:restart</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/queue/retry</code>
						</td>
						<td class="desc">
							Retry a failed queue job
							<div><code>queue:retry</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/queue/table</code>
						</td>
						<td class="desc">
							Create a migration for the queue jobs database table
							<div><code>queue:table</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/queue/work</code>
						</td>
						<td class="desc">
							Start processing jobs on the queue as a daemon
							<div><code>queue:work</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/route/cache</code>
						</td>
						<td class="desc">
							Create a route cache file for faster route registration
							<div><code>route:cache</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/route/clear</code>
						</td>
						<td class="desc">
							Remove the route cache file
							<div><code>route:clear</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/route/list</code>
						</td>
						<td class="desc">
							List all registered routes
							<div><code>route:list</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/schedule/run</code>
						</td>
						<td class="desc">
							Run the scheduled commands
							<div><code>schedule:run</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/session/table</code>
						</td>
						<td class="desc">
							Create a migration for the session database table
							<div><code>session:table</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/storage/link</code>
						</td>
						<td class="desc">
							Create the symbolic links configured for the application
							<div><code>storage:link</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/stub/publish</code>
						</td>
						<td class="desc">
							Publish all stubs that are available for customization
							<div><code>stub:publish</code></div>
						</td>
					</tr>

					<tr class="">
						<td>
							<code>/view/cache</code>
						</td>
						<td class="desc">
							Compile all of the application's Blade templates
							<div><code>view:cache</code></div>
						</td>
					</tr>
					<tr class="">
						<td>
							<code>/view/clear</code>
						</td>
						<td class="desc">
							Clear all compiled view files
							<div><code>view:clear</code></div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="text-center mt-5">
			<ul class="list-unstyled" style="font-size: 18px;">
				<li class="mb-2">
					<a href="https://github.com/takshaktiwari/run-artisan" target="_blank">
						<i class="fab fa-github"></i>
						https://github.com/takshaktiwari/run-artisan
					</a>
				</li>
				<li>
					<a href="mailto:takshaktiwari@gmail.com" target="_blank">
						<i class="fas fa-envelope"></i>
						takshaktiwari@gmail.com
					</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>