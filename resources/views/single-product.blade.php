@extends('layout')

@section('title', $arrayPasta[$idProduct]['titolo'])

@section('main')
  <main>
    <div class="container">
      <h2>{{$arrayPasta[$idProduct]['titolo']}}</h2>

      <div class="first-img">
        <img src="{{$arrayPasta[$idProduct]['src-h']}}" alt="{{$arrayPasta[$idProduct]['titolo']}}">
      </div>

      <div class="second-img">
        <img src="{{$arrayPasta[$idProduct]['src-p']}}" alt="{{$arrayPasta[$idProduct]['titolo']}}">
      </div>

      <div class="description">
        {!!$arrayPasta[$idProduct]['descrizione']!!}
      </div>
    </div>
  </main>
@endsection
