@extends('layouts.sitelayout.app')

@section('content')
    @if(session('success'))
        {{session('success')}}
    @endif
 
@if (Auth::Check())
    <div class="center">
        <button class="btn btn-blue">
            <a href="{{ route('bands.create')}}"> Create Band</a>
        </button> 
    </div>
@endif
    <div class="grid grid-cols-4 gap-9">
        <div class=" text-lg headerMakeup">Band Name</div>
        <div class=" text-lg headerMakeup"> Genre</div>
        <div class=" text-lg headerMakeup"> Founded</div>
        <div class=" text-lg headerMakeup"> Active till</div>
       
    @foreach($bands as $band)
   
  
  <div class=" text-lg txtMakeup"> <a href="{{ route('bands.show', $band->id) }}">{{$band->band_name}} </a> </div>
  <div class=" text-lg txtMakeup"> <a href="{{ route('bands.show', $band->id) }}">{{$band->genre}} </a> </div>
  <div class=" text-lg txtMakeup"> <a href="{{ route('bands.show', $band->id) }}">{{$band->founded}} </a> </div>
  <div class=" text-lg txtMakeup"> <a href="{{ route('bands.show', $band->id) }}">{{$band->active_till}} </a> </div>
  
  @endforeach
</div>
     <br>
   

@endsection
