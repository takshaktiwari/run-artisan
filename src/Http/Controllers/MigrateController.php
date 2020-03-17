<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class MigrateController extends Controller
{
    public function index()
    {
    	return view('runartisan::index');
    }

    public function migrate($value='')
    {
        Artisan::call('migrate');
        $this->output();
    }

    public function fresh($value='')
    {
        Artisan::call('migrate:fresh');
        $this->output();
    }

    public function install($value='')
    {
        Artisan::call('migrate:install');
        $this->output();
    }

    public function refresh($value='')
    {
        Artisan::call('migrate:refresh');
        $this->output();
    }

    public function reset($value='')
    {
        Artisan::call('migrate:reset');
        $this->output();
    }

    public function rollback($value='')
    {
        Artisan::call('migrate:rollback');
        $this->output();
    }

    public function status($value='')
    {
        Artisan::call('migrate:status');
        $this->output();
    }









    public function output($msg='')
    {
    	echo "<pre>";
    	print_r (Artisan::output());
    	echo "</pre>";
    }


}
