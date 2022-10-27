@extends('student.layout.index')
@section('titel')
    Danh sách lớp
@endsection
@section('main')

<section class="grey page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h1>Danh sách lớp học</h1>
                    </div>
                </div>
            </div>
</section>
<section class="white section">
<div class="container">
    <!--  -->
    @foreach ($class as $item)
    <div class="row course-list">
        <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
            <div class="shop-list-desc">
                <h4><a href="../class_detail/{{$item->id}}">{{$item->class_name}}</a></h4>
                    
            </div>
        </div>
    </div>
    @endforeach
    <!--  -->
</div>
</section>
@endsection