@extends('layouts.main')

@section('container')
  
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By. Chandra Dwi Ramadhani in <a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
  

  <a href="/blog">Back to Posts</a>

  @endsection

