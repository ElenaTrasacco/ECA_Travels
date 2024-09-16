<x-layout>
    <div class="container-fluid mt-5 vh-100">
        <div class="row">
            <div class="col-12 col-md-5 mt-5">
                <div class="rounded shadow p-3">
                <h2 class="display-6 d-flex"> <i class="fa-solid fa-id-badge mt-2 mx-2" style="color: #187af1;"></i> {{__('ui.dash')}} {{Auth::user()->name}}</h2>
                </div>
            </div>

            <div class="col-12 col-md-8 mt-5">
                <h3>{{__('ui.fav')}}</h3>
            {{-- <p class="fs-3">{{__('ui.dashPpl')}}</p>
            <p class="fs-3">{{__('ui.dashPpl2')}}</p> --}}
            </div>

            <div class="col-12 mt-5">
                <div class="d-flex justify-content-end">
                        {{-- <a class="btn cta" href="{{route('become.revisor')}}"> {{__('ui.becRev')}}
                            <svg width="15px" height="10px" viewBox="0 0 13 10">
                                <path class="prova" d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                        </a> --}}

                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('ui.tit') }}</th>
                                <th scope="col">{{__('ui.categories')}}</th>
                                <th scope="col">{{__('ui.region')}}</th>
                                <th scope="col">{{__('ui.price')}}</th>
                                <th scope="col">{{__('ui.details')}}</th>
                                

                            </tr>
                            </thead>
                            <tbody> 
                            @foreach(Auth::user()->favourites as $favourite)
                            <tr>
                            <th scope="row">{{$travel->id}}</th>
                            <td>{{$travel->title}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$region->name}}</td> 
                            <td>{{$travel->price}}</td> 
                            <td>  <a href="{{ route('travel.show', $travel) }}"><i class="fa-solid fa-plus" style="color: #187af1;"></i></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                            {{-- <tbody>
                                @foreach($travels as $user)
                            <tr>
                                <th scope="row">{{$travel->id}}</th>
                                <td>{{$travel->title}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$region->name}}</td> 
                                <td>  <a href="{{ route('travel.show', $travel) }}"><i class="fa-solid fa-plus" style="color: #187af1;"></i></a></td>

                            </tr>
                        
                            @endforeach 
                            </tbody> --}}
                        </table>  
                    </div>
            </div>
        </div>
    </div>

   
     {{-- <div class="container-fluid d-flex justify-content-end mt-0">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="col-12">
                    <img class="bgDash" src="https://images.pexels.com/photos/1262304/pexels-photo-1262304.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""> 
                </div>
            </div>
        </div>
    </div>  --}}
    
     
    </x-layout>