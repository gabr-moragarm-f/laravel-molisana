@extends('layout')

@section('title', 'Products')

@section('mainStyle')
  <link rel="stylesheet" href="{{asset('css/products-style.css')}}">
@endsection

@section('main')
  <main>
    <div class="container">
      <div class="pasta">
        <h2>LE LUNGHE</h2>

        <div class="pasta-box placeholder">
          @php
          $lungaCount = 0;
          @endphp

          @foreach ($arrayPasta as $key => $pasta)
            @if ($pasta['tipo'] === "lunga")
              <a href="/products/{{$key}}">
                <div class="pasta-box-section">
                  <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </div>
              </a>
            @endif
          @endforeach
        </div>

        <div class="pasta">
          <h2>LE CORTE</h2>

          <div class="pasta-box">
            @foreach ($arrayPasta as $key => $pasta)
              @if ($pasta['tipo'] === "corta")
                <a href="/products/{{$key}}">
                  <div class="pasta-box-section">
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                  </div>
                </a>
              @endif
            @endforeach
          </div>
        </div>

        <div class="pasta">
          <h2>LE CORTISSIME</h2>

          <div class="pasta-box">
            @foreach ($arrayPasta as $key => $pasta)
              @if ($pasta['tipo'] === "cortissima")
                <a href="/products/{{$key}}">
                  <div class="pasta-box-section">
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                  </div>
                </a>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </main>
  @endsection
