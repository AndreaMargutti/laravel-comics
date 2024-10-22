@extends("layouts.app")

@section("additional-cdn")
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.css' integrity='sha512-8BU3emz11z9iF75b10oPjjpamM4Mz23yQFQymbtwyPN3mNWHxpgeqyrYnkIUP6A8KyAj5k2p3MiYLtYqew7gIw==' crossorigin='anonymous'/>
@endsection

@--dd($comics);

@section("page-title", "Homepage")

@section("main-content")
    <h1>Current Series</h1>
    <section class="container">
        <div class="row row-cols-6 justify-content-around">
            @foreach ($comics as $comic )
                <div class="col text-center comic-card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" style="height: 80%">
                        <h6> {{ $comic['series'] }} </h6>
                </div>
            @endforeach
        </div>
    </section>

@endsection
