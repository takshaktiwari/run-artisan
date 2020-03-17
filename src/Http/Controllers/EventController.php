<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class EventController extends Controller
{

    public function cache($value='')
    {
        Artisan::call('event:cache');
        $this->output();
    }

    public function clear($value='')
    {
        Artisan::call('event:clear');
        $this->output();
    }

    public function generate($value='')
    {
        Artisan::call('event:generate');
        $this->output();
    }

    public function list($value='')
    {
        Artisan::call('event:list');
        $this->output();
    }

    

    public function output($msg='')
    {
    	echo "<pre>";
    	print_r (Artisan::output());
    	echo "</pre>";
    }


}
