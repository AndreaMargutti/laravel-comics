@extends("layouts.app")

@section("additional-cdn")
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.css' integrity='sha512-8BU3emz11z9iF75b10oPjjpamM4Mz23yQFQymbtwyPN3mNWHxpgeqyrYnkIUP6A8KyAj5k2p3MiYLtYqew7gIw==' crossorigin='anonymous'/>
@endsection

{{-- @dd($comics); --}}

@section("page-title", "Homepage")

@section("main-content")
    <h1>Current Series</h1>
    <section class="container">
        <div class="row row-cols-6 justify-content-around">
            @foreach ($comics as $index => $comic )
                <div class="col text-center comic-card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" style="height: 80%">
                        <a href="{{route('comics.show', $index)}}">
                            <h6> {{ $comic['series'] }} </h6>
                        </a>
                </div>
            @endforeach
        </div>
        <div class="col-12 text-center pt-5 pb-3">
            <button class="btn btn-primary">LOAD MORE</button>
        </div>
    </section>
    <!--Start of blue banner-->
    <section id="blue-banner" class="d-flex align-items-center justify-content-center">
            <ul class="d-flex align-items-center">
                <li>
                    <img src="{{ URL::asset('img/buy-comics-digital-comics.png')}}" alt="">
                    DIGITAL COMICS
                </li>
                <li>
                    <img src="{{ URL::asset('img/buy-comics-merchandise.png')}}" alt="">
                    DC MERCHANDISE
                </li>
                <li>
                    <img src="{{ URL::asset('img/buy-comics-subscriptions.png') }}" alt="">
                    SUBSCRIPTION
                </li>
                <li>
                    <img src="{{ URL::asset('img/buy-dc-power-visa.svg') }}" alt="">
                    DC POWER VISA
                </li>
                <li>
                    <img src="{{ URL::asset('img/buy-comics-shop-locator.png') }}" alt="">
                    COMIC SHOP LOCATION
                </li>
            </ul>
    </section>

@endsection
