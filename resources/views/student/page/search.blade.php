@extends('student.layout.index')
@section('titel')
    Danh sách lớp
@endsection
@section('main')

<section class="grey page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h1>Danh sách lớp học tìm theo từ khóa: {{$keyword}}</h1>
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
                <h4><a href="../class_detail/{{$item->class_code}}">Lớp: {{$item->class_name}} || Mã lớp: {{$item->class_code}} || Giảng viên: {{$item->name}}</a></h4>
                    
            </div>
        </div>
    </div>
    @endforeach
    <!--  -->
</div>
</section>
@endsection