@extends('layouts.principal')

@section('title', 'Produtos')

@section('content')
<main>
    <h2 class="text-center">Nossos Produtos</h2>

    <div class="content-main-margin">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/empresa.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/empresa.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/empresa.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

    </div>
    <div class="content-main-margin">
    <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/empresa.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/empresa.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/empresa.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    

</main>
@endsection