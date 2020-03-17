<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class RunartisanController extends Controller
{
    public function index()
    {
    	return view('runartisan::index');
    }

    public function list()
    {
    	Artisan::call('list');
		$this->output();
    }

    public function cache_all($value='')
    {
    	Artisan::call('config:cache');
		$this->output();

		Artisan::call('view:cache');
		$this->output();

		Artisan::call('event:cache');
		$this->output();

		Artisan::call('route:cache');
		$this->output();
    }

    public function clear_all($value='')
    {
    	Artisan::call('config:clear');
		$this->output();

		Artisan::call('view:clear');
		$this->output();

		Artisan::call('event:clear');
		$this->output();

		Artisan::call('route:clear');
		$this->output();
    }

    public function seed()
    {
    	Artisan::call('db:seed');
    	$this->output();
    }



    public function output($msg='')
    {
    	echo "<pre>";
    	print_r (Artisan::output());
    	echo "</pre>";
    }


}
