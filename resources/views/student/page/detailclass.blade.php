@extends('student.layout.index')
@section('titel')
    Trang chủ
@endsection
@section('main')

<section class="grey page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h1>Đây là lớp: Công nghệ thông tin</h1>
                    </div>
                </div>
            </div>
</section>
<section class="white section">
<div class="container">
    <!--  -->
    <div class="row course-list">
        <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
            <div class="shop-list-desc">
                <h4><a href="class_detail?id=">Lab1</a></h4>
                <p>Ghi chú cho bài lab 1</p>
                <a href="uploadfile" class="btn btn-success col-md-12 col-md-12" style="margin-bottom: 5px">Nộp bài</a>
                <button class="btn btn-warning col-md-12 col-md-12" style="margin-bottom: 5px">Thời gian nộp bài: 23:50:00 - 21/11/2022</button>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="row course-list">
        <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
            <div class="shop-list-desc">
                <h4><a href="class_detail?id=">Lab1</a></h4>
                <p>Ghi chú cho bài lab 2</p>
                <a class="btn btn-success col-md-12 col-md-12" style="margin-bottom: 5px">Nộp bài</a>
                <button class="btn btn-warning col-md-12 col-md-12" style="margin-bottom: 5px">Thời gian nộp bài: 23:50:00 - 21/11/2022</button>
            </div>
        </div>
    </div>
    <div class="row course-list">
        <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
            <div class="shop-list-desc">
                <h4><a href="class_detail?id=">Lab1</a></h4>
                <p>Ghi chú cho bài lab 2</p>
                <a class="btn btn-success col-md-12 col-md-12" style="margin-bottom: 5px">Nộp bài</a>
                <button class="btn btn-warning col-md-12 col-md-12" style="margin-bottom: 5px">Thời gian nộp bài: 23:50:00 - 21/11/2022</button>
            </div>
        </div>
    </div>
    <div class="row course-list">
        <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
            <div class="shop-list-desc">
                <h4><a href="class_detail?id=">Lab1</a></h4>
                <p>Ghi chú cho bài lab 2</p>
                <a class="btn btn-success col-md-12 col-md-12" style="margin-bottom: 5px">Nộp bài</a>
                <button class="btn btn-warning col-md-12 col-md-12" style="margin-bottom: 5px">Thời gian nộp bài: 23:50:00 - 21/11/2022</button>
            </div>
        </div>
    </div>
</div>
</section>
@endsection