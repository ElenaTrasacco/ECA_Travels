<div class="container-fluid containerLista d-flex justify-content-between">
    <div class="boxminiList"></div>
    <div class="row px-3 rowLista">

        <div class="col-md-1 categoryList">
            <h5 class="verticalTxt">{{ $travel->category->name }}</h5>
        </div>


        <div class="col-md-3">
            <img class="card-img-top imgLista" src="http://picsum.photos/300" alt="immagine">
        </div>



        <div class="col-md-4">
            <h5 class="card-title classe3">{{ $travel->title }}</h5>
            <p class="card-text classe3">Giorni consigliati: {{ $travel->time }}</p>

        </div>

        <div class="col-md-3">
            <p class="card-text mx-5">
                <i class="fa-solid fa-euro-sign"></i>
                {{ $travel->price }}
            </p>
            <a href="{{ route('travel.show', $travel) }}" class="btn buttonCard">Pagina dettaglio</a>
        </div>
    </div>
</div>
