<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Sub_category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
         
        $sliders = Post::all();
        $category=Category::all();
        return view('index')->with(['sliders' => $sliders, 'category'=>$category]);

    }

    }


    
    

