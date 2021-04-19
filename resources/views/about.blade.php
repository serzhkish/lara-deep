@extends('layouts.main')

@section('title')
  About
@endsection

@section('content')
  <div class="content-txt">
    Проект, созданный с помощью Laravel
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6">
      {!! Form::open(['route' => 'site::about']) !!}

        <div class="form-group">
          <label class="form-label" for="title">Сообщение:</label>        
          {!! Form::textarea('title', '', ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Отправить', ['class' => 'btn btn-success btn-space']) !!}
      {!! Form::close() !!}
    </div>
  </div>
@endsection