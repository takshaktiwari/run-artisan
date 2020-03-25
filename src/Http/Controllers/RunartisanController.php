<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class RunartisanController extends Controller
{
	public $output = [];

    public function index()
    {
    	return view('runartisan::index');
    }

    public function command()
    {
        if (isset($_GET['cmd']) && $_GET['cmd'] != '') {
            Artisan::call(trim($_GET['cmd']));
        }
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function list()
    {
    	Artisan::call('list');
		array_push($this->output, Artisan::output());
		return $this->show_output();
    }

    public function cache_all($value='')
    {
    	Artisan::call('config:cache');
		array_push($this->output, Artisan::output());

		Artisan::call('view:cache');
		array_push($this->output, Artisan::output());

		Artisan::call('event:cache');
		array_push($this->output, Artisan::output());

		return $this->show_output();
    }

    public function clear_all($value='')
    {
    	Artisan::call('config:clear');
		array_push($this->output, Artisan::output());

		Artisan::call('view:clear');
		array_push($this->output, Artisan::output());

		Artisan::call('event:clear');
		array_push($this->output, Artisan::output());

		Artisan::call('route:clear');
		array_push($this->output, Artisan::output());

		return $this->show_output();
    }

    public function seed()
    {
    	Artisan::call('db:seed');
    	array_push($this->output, Artisan::output());
    	return $this->show_output();
    }

    public function any($value='')
    {
        return redirect('run');
    }

    public function clear_compiled($value='')
    {
        Artisan::call('clear-compiled');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function down()
    {
        Artisan::call('down');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function env()
    {
        Artisan::call('env');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function inspire()
    {
        Artisan::call('inspire');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function optimize()
    {
        Artisan::call('optimize');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function optimize_clear()
    {
        Artisan::call('optimize:clear');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function serve()
    {
        Artisan::call('serve');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function up()
    {
        Artisan::call('up');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function notifications_table()
    {
        Artisan::call('notifications:table');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function package_discover()
    {
        Artisan::call('package:discover');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function schedule_run()
    {
        Artisan::call('schedule:run');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function session_table()
    {
        Artisan::call('session:table');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function storage_link()
    {
        Artisan::call('storage:link');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function stub_publish()
    {
        Artisan::call('stub:publish');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }



    public function show_output($output='')
    {
    	return view('runartisan::output')->with('output', $this->output);
    }


}
