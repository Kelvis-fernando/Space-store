@extends('layouts.principal')
@section('title', 'Home')

@section('content')
<main>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/slide-1.jpg')}} " width="100%" height="600px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/slide-2.jpg')}}" width="100%" height="600px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/slide-3.jpg')}}" width="100%" height="600px" class="d-block w-100" alt="...">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>

    <div class="green-background">
        <div class=""></div>

        <div class="main-wrapper split-content">
            <!-- Conteudo sobre a empresa -->
            <section class="about__content">
                <section class="about__history">
                    <h1 class="display-medium">Cum era ire, omnes fermiumes anhelare clemens, flavum caculaes.</h1>
                    <p><strong>Brema :</strong>Eheu, barbatus consilium! Rumor emeritis mensa est. Sunt lunaes imitari talis, flavum eraes. Sunt lumenes carpseris talis, superbus capioes. </p>
                    <p><strong>Sala </strong>Naviss sunt classiss de altus racana. Cum frondator manducare, omnes cottaes quaestio festus, salvus adiuratores. </p>
                    <p><strong>Antverpia :</strong>Cur axona nocere? Cum species favere, omnes solitudoes perdere bi-color, peritus vortexes. Est albus silva, cesaris.</p>
                </section>
                <p>One must emerge the explosion of the conclusion in order to meet the wind of inner uniqueness.</p>

                <section class="about__clients">
                    <div class="about__clients__logos">
                        <img src="{{asset('img/logo-5.svg')}}" alt="">
                        <img src="{{asset('img/logo-6.svg')}}" alt="">
                        <img src="{{asset('img/logo-7.svg')}}" alt="">
                        <img src="{{asset('img/logo-8.svg')}}" alt="">
                    </div>
                </section>
            </section>

            <!-- Imagem valores da empresa -->
            <section class="about__img__values">
                <img src="{{asset('img/Pilares.svg')}}" alt="">
            </section>
        </div>
    </div>
</main>

@endsection