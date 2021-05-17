@extends('layouts.app')
@section('main')
<div class="container single_comic">
  <div class="row">
    <div class="col-lg-8">
      <div class="img_comic">
       <img src="{{$comic['thumb']}}" alt="">  
      </div>
      <h3>{{$comic['title']}}</h3>
      <div class="bar">
        <div class="price-bar">
          <span>U.S. Price: <small>{{$comic['price']}}</small></span>
          <span>AVAILABLE</span>
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Check Availability
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
      </div>
      <div class="trama">
        <small>{{$comic['description']}}</small>
      </div>
    </div>
    <div class="col-lg-4">
      <h4>ADVERTISEMENT</h4>
      <img src="/img/adv.jpg" alt="">
    </div>
  </div>
</div>
<div class="container scheda">
  <div class="row">
    <div class="col-lg-6">
      <h3>Talent</h3>
      <div class="artisti">
        <p>Art by:</p>
        @foreach ($comic['artists'] as $artista)
          <small>{{ $artista}}</small>
          @if (!$loop->last)
          ,
          @endif
          @endforeach
      </div>
      <div class="writers">
        <p>Written by:</p>
        @foreach ($comic['writers'] as $writer)
          <small>{{ $writer}}</small>
          @if (!$loop->last)
          ,
          @endif
          @endforeach
      </div>
    </div>
    <div class="col-lg-6">
      <h3>Specs</h3>
      <div class="serie">
        <p>Series:</p>
        <small>{{$comic['series']}}</small>
      </div>
      <div class="prezzo">
        <p>U.S. Price:</p>
        <small><small>{{$comic['price']}}</small></small>
      </div>
      <div class="sale">
        <p>On Sale Date:</p>
        <small><small>{{$comic['sale_date']}}</small></small>
      </div>
    </div>
  </div>
</div>
<div class="container secondo_menu singlepage">
  <div class="row">
    <div class="col-lg-12">
      <div class="items">
        <img src="/img/buy-comics-digital-comics.png" alt="">
        <p>DIGITAL COMICS</p>
      </div>
      <div class="items">
        <img src="/img/buy-comics-merchandise.png" alt="">
        <p>DC MERCHANDISE</p>
      </div>
      <div class="items">
        <img src="/img/buy-comics-subscriptions.png" alt="">
        <p>SUBSCRIPTION</p>
      </div>
      <div class="items">
        <img src="/img/buy-comics-shop-locator.png" alt="">
        <p>COMIC SHOP LOCATOR</p>
      </div>
      <div class="items">
        <img id="visa" src="/img/buy-dc-power-visa.svg" alt="">
        <p>DC POWER VISA</p>
      </div>
    </div>

  </div>
</div>
@endsection
