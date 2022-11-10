@extends('student.layout.index')
@section('titel')
Tham gia lớp học
@endsection
@section('main')

<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>Đây là lớp: <b>{{$class->class_name}}</b> | Giảng viên: <b>{{$class->name}}</b></h1>
            </div>
        </div>
    </div>
</section>
<section class="white section">
    <div class="container">
        @if(session('alert'))
        <section class='alert alert-success'>{{session('alert')}}</section>
        @endif
        <!--  -->
        <div class="row course-list">
            <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
                <div class="shop-list-desc">
                    <h4><a href="#">{{$class->class_name}}</a></h4>
                    <p>Giảng viên: {{$class->name}}</p>
                    <form action="../joinclass/{{$class->class_code}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success col-md-12 col-md-12"
                            style="margin-bottom: 5px">Tham gia</button>
                    </form>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</section>
@endsection