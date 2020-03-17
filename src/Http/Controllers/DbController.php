<?php

namespace Kodexploit\Runartisan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artisan;

class DbController extends Controller
{

    public function seed($value='')
    {
        Artisan::call('db:seed');
        $this->output();
    }

    public function wipe($value='')
    {
        Artisan::call('db:wipe');
        $this->output();
    }

    

    public function output($msg='')
    {
    	echo "<pre>";
    	print_r (Artisan::output());
    	echo "</pre>";
    }


}
