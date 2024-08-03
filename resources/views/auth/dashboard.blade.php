<x-layout>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-md-5 mt-5">
                <h2>{{Auth::user()->name}}'s dashboard</h2>
            </div>
            <div class="col-12 col-md-8 mt-3">
                <h3>Annunci preferiti</h3>
                <p>Collega i preferiti della lista</p>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-end">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="col-12">
                    <img class="bgDash" src="https://images.pexels.com/photos/1262304/pexels-photo-1262304.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""> 
                </div>
            </div>
        </div>
    </div>
    
     
    </x-layout>