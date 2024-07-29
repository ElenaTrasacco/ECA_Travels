<form class="shadow p-5" wire:submit="store">
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="string" class="form-control" id="title" aria-describedby="titolo" wire:model.live='title'>
      @error('title')
          <span class="text-danger">{{$message}}</span>
      @enderror
          
      
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" aria-describedby="prezzo" wire:model.live='price'>
        @error('price')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      
      <div class="mb-3">
          <label for="time" class="form-label">Numero giorni consigliati</label>
          <input type="number" class="form-control" id="time" aria-describedby="Giorni_di_viaggio" wire:model.live='time'>
          @error('time')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" wire:model.live='description'></textarea>
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>