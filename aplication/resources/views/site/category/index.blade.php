@extends('layouts.principal')

@section('title', 'Produtos')

@section('content')
<main id="product">
    <h2 class="text-center text-light">Nossos Produtos</h2>

    <div class="content-main-margin">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/product/produto6-min.jpg') }}" width="100%" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn bg-success text-light">Lorem</button>
            </div>
        </div>

        <div class="card" style="width: 18rem; margin: 2rem;">
            <img src="{{ asset('img/product/produto5-min.jpg') }}" width="100%" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn bg-success text-light">Lorem</button>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/product/produto4-min.jpg') }}" width="100%" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn bg-success text-light">Lorem</button>
            </div>
        </div>

    </div>

    <div class="content-main-margin">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/product/produto3-min.jpg') }}" width="100%" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn bg-success text-light">Lorem</button>
            </div>
        </div>

        <div class="card" style="width: 18rem; margin: 2rem;">
            <img src="{{ asset('img/product/produto2-min.jpg') }}" width="100%" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn bg-success text-light">Lorem</button>
            </div>
        </div>

        <div class="card" style="width: 18rem; margin: 2rem;">
            <img src="{{ asset('img/product/produto1-min.jpg') }}" width="100%" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn bg-success text-light">Lorem</button>
            </div>
        </div>

    </div>
</main>
@endsection