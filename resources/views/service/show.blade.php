@extends('layouts.app')

@section('content')
<header class="d-flex justify-content-between align-items-center my-5">
    <div class="h6 text-dark">
        <a href="/services">Services</a>
    </div>
    <div>
        <a href="{{ url('/service/create') }}" class="btn btn-primary">Create New Service</a>
    </div>
</header>
        <section class="row text-right" >
            <div class="col-lg-4">
                <div class="card text-right">
                    <div class="card-header">
                        <a href="{{ url('/services', $service->id) }}">{{ $service->service_name }}</a>
                    </div>
                    <div class="card-body">
                        <div class="card-text mt-4">
                            {{ $service->description }}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-text mt-4">
                            {{ $service->price}}
                        </div>
                    </div>
                    
                </div>  
   
        </section>

@endsection