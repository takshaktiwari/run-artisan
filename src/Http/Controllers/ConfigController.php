<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class ConfigController extends Controller
{

    public $output = [];

    public function clear($value='')
    {
        Artisan::call('config:clear');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function cache($value='')
    {
        Artisan::call('config:cache');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    

    public function show_output($output='')
    {
        return view('runartisan::output')->with('output', $this->output);
    }


}
