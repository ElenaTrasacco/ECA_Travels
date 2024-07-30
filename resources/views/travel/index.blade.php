<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h2 class="titolo text-center">
                    Viaggi inseriti
                </h2>
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
    <div class="d-flex justify-content-center mt-3">
        <div>
            {{$travels->links()}}
        </div>

    </div>

</x-layout>