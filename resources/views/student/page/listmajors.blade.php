@extends('student.layout.index')
@section('titel')
    Trang chủ
@endsection
@section('main')

<section class="grey page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h1>Danh sách ngành học</h1>
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
                <h4><a href="list_class?id=">Công nghệ thông tin</a></h4>
                    
            </div>
        </div>
    </div>
    <!--  -->
    <div class="row course-list">
        <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
            <div class="shop-list-desc">
                <h4><a href="list_class?id=">Du lịch</a></h4>
                    
            </div>
        </div>
    </div>
    <div class="row course-list">
        <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
            <div class="shop-list-desc">
                <h4><a href="course-single.html">Đồ họa</a></h4>
                    
            </div>
        </div>
    </div>
</div>
</section>
@endsection