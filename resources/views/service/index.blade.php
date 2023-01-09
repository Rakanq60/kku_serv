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

<section dir="rlt" class="text-right">
    <div class="row">
        @forelse($services as $service)
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('/services', $service->id) }}">{{ $service->service_name }}</a>
                    </div>

                    <div class="card-body">
                        <div class="card-text mt-4">
                            {{ Str::limit($service->description, 150) }}
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-text mt-4">
                            {{ Str::limit($service->price) }}
                        </div>
                    </div>
                    
                </div>
            </div>
        @empty 
        <div class="text-center">
            <h3>There are No Services</h3>
            <a href="{{ url('/create') }}" class="btn btn-primary">Create New Service</a>
        </div>
        @endforelse
    </div>
</section>

@endsection