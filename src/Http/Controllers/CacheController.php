<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class CacheController extends Controller
{
    public $output = [];
    
    public function clear($value='')
    {
        Artisan::call('cache:clear');
        array_push($this->output, Artisan::output());

        return $this->show_output();
    }

    public function forget($value='')
    {
        Artisan::call('cache:forget');
        array_push($this->output, Artisan::output());

        return $this->show_output();
    }

    public function table($value='')
    {
        Artisan::call('cache:table');
        array_push($this->output, Artisan::output());

        return $this->show_output();
    }


    public function show_output($output='')
    {
        return view('runartisan::output')->with('output', $this->output);
    }


}
