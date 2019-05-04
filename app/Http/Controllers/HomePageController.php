<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Organiser;
use Illuminate\Http\Request;

class HomePageController extends Controller //LU custom class
{
    /**
     * Show the organiser events page
     *
     * @param Request $request
     * @param $organiser_id
     * @return mixed
     */

    public function showRankPage()
    {
        return view('Public.Custom.RankHomePage');
    }


    public function showRiderPage()
    {
        return view('Public.Custom.RiderHomePage');
    }
}
