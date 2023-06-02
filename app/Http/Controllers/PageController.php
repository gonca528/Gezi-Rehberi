<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Sub_category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
   public function sub_category($category)
   {
      $categories = Category::where('slug', $category)->first();

      $sub_category = Sub_category::where('category_id', $categories->id)->get();


      return view('posts.create')->with('sub_category', $sub_category);
   }


 

   public function post(Sub_category $slider)
   {
      return view('components.card')->with(['slider' => $slider]);
   }

  
   public function route(){
      return view('rota.create');
   }
  
}