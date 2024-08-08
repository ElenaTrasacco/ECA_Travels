<x-layout>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h2 class="titolo text-center">
                {{$region->name}}
                </h2>
                
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 vh-100">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                @forelse($travels as $travel)
                <div class="col-12 col-md-3 cardR">
                    <x-card :travel="$travel"/>
                </div>
            @empty
                <div class="col-12 col-md-6 ">
                    <h3>non ci sono viaggi</h3>
                </div>
            @endforelse
            </div>
        </div>
    </div>
</x-layout>