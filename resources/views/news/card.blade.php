@extends('layouts.main')

@section('title')
  Card
@endsection

@section('content')
  <div class="card">
    <p>{{ $card['title'] }}</p>
    <p>{{ $card['content'] }}</p>
    </div>
@endsection