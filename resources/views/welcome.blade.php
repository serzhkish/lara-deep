@extends('layouts.main')

@section('title')
  Welcome
@endsection

@section('content')
  <div class="user-welcome">
    Hello, {{ $userName }}!
  </div>
@endsection
