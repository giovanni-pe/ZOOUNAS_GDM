<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

/**
 * Class PageController
 * @package App\Http\Controllers
 */
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about(){
        return view('page.about');
    }
    public function services(){
        return view('page.services');
    }


    public function animals(){
        return view('page.animals');
    }
    public function sponsors(){
        return view('page.sponsors');
    }
    public function times(){
        return view('page.times');
    }
    public function testimonials(){
        return view('page.testimonials');
    }

    public function contacts(){
       return view('page.contacts');
    }
    
}
