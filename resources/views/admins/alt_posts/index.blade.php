@extends('components.layout')
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 style="margin-top: 90px;" class="text-center font-bold text-xl">Gönderi Düzenle</h1>
            
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Gönderi Adı</th>
                <th scope="col">Gönderi Sil </th>
                <th scope="col">Gönderi Güncelle</th>

              </tr>
            </thead>
            <tbody>
                @foreach($post as $slider)
              <tr>
                <th  scope="row">{{$slider->id}} </th>
                <td class="">{{ $slider->post_ad}}</td>
                <td class="">  <form method="POST" action="/admin/update/{{ $slider->id }}">
                  @csrf
                  @method('DELETE')
                 <button class="text-xs text-gray-400"> Delete</button>
                </form> </td>
                    <td > <a href="/admin/post/{{$slider->id}}/edit/"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </i>

                </td>

              </tr>
              @endforeach
              
            </tbody>
          </table>
          

    </main>
    <a class="btn btn-primary mt-3" href="/admin/posts/new_post"> Gönderi Ekle </a>

</section>
