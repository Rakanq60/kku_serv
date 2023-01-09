@extends('layouts.app')


@section('content')


<section dir="rtl">
    <div class="row">
        <div class="col-12">
            <h2 class="d-flex">أهلاً</h2>
            
        </div>
        <div class="col-8">
            <h3 class="d-flex text-right">أنا مُستقل وهذه هي منصتي الطلابية الأولى للعمل الحر بجامعة الملك خالد بإمكانك تصفح الخدمات التي أوفرها والأستفادة منها من خلال القائمة بالأسفل</h3>
        </div> 
        <div class="col-4">
            <img src="{{asset('assets/images/vectors.svg')}}" height="200" width="200" style="float-left" alt="logo">

        </div> 

        <div class="col-12 mt-4 text-center">
            <a href="{{ route('create-category')}}" class="btn btn-secondary">
                اضافة فئة جديدة
            </a>
        </div>
    </div>


</section>

<section class="cards" id="services">
    <h2 class="title">الفئات</h2>
    <div class="row">
        <div class="content">
            @forelse ($categories as $category)

            <a href="{{ route('show-category-service', $category->id)}}">
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-paintbrush"></i>
                    </div>
                    <div class="text">
                        <h3>{{ $category->title }}</h3>
                    </div>
                </div>
            </a>
            @empty

                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-paintbrush"></i>
                    </div>
                    <div class="text">
                        <h3>لايوجد فئات مضافة</h3>
                    </div>
                </div>

            @endforelse
        </div>
    </div>

</section>

    
@endsection
