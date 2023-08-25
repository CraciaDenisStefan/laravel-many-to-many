@extends('layouts.admin')

@section('content')
    <div class="container mt-4 text-white">
        <div class="col-12 col-sm-6 col-md-3 my-5">
            <a href="{{route('admin.technologies.index')}}" class="btn btn-primary">Torna alle tecnologie</a>
          </div>
        <h1>{{$technology->name}}</h1>
        <div class="col-6">     
            <h2>Progetti che usano {{$technology->name}}</h2>
        </div>

    </div>
    

@endsection