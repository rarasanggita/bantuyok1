<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\Thread;

class MainController extends Controller
{

    public function home()
    {
    	$threadz = Thread::all();

        return view('home')->with('threadz', $threadz);
    }

    public function homeThr()
    {
    	return view('home#threadd');
    }

}
