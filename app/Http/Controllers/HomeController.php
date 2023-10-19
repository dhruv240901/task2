<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    // function to render homepage 
    public function index(){
        return view('index');
    }
}
