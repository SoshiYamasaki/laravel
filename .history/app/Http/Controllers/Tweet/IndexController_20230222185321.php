<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tweets=Tweet::all();
        return view('tweet.index')
                ->with('name','laravel')
                ->with('version','8');
                ->with('tweets',$tweets);
    }
}
