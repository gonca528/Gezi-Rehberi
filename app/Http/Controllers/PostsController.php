<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Sub_category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostsController extends Controller
{

   
   public function create()
   {
      return view('sliders.create');
   }


   public function store()
   {
      $attributes = request()->validate([
         'title' => 'required',
         'thumbnail' => 'required|image',
         'excerpt' => 'required',
      ]);
      
      
      $attributes['thumbnail']->storeAs('/sliders', request()->file('thumbnail')->store(), 'public_uploads');
      Post::create([
         'title' => request()->title,
         'thumbnail' => request()->file('thumbnail')->store(),
         'excerpt' => request()->excerpt
      ]);

      return redirect('/');
   }
  


   

}
