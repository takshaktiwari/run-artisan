<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class ViewController extends Controller
{

    public function cache($value='')
    {
        Artisan::call('view:cache');
        $this->output();
    }

    public function clear($value='')
    {
        Artisan::call('view:clear');
        $this->output();
    }

    

    public function output($msg='')
    {
    	echo "<pre>";
    	print_r (Artisan::output());
    	echo "</pre>";
    }


}
