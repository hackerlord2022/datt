@extends('student.layout.index')
@section('titel')
    Tải file lên
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
                    <form action="" method="post">
                        <div class="mb-3" style="margin-bottom: 5px">
                            <label for="formFile" class="form-label">Tải lên file của bạn</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        <button href="upload" class="btn btn-success col-md-12 col-md-12" style="margin-bottom: 5px">Nộp
                            bài</button>
                    </form>
                    <hr>
                    <button class="btn btn-warning col-md-12 col-md-12" style="margin-bottom: 5px">Thời gian nộp bài:
                        23:50:00 - 21/11/2022</button>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</section>
@endsection