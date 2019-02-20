<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\MailContact;

class PageController extends Controller
{
    public function index() {
        return view('pages.home');
    }
    
    public function shop() {
        return view('pages.shop');
    }
    
    public function privacy() {
        return view('privacy');
    }
}
