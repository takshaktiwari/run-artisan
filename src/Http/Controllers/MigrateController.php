<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class MigrateController extends Controller
{
    public $output = [];

    public function index()
    {
    	return view('runartisan::index');
    }

    public function migrate($value='')
    {
        Artisan::call('migrate');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function fresh($value='')
    {
        Artisan::call('migrate:fresh');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function install($value='')
    {
        Artisan::call('migrate:install');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function refresh($value='')
    {
        Artisan::call('migrate:refresh');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function reset($value='')
    {
        Artisan::call('migrate:reset');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function rollback($value='')
    {
        Artisan::call('migrate:rollback');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function status($value='')
    {
        Artisan::call('migrate:status');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }


    public function show_output($output='')
    {
        return view('runartisan::output')->with('output', $this->output);
    }


}
