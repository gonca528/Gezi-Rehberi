<?php

namespace App\Http\Controllers;

use App\Models\Sub_category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {

        return view('admins.alt_posts.index', [
            'post' => Sub_category::all()

        ]);
    }

    public function edit($id)
    {
        $user = Sub_category::where('id', $id)->first();
        return view('admins.alt_posts.edit', [
            'user' => $user



        ]);
    }
    public function store()
    {


        $attributes = request()->validate([
            'post_ad' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'saat' => 'required',
            'ucret' => 'required',
            'yol' => 'required',
            'thumbnail' => 'required|image',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['thumbnail']->storeAs('/sliders', request()->file('thumbnail')->store(), 'public_uploads');
        Sub_category::create([
            'post_ad' => request()->post_ad,
            'excerpt' => request()->excerpt,
            'body' => request()->body,
            'saat' => request()->saat,
            'ucret' => request()->ucret,
            'yol' => request()->yol,
            'thumbnail' => request()->file('thumbnail')->store(),
            'category_id' => request()->category_id
        ]);

        return redirect('/');
    }
    public function create()
    {
        return view('admins.alt_posts.create');
    }

    public function update(Sub_category $category)
    {   
        if(request()->thumbnail){
            if(file_exists("images/sliders/$category->thumbnail")){
                unlink("images/sliders/$category->thumbnail");
            }
        }
       
        $attributes = request()->validate([
            'post_ad' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'saat' => 'required',
            'ucret' => 'required',
            'yol' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]) + ['thumbnail' => request()->file('thumbnail')->store()];

        if (request()->thumbnail) {
            request()->thumbnail->storeAs('/sliders', request()->file('thumbnail')->store(), 'public_uploads');
        }

        $category->update($attributes);
        return redirect('/');
    }

    public function destroy(Sub_category $category){

        $category->delete();
        return redirect('/');
    }
}
