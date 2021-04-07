@extends('layouts.main')

@section('title')
  News
@endsection

@section('content')
  <ul class="news">
    @foreach ($news as $key => $item)
      <li class="news-item">
        <a href="{{ route('news::card', ['id' => $key]) }}">{{ $item['title'] }}</a>
      </li>      
    @endforeach
    </ul>
@endsection