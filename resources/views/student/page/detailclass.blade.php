@extends('student.layout.index')
@section('titel')
    {{$className->class_name}}
@endsection
@section('main')

<section class="grey page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h1>Đây là lớp: <b>{{$className->class_name}}</b> || Giảng viên: <b>{{$className->name}}</b></h1>
                    </div>
                </div>
            </div>
</section>
<section class="white section">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-12">
            <a class="btn btn-info" href="../list_class/{{$className->subject_code}}">Trở lại</a>
            <a class="btn btn-warning" href="/laveClass/{{$className->class_code}}" style="float: right">Rời khỏi lớp</a>
        </div>
    </div>
    <hr>
    <!--  -->
    @foreach ($lab as $item)
    <div class="row course-list">
        <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
            <div class="shop-list-desc">
                <h4><a href="../../uploadfile/{{$item->archives_code}}">{{$item->archives_name}}</a></h4>
                <p>{{$item->note}}</p>
                <a href="../../uploadfile/{{$item->archives_code}}" class="btn btn-success col-md-12 col-md-12" style="margin-bottom: 5px">Nộp bài</a>
                <button class="btn btn-warning col-md-12 col-md-12" style="margin-bottom: 5px">Thời gian nộp bài: {{$item->deadlinetime}} - {{date('d-m-Y',strtotime($item->deadline))}}</button>
            </div>
        </div>
    </div>
    @endforeach
    <!--  -->
</div>
</section>
@endsection