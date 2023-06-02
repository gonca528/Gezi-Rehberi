<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <title>Anasayfa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body style="font-family: Open Sans, sans-serif ">

    <div class="container">

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Gezi Rehberi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Anasayfa<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                 
                    <li class="nav-item active">
                        <a class="nav-link " href="/route">Gezi Rotası</a>
                    </li>
                    
                </ul>
                <div style="margin-right: 50px;" class="form-inline my-1 my-lg-0">
                    @auth
                   
                        <li class="nav-item dropdown">

                            <a style="margin-top:5px " href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false" class="text-white text-xs font-bold uppercase text-black">Welcome,
                                {{ auth()->user()->name }}! </a> <br>    <!--auth()->user()->name ifadesi, oturum açmış olan kullanıcının adını döndürür.  -->
                            <div style="width:5px;" class="dropdown-menu">
                                @if (auth()->user()->yetki == "admin")
                                <a class="dropdown-item" href="/admin/posts/new_post">Gönderi Ekle</a>
                                <a class="dropdown-item" href="/admin/posts/create">Slider Ekle</a>
                                @else
                                <a class="dropdown-item" href="/admin/posts/new_post">Gönderi Sil</a>
                                @endif 
                               
                            </div>


                        </li>
                        <form style="margin-left:10px;" method="POST" action="/logout">

                            @csrf

                            <button style="margin-top:10px" type="submit ">Log Out</button>
                        </form>
                    @else
                        <a class="navbar-brand" href="/register">Kayıt Ol</a>
                        <a class="navbar-brand" href="/login">Giriş Yap</a>

                    @endauth
                </div>

            </div>
        </nav>

    </div>

    @yield('slider')

    @yield('content')


    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">© 2023 Company, Inc</p>
        </footer>


        @if (session()->has('succes'))
            <div>
                <p> {{ session()->get('succes ') }} </p>
            </div>
        @endif
    </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <script src="js/lightbox-plus-jquery.min.js"></script>

</body>

</html>
