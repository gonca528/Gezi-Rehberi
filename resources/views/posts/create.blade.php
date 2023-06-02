@extends('components.layout')


@section('content')
    <h1 style=" margin-top:80px;margin-left:650px;">Rotanız Neresi?</h1>

    <form style=" margin-top:50px; margin-left: 650px;" class="form-inline my-2 my-lg-0" method="GET" action="/posts">
        <input class="form-control mr-sm-2" name="search" type="text" placeholder="search" aria-label="search">
        <button style="margin-top: 250px;" class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>

    <div class="container mt-5 flex flex-col justify-between">

        <div class="row mt-2">
            @foreach ($sub_category as $post)
                <div class="col-4 mt-5">
                    <div class="card" style="width: 18rem; ">
                        <img src="/images/sliders/{{ $post->thumbnail }}" class="card-img-top" alt="...">
                        <div class="card-body" style="box-shadow:0px 1px 20px">
                            <a href="/post/{{ $post->id }}" style="text-size:5px;" class="card-title">
                                {{ $post->post_ad }}</a>
                            <p class="card-text"> {{ $post->excerpt }}
                            </p>
                        </div>


                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
