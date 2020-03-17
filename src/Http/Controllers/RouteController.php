<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class RouteController extends Controller
{

    public function cache($value='')
    {
        Artisan::call('route:cache');
        $this->output();
    }

    public function clear($value='')
    {
        Artisan::call('route:clear');
        $this->output();
    }

    public function list($value='')
    {
        Artisan::call('route:list');
        $this->output();
    }

    

    public function output($msg='')
    {
    	echo "<pre>";
    	print_r (Artisan::output());
    	echo "</pre>";
    }


}
