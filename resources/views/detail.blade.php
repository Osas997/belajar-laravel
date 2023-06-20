@extends('layouts.main')

@section('main')
<h1 class="text-center text-emerald-400 text-3xl">Detail Post</h1>
<p>Judul Article :</p>
<h1 class="py-2 text-lg font-bold">{{ $posts->title }}</h1>
<p>Author :</p>
<h3 class="py-2 text-lg font-bold">{{ $posts->author }}</h3>
<p>Isi Article :</p>
<p class="py-2">{!! $posts->body !!}</p>

<a class="text-md text-white rounded-lg mt-6 inline-block p-2 bg-emerald-400 hover:bg-emerald-600 transition-all"
   href="/blog">Kembali</a>
@endsection