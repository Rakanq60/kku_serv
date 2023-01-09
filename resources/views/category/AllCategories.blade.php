@extends('layouts.app');

@section('content');
<header class="d-flex justify-content-between align-items-center my-5">
    <div class="h6 text-dark">
        

        <div class="btn btn-primary">
            <a href="{{url('/category/create')}}" class="btn btn-primary">Add New Category</a>
        </div>

    </div>

</header>
<section>
    <div class="row">
        @forelse ($categories as $category)
        <div class="col-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5>{{ $category->title }}</h5>
                    <a href="{{ route('show-category-service', $category->id)}}">Show Services</a>

                </div>
            </div>
        </div>

        @empty
        <div class="text-center">
            <h3>There are no Categories</h3>
            <a herf="{{url('/category/create')}}" class='btn btn-primary'>Add New Category</a>

        </div>
            
        @endforelse

            
        

    </div>
</section>
@endsection