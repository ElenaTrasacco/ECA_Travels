<div>
    {{-- The Master doesn't talk, he acts. --}}

    <form class="d-flex mx-5" role="search" action="{{route ('travel.searched')}}" method="GET">
        <input wire:model.live.debounce.500ms="search" class="form-control me-2 searchCustom" type="search" aria-label="Search" name="query">
        <button class="btn btnSearch" type="submit">Cerca</button> 
    </form>
    
    @if (sizeof($travels) > 0)
          <div class="dropdown-menu d-block p-0">
            @foreach ($travels as $travel)
            <div class="px-3 py-1 border-bottom dropSearch">
                <div class="d-flex flex-column ml-3 ">
                    <a class="dropSearchTXT" href="{{route('travel.searched', $travel)}}">{{$travel->title}} </a>
                </div>
            </div>
            @endforeach
          </div>
    @endif
           
</div>
