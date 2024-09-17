<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
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
        {{-- <tbody> 
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
        </tbody> --}}



        
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
