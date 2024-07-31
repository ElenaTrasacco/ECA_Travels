<div class="card cardCustom shadow" style="width: 18rem;">
    <img class="card-img-top" src="http://picsum.photos/300" alt="immagine">
    <div class="card-body">
      <h5 class="card-title">{{$travel->title}}</h5>
      <p class="card-text">Prezzo: {{$travel->price}}</p>
      <p class="card-text">Giorni consigliati: {{$travel->time}}</p>
      <a href="{{route('travel.show',$travel)}}" class="btn buttonCard">Pagina dettaglio</a>
    </div>
  </div>