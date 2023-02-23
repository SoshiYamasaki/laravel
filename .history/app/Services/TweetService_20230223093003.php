<?php

namespace App\Services;

use App\Models\Tweet;

class TweetService
{
    public function getTweets()
    {
        return Tweet::orderBy('create_at','DESC')->get();
    }
}
