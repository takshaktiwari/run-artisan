<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class EventController extends Controller
{
    public $output = [];
    
    public function cache($value='')
    {
        Artisan::call('event:cache');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function clear($value='')
    {
        Artisan::call('event:clear');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function generate($value='')
    {
        Artisan::call('event:generate');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function list($value='')
    {
        Artisan::call('event:list');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    

    public function show_output($output='')
    {
        return view('runartisan::output')->with('output', $this->output);
    }


}
