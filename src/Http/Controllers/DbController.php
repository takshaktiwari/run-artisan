<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class DbController extends Controller
{
    public $output = [];

    public function seed($value='')
    {
        Artisan::call('db:seed');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function wipe($value='')
    {
        Artisan::call('db:wipe');
        array_push($this->output, Artisan::output());
        return $this->show_output();
    }

    public function show_output($output='')
    {
        return view('runartisan::output')->with('output', $this->output);
    }

}
