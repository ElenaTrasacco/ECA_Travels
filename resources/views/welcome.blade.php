<x-layout>
    <div class="container mt-5">
        <div class="row ">
            <div class="col-12 mt-5 d-flex justify-content-center">
                <h1>ECA TRAVELS</h1>
            </div>

        @if(session()->has('error'))
            <div class="alert alert-danger text-center shadow rounded">{{session('error')}}</div>
        @endif
        @if(session()->has('sent'))
        <div class="alert alert-success text-center shadow rounded">{{session('sent')}}</div>
        @endif
            <div class="col-12">
                <div class="d-flex justify-content-end">
                        <a class="btn cta" href="{{route('travel.create')}}"> Inserisci Annuncio
                            <svg width="15px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                        </a>
                    </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-12 mt-5 p-0">
                <img src="/storage/media/bghomepage.png" alt="" class="bgCustom"> 
                {{-- <img src="https://images.unsplash.com/photo-1577600867469-30cc013db252?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Njh8fHBvcnRvZmlub3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="bgCustom">  --}}
               {{-- <p>bg + cartina italia hoverabile</p> --}}
               {{-- https://images.pexels.com/photos/157248/pexels-photo-157248.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 --}}
            </div>
        </div>
    </div>

    <div class="container mt-5"> 
        <h3 class="my-5 text-center">Ultimi 3 annunci inseriti:</h3>
        <div class="row justify-content-evenly">
           
            @forelse($travels as $travel)
                <div class="col-12 col-md-3">
                    <x-card :travel="$travel"/>
                </div>
            @empty
                <div class="col-12 col-md-6">
                    <h3>Non sono stati inseriti viaggi</h3>
                </div>
            @endforelse
            
        </div>
    </div>
</x-layout>