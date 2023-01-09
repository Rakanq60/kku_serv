@extends('layouts.app')
@section('content')
    
<div class="row justify-content-center">
    <div class="col-4"> 
        <div class="card p-4"> 
            <h3 class="text-center">New services</h3>
        
            <form action="{{ url('/service/store') }}" method="POST" >
                @csrf 
                <div class="form-group">
                    <label for="title">Service Name</label>
                    <input type="text" class="form-control" id="title" name="service_name" >
                </div>

                <div class="form-group">
                    <label for="title">Category</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                            
                        @endforeach
                        

                    </select>
                    </div>

                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control" name="description" id="desc" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="title">Price</label>
                    <input type="text" class="form-control" id="title" name="price" >
                    </div>

                <div class="form-group">
                    <button type="create" class=" form-control btn btn-secondary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection