@extends('layouts.app')
@section('main')
<div class="container comics">
  <div class="row">
    <div class="col-lg-12">
      <div class="current">
        <strong>CURRENT SERIES</strong>
      </div>
      @foreach ($comics as $index => $comic)
      <div class="comic">
        <a class="decor-none" href="{{route('comicinfo', ['i' => $index])}}">
          <div class="copertina">
            <img src="{{$comic['thumb']}}" alt="">
          </div>
          <p class="title-comic">{{$comic['series']}}</p>
        </a>
      </div>
      @endforeach
    </div>
    <div class="col-12">
      <button type="button" name="button">LOAD MORE</button>
    </div>
  </div>
</div>
<div class="container secondo_menu">
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
