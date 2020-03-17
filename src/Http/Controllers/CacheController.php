<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class CacheController extends Controller
{

    public function clear($value='')
    {
        Artisan::call('cache:clear');
        $this->output();
    }

    public function forget($value='')
    {
        Artisan::call('cache:forget');
        $this->output();
    }

    public function table($value='')
    {
        Artisan::call('cache:table');
        $this->output();
    }


    public function output($msg='')
    {
    	echo "<pre>";
    	print_r (Artisan::output());
    	echo "</pre>";
    }


}
