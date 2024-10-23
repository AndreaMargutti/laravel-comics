@extends('layouts.single-comic');

@section('main-content')
    <div class="container text-center">
        <h1 class="py-3 fw-bold">Ciao sono la Show</h1>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{ $comic['thumb'] }}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{ $comic['title'] }}</h5>
                          <p class="card-text">{{ $comic['description'] }}</p>
                          <div class="d-flex gap-3">
                              <p class="card-text"><small class="text-body-secondary">{{ $comic['series'] }}</small></p>
                              <p class="card-text"><small class="text-body-secondary">{{ $comic['price'] }}</small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
