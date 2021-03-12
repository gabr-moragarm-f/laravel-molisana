@extends('layout')

@section('title', $arrayPasta[$idProduct]['titolo'])

@section('mainStyle')
  <link rel="stylesheet" href="{{asset('css/single-product-style.css')}}">
@endsection

@php
  if (intval($idProduct) === (count($arrayPasta) - 1)) {
    $nextId = 0;
  }else {
    $nextId = $idProduct + 1;
  }

  if (intval($idProduct) === 0) {
    $prevId = count($arrayPasta) - 1;
  }else {
    $prevId = $idProduct - 1;
  }
@endphp

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

      <a class="prev-button" href="/products/{{$prevId}}">
        <i class="fas fa-angle-left"></i>
      </a>

      <a class="next-button" href="/products/{{$nextId}}">
        <i class="fas fa-angle-right"></i>
      </a>
    </div>
  </main>
@endsection
