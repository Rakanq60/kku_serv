@extends('layouts.app')
@section('content')


<div class="container text-center">
    
    
    <div class="mb-3">
        <h3 class="text-center">All Services</h3>
        <a href="{{ url('/service/create') }}" class="btn btn-secondary">Create New Service</a>
    </div>
    <div class="row">
        @foreach($category->services as $service)
        <div class="col-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <p>{{ $service->service_name}}</p>
                </div>
                <div class="card-body">
                    <p>{{ $service->description}}</p>
                </div>
                <div class="card-body">
                    <p>{{ $service->price}}</p>
                </div>
               
            </div>
            </div>
        @endforeach
    </div>
</div>


@endsection