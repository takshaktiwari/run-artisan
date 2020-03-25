<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class KeyController extends Controller
{
    public $output = [];
    
    public function generate($value='')
    {
        Artisan::call('key:generate');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    

    public function show_output($output='')
    {
        return view('runartisan::output')->with('output', $this->output);
    }


}
