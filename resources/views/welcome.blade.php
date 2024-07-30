<x-layout>
    <div class="container mt-5">
        <div class="row ">
            <div class="col-12 mt-5 d-flex justify-content-center">
                <h1>titolo di effetto</h1>
            </div>
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
                <img src="https://wips.plug.it/cips/initalia.virgilio.it/cms/2020/11/amalfi.jpg" alt="" class="bgCustom">
               <p>bg + cartina italia hoverabile</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
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