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

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <img src="http://picsum.photos/500" alt="">
            </div>
            <div class="col-12 col-md-6 mt-5">
                <p>Titolo: {{$travel->title}}</p>
                <p>Prezzo: {{$travel->price}}</p>
                <p>Giorni consigliati: {{$travel->time}}</p>
                <p>Category: {{$travel->category->name}}</p>
                <p>descrizione: {{$travel->description}}</p>
            </div>
        </div>
    </div>

</x-layout>