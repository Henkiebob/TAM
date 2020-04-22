@extends('layouts.app')

@section('content')

<h1>Wat is {{ $teacher->name }} aan het doen?</h1>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$teacher->name}}</h5>
    <p class="card-text">{{$teacher->status}}</p>
  
    @if ($teacher->available)
        <span class="badge badge-success">Beschikbaar!</span>
    @else
        <span class="badge badge-danger">Niet beschikbaar</span>
    @endif

  </div>
</div
@endsection