@extends('layouts.main')

@section('title')
  Categories
@endsection

@section('content')
  <ul class="categories">
    @foreach ($categories as $key => $item)
      <li class="categories-item">
        <a href="{{ route('news::index', ['id' => $key]) }}">{{ $item }}</a>
      </li>      
    @endforeach
    </ul>
@endsection