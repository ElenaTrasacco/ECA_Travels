<x-layout>
    <div class="container-fluid mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-3 ">
                <div class="rounded shadow p-3">
                    <h1 class="text-center pb-2">
                        <i class="fa-solid fa-user-pen" style="color: #187af1;"></i>
                        Revisor Dashboard
                    </h1>
                </div>
            </div>
        </div>

        @if(session()->has('message'))
            <div class="row justify-content-center mt-5">
                <div class="col-5 alert alert-success text-center shadow rounded">
                    {{session('message')}}
                </div>
            </div>
        @endif

        @if ($travel_to_check)
            <div class="row justify-content-center pt-5">
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="col-6 col-md-4 mb-4 text-center">
                                <img src="https://picsum.photos/300" class="img-fluid rounded shadow"
                                    alt="immagine segnaposto">
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                    <div>
                        <h2>{{$travel_to_check->title }}</h2>
                        {{-- <h4>Autore: {{$travel_to_check->user->name }} </h4> --}}
                        <h4>Prezzo: {{$travel_to_check->price }}</h4>
                        {{-- <h4 class="fst-italic text-muted">Categoria:{{ $travel_to_check->category->name }}</h4> --}}
                        <p class="h6">Descrizione: {{$travel_to_check->description }}</p>
                    </div>
                    <div class="d-flex pb-4 justify-content-around">
                        <form action="{{route('reject',['travel'=>$travel_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-outline-danger py-2 px-5 fw-bold">
                                <i class="fa-solid fa-xmark me-2" style="color: #ea7676;"></i>
                                Rifiuta</button>
                        </form>
                        <form action="{{route('accept',['travel'=>$travel_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-outline-success py-2 px-5 fw-bold">
                                <i class="fa-solid fa-check me-2" style="color: #65c37b;"></i>
                                Accetta</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center align-items-center height-custom text-center">
                <div class="col-12">
                    <h1 class="fst-italic display-4">
                        Nessun articolo da revisionare
                    </h1>
                    <a href="{{ route('homepage') }}" class="mt-5 btn btn-success"> Torna all'homepage</a>
                </div>
            </div>
        @endif
    </div>
</x-layout>
