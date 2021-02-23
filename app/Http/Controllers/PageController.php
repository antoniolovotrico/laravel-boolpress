<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $menu_link = config('nav_menu_links');
        return view('home', compact('menu_link'));
    }
    public function about(){
        $menu_link = config('nav_menu_links');
        return view('about', compact('menu_link'));
    }
    public function contact(){
        $menu_link = config('nav_menu_links');
        return view('contact', compact('menu_link'));
    }    
}

