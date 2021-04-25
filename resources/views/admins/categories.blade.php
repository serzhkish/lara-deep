@extends('layouts.main')

@section('title')
  Admin Categories
@endsection

@section('content')
   @foreach ($categories as $key => $item)
      <div class="categories-item">
        {{ $item->title }}
      </div>
      <div class="categories-item">
        {{ $item->created_at }}
      </div>
    @endforeach
@endsection