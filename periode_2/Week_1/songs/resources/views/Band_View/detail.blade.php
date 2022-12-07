@extends('layouts.app')
@section('content')
  
        <div class="grid grid-cols-4 gap-3">
            <div class=" text-lg headerMakeup">Band Name</div>
            <div class=" text-lg headerMakeup"> Genre</div>
            <div class=" text-lg headerMakeup"> Founded</div>
            <div class=" text-lg headerMakeup"> Active till</div>     
            
                    <div>{{ $band->band_name}}</div>
                    <div>{{ $band->genre}}</div>
                    <div>{{ $band->founded}}</div>
                    <div>{{ $band->active_till}}</div>
                
                <form action="{{ route('bands.destroy', $band) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-purple">Delete</button>
                </form>

                    <a href="{{ route('bands.edit', $band) }}">
                        <button class="btn btn-blue"> Edit </button>
                    </a>
                
        </div>

@endsection