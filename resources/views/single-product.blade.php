@extends('layout')

@section('title', $arrayPasta[$idProduct]['titolo'])

@section('mainStyle')
  <link rel="stylesheet" href="{{asset('css/single-product-style.css')}}">
@endsection

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
