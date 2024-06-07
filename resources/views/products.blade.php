@extends('layouts.app')

@section('content')
  <section class="bg-section">
    <div class="container">
      <h1 class="text-center">Prodotti</h1>
      <div class="row g-3">
        @foreach ($products as $product)
          <div class="col-6 col-md-4 col-lg-3">
            @include('partials.product-card')
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
