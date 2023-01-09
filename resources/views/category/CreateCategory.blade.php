@extends('layouts.app')

@section('content')




<section dir="rtl" class="justify-content-center text-center">
    <div class="row">
        <div class="col-12">
            <h3>Add Category</h3>
            
    
            <form action="/category/store" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title" class="d-block">Category Name</label>
                    <input type="text" clas="form-control" name="title" id="title">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-secondary">Create</button>
                </div>

            </form>
        </div>
    </div>


</section>
@endsection