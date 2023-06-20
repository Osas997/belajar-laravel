@extends('layouts.main')

@section('main')
<h1 class="text-center text-sky-400 text-2xl">halaman blog</h1>
{{-- <h1 class="text-center text-sky-400 text-2xl">{{ Request::is('blo') ? "benarcuy" : "salah cuy" }}</h1> --}}

<div class="overflow-x-auto">
   <table class="table table-zebra">
      <!-- head -->
      <thead>
         <tr>
            <th></th>
            <th>Title</th>
            <th>Author</th>
            <th>Isi</th>
            <th>Aksi</th>
         </tr>
      </thead>
      <tbody>
         @php
         $no = 1;
         @endphp
         @if ($posts->isNotEmpty())
         @foreach ($posts as $post)
         <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->author }}</td>
            <td>{{ $post->body }}</td>
            <td><a class="text-slate-500 hover:text-slate-700" href="/blog/{{ $post->slug }}">Lihat Detail</a></td>
         </tr>
         @endforeach
         @else
         <h1 class="text-2xl text-red-600 text-center">Data Masih Kosong</h1>
         @endif
      </tbody>
   </table>
</div>

@endsection