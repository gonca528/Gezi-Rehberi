@extends('components.layout')

@section('slider')
    <article
        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
        <div style="min-width:100%; box-shadow:0px 10px 8px rgb(75, 75, 75)" id="carouselExampleIndicators"
            class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div style="height: 500px;" class="carousel-inner">
                <div class="carousel-item active">
                    <img style=" width: 830px; height: 500px;"
                        src="/images/sliders/{{ $sliders[1]->thumbnail }}" class="d-block w-100"
                        alt="...">
                </div>
                @foreach ($sliders as $item)
                <div class="carousel-item">
                    <img style=" width: 830px; height: 500px;"
                        src="/images/sliders/{{$item->thumbnail}}" class="d-block w-100"
                        alt="...">
                </div>
                @endforeach
               
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>


    </article>
@endsection
@section('content')
  

        
    <div class="container mt-5 flex flex-col">

        <div class="row mt-2">
            @foreach ($category as $categories)
        
            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem; ">
                    <img src="{{ asset( $categories->thumbnail) }}" class="card-img-top"
                        alt="...">
                        
                    <div class="card-body" style="box-shadow:0px 1px 20px">
                        <a  style="text-size:5px;" href="/posts/{{ $categories->slug }}" class="card-title"> {{ $categories->ad }}</a>
                        <p class="card-text"> {{ $categories->excerpt}} 
                        </p>

                    </div>


                </div>
            </div>
            @endforeach
        </div>
       

    </div>
        

            
                    
                  
                @endsection
