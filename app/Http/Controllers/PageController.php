<?php

namespace App\Http\Controllers;

use App\Models\Animal;
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
        $animals = Animal::latest('id')->paginate(20);
    
        return view('page.animals', compact('animals'));
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
    public function reservas(){
        return view('page.reservas');
    }
    
}
