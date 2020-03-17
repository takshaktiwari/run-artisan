<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class ConfigController extends Controller
{

    public function clear($value='')
    {
        Artisan::call('config:clear');
        $this->output();
    }

    public function cache($value='')
    {
        Artisan::call('config:cache');
        $this->output();
    }

    

    public function output($msg='')
    {
    	echo "<pre>";
    	print_r (Artisan::output());
    	echo "</pre>";
    }


}
