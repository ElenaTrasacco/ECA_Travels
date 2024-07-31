<x-layout>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h2 class="titolo text-center">
                    Pagina dettaglio
                </h2>
            </div>
        </div>
    </div>
{{----------------- carousel -------------------}}
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="http://picsum.photos/500" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="http://picsum.photos/501" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="http://picsum.photos/502" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

{{------------------- fine carousel -------------------------}}
            </div>
            <div class="col-12 col-md-6 mt-5">
                <p>Titolo: {{$travel->title}}</p>
                <p>Prezzo: {{$travel->price}}</p>
                <p>Giorni consigliati: {{$travel->time}}</p>
                <p>Category: {{$travel->category->name}}</p>
                <p>Descrizione: {{$travel->description}}</p>
            </div>
        </div>
    
    </div>

</x-layout>