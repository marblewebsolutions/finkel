<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\MailContact;

class PageController extends Controller
{
    public function index() {
        $schedule = [
            ['time' => mktime(23, 0, 0, 7, 11, 2018), 'location' => 'Denver, CO', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 2, 2018), 'location' => 'Ann Arbor, MI', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 3, 2018), 'location' => 'Appleton, WI', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 4, 2018), 'location' => 'Appleton, WI', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 5, 2018), 'location' => 'Appleton, WI', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 7, 2018), 'location' => 'Milwaukee, WI', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 8, 2018), 'location' => 'Chicago, IL', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 9, 2018), 'location' => 'Lakewood, OH', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 10, 2018), 'location' => 'Columbus, OH', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 11, 2018), 'location' => 'Lansing, MI', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 12, 2018), 'location' => 'Dekalb, IL', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 13, 2018), 'location' => 'Albion, MI', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 14, 2018), 'location' => 'Champaign, IL', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 15, 2018), 'location' => 'Davenport, IA', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 16, 2018), 'location' => 'Chicago, IL', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 17, 2018), 'location' => 'Kalamazoo, MI', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 18, 2018), 'location' => 'Detroit, MI', 'link' => ''],
            ['time' => mktime(23, 0, 0, 8, 19, 2018), 'location' => 'Grand Rapids, MI', 'link' => ''],
        ];
        
        $shows = [];
        foreach ($schedule as $show) {
            if (time() < date($show['time'])) {
                array_push($shows, $show);
            }
        }

        return view('app');
    }
}
