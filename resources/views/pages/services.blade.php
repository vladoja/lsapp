@extends('layouts.app')

@section('content')
    {{-- <h1>This is Services Page</h1> --}}
    <h1>{{$title}}</h1>
    @if(count($services) > 0) 
        <p> Services available: {{count($services)}} </p>
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{$service}}</li>                
            @endforeach
        </ul>
    @endif
@endsection
