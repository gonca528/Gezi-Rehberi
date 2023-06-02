@extends('components.layout')
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 style="margin-top: 90px;" class="text-center font-bold text-xl">SLIDER</h1>
        <div class="container">

            <form method="POST" action="/admin/posts" class="mt-10" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12 ">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                                Başlık
                            </label>
                            <input class="form-control" type="text" name="title" id="title" required>
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>
                    <!--blade template kullanılarak oluşturulan formlarda kullanılır kulllanmazsak hata alıyoruz. -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12  ">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                                    Fotoğraf
                                </label>
                                <input class="form-control" type="file" name="thumbnail" id="thumbnail" required>
                                @error('thumbnail')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                                        Detay
                                    </label>
                                    <input class="form-control" type="text" name="excerpt" id="excerpt" required>
                                    @error('excerpt')
                                        <p class="text-red-500 text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                            </div>


      

                            <div class="row">
                                <div  class="col-md-12 mt-3  ">
                               
                        
                                  <button  type="submit" class="bg-dark-500 text-black rounded py-2 px-4 hover:bg-blue-500">  Ekle</button>
                                  @error('email')
                                  <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                  </p>
                                  @enderror
                                </div>
                              </div>
                            <ul>

                                @foreach ($errors->all() as $error)
                                    <li class="text-red-500 text-xs mt-1"> {{ $error }} </li>
                                @endforeach
                            </ul>
            </form>
    </main>
</section>
