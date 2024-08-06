<x-layout>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h2 class="titolo text-center">
                    Pagina dettaglio: {{$travel->title}}
                </h2>
            </div>
        </div>
    </div>

<div class="container-fluid mt-5">
  <div class="row bg-warning">
  {{----------------------- carousel -------------------}}
      <div class="col-12 col-md-8 d-flex mx-5 bg-danger justify-content-between">
        @if ($travel->images->count() > 1)
          <div id="carouselExampleAutoplaying" class="carousel slide carouselCustom" data-bs-ride="carousel" data-bs-interval="4000">
              <div class="carousel-inner">
                @foreach ($travel->images as $key=>$image)
                <div class="carousel-item @if ($loop->first) active @endif">
                <img src="{{ $image->getUrl(300,300) }}" class="img-fluid rounded shadow" alt="immagine{{ $key + 1 }} dell'annuncio {{ $travel->title }} ">
                </div>
                  @endforeach

                @if ($travel->images->count() > 1)
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              @endif

            @else
            <div class="col-12 col-md-10 justify-content-between">
              <img src="https://picsum.photos/400" alt="">
            </div>
        @endif
              </div>
          </div>
      
{{------------------- fine carousel -------------------------}}
            
            <div class="col-12 col-md-8 mt-5 mx-5 bg-success">
                {{-- <p>TITOLO: {{$travel->title}}</p> --}}
                <p>PREZZO: {{$travel->price}} €</p>
                <p>GIORNI CONSIGLIATI: {{$travel->time}}</p>
                <p>CATEGORIA: {{$travel->category->name}}</p>
                <p>DESCRIZIONE: {{$travel->description}}</p>
            </div>

  </div>
</div>
</div>

</x-layout>


