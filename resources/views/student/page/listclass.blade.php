@extends('student.layout.index')
@section('titel')
    Danh sách lớp
@endsection
@section('main')

<section class="grey page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h1>Danh sách lớp học của ngành: <b>{{$SubjectName->subject_name}}</b></h1>
                    </div>
                </div>
            </div>
</section>
<section class="white section">
<div class="container">
    <a class="btn btn-info" href="../list_majors/{{$SubjectName->semester_code}}">Trở lại</a>
    <hr>
    <!--  -->
    @foreach ($class as $item)
    <div class="row course-list">
        <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
            <div class="shop-list-desc">
                <h4><a href="../class_detail/{{$item->class_code}}">Lớp: <u>{{$item->class_name}}</u> || Mã lớp: <u>{{$item->class_code}}</u><span style="float:right">Giảng viên: {{$item->name}}<span></a></h4>
                    
            </div>
        </div>
    </div>
    @endforeach
    <!--  -->
</div>
</section>
@endsection