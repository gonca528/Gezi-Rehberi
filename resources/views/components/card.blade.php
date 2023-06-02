@extends('components.layout')
<div style="margin-top:130px; width:1200px; margin-left:250px;" class=" ">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="/images/sliders/{{ $slider->thumbnail }}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div style="margin-bottom:15px;" class="card-body">
                <p style="font-size: 35px; " class="card-text"> {{ $slider->post_ad }}
                 <br>
                </p>
                <p style="margin-bottom: 50px;" class="text-muted text-black"> {{ $slider->excerpt }}</p>
            </div>
        </div>
    </div>

    <div class=" container">
        <div style="margin-top:5px; margin-left:-20px;" class="row">
            <div class="col  g-0">
                <h5
                    style="  background-color: rgb(243, 235, 237);
          width: 500px;
          padding: 30px;
          border: 2px solid black;
          margin-left:-40px;
          padding: 25px;">
                    {{$slider->post_ad}} giriş ücreti ve ziyaret bilgileri
                </h5>

            </div>
        </div>
    </div>
    <div class="container">
        <p style="margin-left: -40px;">{{ $slider->body }}
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.9067751870593!2d28.97423887597496!3d41.00541361960144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9bd6570f4e1%3A0xe52df7368a157ca4!2sSultanahmet%20Camii!5e0!3m2!1str!2str!4v1681887726226!5m2!1str!2str"
                    style="margin-left: -40px;" width="450" height="350" style="border:0;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div style="  background-color: rgb(243, 235, 237);
               width: 500px;
               padding: 30px;
               border: 2px solid black;
               padding: 25px;"
                class="col-7">
                <p>
                    
                 
                    ⏰ {{$slider->post_ad}} ziyaret saatleri: {{$slider->saat}}<br>
                    🔐 {{$slider->post_ad}} giriş ücreti: {{$slider->ucret}}
                </p>

            </div>
        </div>
    </div>
    <div class=" container">
        <div style="margin-top:20px; margin-left:-20px;" class="row">
            <div class="col  g-0">
                <h5
                    style="  background-color: rgb(243, 235, 237);
     width: 500px;
     padding: 30px;
     border: 2px solid black;
     margin-left:-40px;
     
     padding: 25px;">
                   {{$slider->post_ad}}’ne Nasıl Gidilir?

                </h5>

            </div>
        </div>
    </div>
    <div class="container">
        <p style="margin-left: -40px;">{{$slider->yol}}</p>
    </div>
    <div class="container">

        <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Galeri</h1>

        <hr class="mt-2 mb-5">

        <div class="row text-center text-lg-start">

            <div class="col-lg-4 col-md-4 col-6">
                <a href="https://sultanahmetcami.org/resimler/images/Adsxxiz_1024x785.jpg" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail"
                        src="https://sultanahmetcami.org/resimler/images/Adsxxiz_1024x785.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <a href="https://www.bizevdeyokuz.com/wp-content/uploads/sultanahmet-cami-ic-mekan-istanbul.jpg"
                    class="d-block mb-4 h-100">
                    <img style="height:260px;" class="img-fluid img-thumbnail"
                        src="https://www.bizevdeyokuz.com/wp-content/uploads/sultanahmet-cami-ic-mekan-istanbul.jpg"
                        alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <a href="https://i.pinimg.com/originals/a6/26/1a/a6261a96c1658d947d1fb92d6899bde9.jpg"
                    class="d-block mb-4 h-100">
                    <img width="220px; height:150px;" class="img-fluid img-thumbnail"
                        src="https://i.pinimg.com/originals/a6/26/1a/a6261a96c1658d947d1fb92d6899bde9.jpg"
                        alt="">
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-6">
                <a href="https://ozcekim.com.tr/wp-content/uploads/2017/10/7-3.jpg" class="d-block mb-4 h-100">
                    <img style="height:260px;"class="img-fluid img-thumbnail"
                        src="https://ozcekim.com.tr/wp-content/uploads/2017/10/7-3.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <a href="https://istanbeautiful.com/tr/wp-content/uploads/sultanahmet-mosque4.jpg"
                    class="d-block mb-4 h-100">
                    <img style="height:260px;" class="img-fluid img-thumbnail"
                        src="https://istanbeautiful.com/tr/wp-content/uploads/sultanahmet-mosque4.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <a href="https://www.bizevdeyokuz.com/wp-content/uploads/sultanahmet-cami-yarim-kubbeler-ve-ana-kubbe-istanbul.jpg"
                    class="d-block mb-4 h-100">
                    <img style="height:260px;" class="img-fluid img-thumbnail"
                        src="https://www.bizevdeyokuz.com/wp-content/uploads/sultanahmet-cami-yarim-kubbeler-ve-ana-kubbe-istanbul.jpg"
                        alt="">
                </a>
            </div>




        </div>

    </div>
</div>
