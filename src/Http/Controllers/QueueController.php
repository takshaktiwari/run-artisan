<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class QueueController extends Controller
{
    public $output = [];
    
    public function failed($value='')
    {
        Artisan::call('queue:failed');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function failed_table($value='')
    {
        Artisan::call('queue:failed-table');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function flush($value='')
    {
        Artisan::call('queue:flush');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function forget($value='')
    {
        Artisan::call('queue:forget');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function listen($value='')
    {
        Artisan::call('queue:listen');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function restart($value='')
    {
        Artisan::call('queue:restart');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function retry($value='')
    {
        Artisan::call('queue:retry');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function table($value='')
    {
        Artisan::call('queue:table');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function work($value='')
    {
        Artisan::call('queue:work');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }




    

    public function show_output($output='')
    {
        return view('runartisan::output')->with('output', $this->output);
    }


}
