<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //fungsi untuk mengarahkan ke halaman yang di tekan pada navbar
    public function home(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
}
