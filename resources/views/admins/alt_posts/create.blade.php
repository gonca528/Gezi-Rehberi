@extends('components.layout')
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 style="margin-top: 90px;" class="text-center font-bold text-xl">Gönderi Ekle</h1>
        <div class="container">
            <form method="POST" action="/admin/new" class="mt-10" enctype="multipart/form-data">
                <!-- "csrf" blade template kullanılarak oluşturulan formlarda kullanılır kulllanmazsak hata alıyoruz. -->
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 ">
                            <label for="post_ad">
                                Gönderi
                            </label>

                            <input class="form-control" type="text" name="post_ad" id="post_ad"
                                value="{{ old('post_ad') }}" required>
                            @error('post_ad')
                                <small class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="post_ad">
                                Fotoğraf
                            </label>

                            <input class="form-control" type="file" name="thumbnail" id="thumbnail" required>
                            @error('thumbnail')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="post_ad">
                                Kategori
                            </label>

                            <select class="form-control" name="category_id" id="category_id">
                                @foreach (\App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ ucwords($category->ad) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="post_ad">
                                Detay
                            </label>

                            <textarea rows="10" cols="20" class="form-control" type="text" name="excerpt" id="excerpt" required>{{ old('excerpt') }}</textarea>
                            @error('excerpt')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="body">
                                Bilgi
                            </label>

                            <textarea rows="5" cols="20" class="form-control" type="text" name="body" id="body" required>{{ old('body') }}</textarea>
                            @error('body')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="saat">
                                Saat
                            </label>

                            <textarea rows="5" cols="20" class="form-control" type="text" name="saat" id="saat" required>{{ old('saat') }}</textarea>
                            @error('saat')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        
                        <div class="col-md-12 mt-3">
                            <label for="ucret">
                                Ücret
                            </label>

                            <textarea rows="5" cols="20" class="form-control" type="text" name="ucret" id="ucret" required>{{ old('ucret') }}</textarea>
                            @error('ucret')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="yol">
                                Yol                            </label>

                            <textarea rows="5" cols="20" class="form-control" type="text" name="yol" id="yol" required>{{ old('yol') }}</textarea>
                            @error('yol')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                </div>

                
                



                <div style="margin-left:780px" class=" mt-4 mb-6">

                    <button type="submit" class="bg-dark-500 text-black rounded py-2 px-4 hover:bg-blue-500"> Submit
                    </button>

                </div>
                <ul>

                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 text-xs mt-1"> {{ $error }} </li>
                    @endforeach
                </ul>
            </form>
        </div>

    </main>
</section>
