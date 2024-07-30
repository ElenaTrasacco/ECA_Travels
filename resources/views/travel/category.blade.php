<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h2 class="titolo text-center">
                    Pagina della categoria {{$category->name}}
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
                    <h3>Non sono stati inseriti viaggi di questa categoria</h3>
                </div>
            @endforelse
            
        </div>
    </div>
</x-layout>