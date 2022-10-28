@extends('student.layout.index')
@section('titel')
    Tải file lên
@endsection
@section('main')

<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>Đây là lớp: {{$className->class_name}}</h1>
            </div>
        </div>
    </div>
</section>
<section class="white section">
    <div class="container">
    <a class="btn btn-info" href="../class_detail/{{$className->class_code}}">Trở lại</a>
    <hr>
        <!--  -->
        <div class="row course-list">
            <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
                <div class="shop-list-desc">
                    <h4><a href="#">{{$labdeatail->archives_name}}</a></h4>
                    <p>{{$labdeatail->note}}</p>
                    <form action="" method="post">
                        <div class="mb-3" style="margin-bottom: 5px">
                            <label for="formFile" class="form-label">Tải lên file của bạn</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                            @if ($dateNow <= $labdeatail->deadline AND $timeNow <= $labdeatail->deadlinetime)
                                <button type="submit" class="btn btn-success col-md-12 col-md-12" style="margin-bottom: 5px">Nộp
                            bài</button>
                            
                            @else
                                <button class="btn btn-warning col-md-12 col-md-12" style="margin-bottom: 5px">Đã hết thời gian nộp bài</button>
                            @endif
                    </form>
                    <hr>
                    <button class="btn btn-warning col-md-12 col-md-12" style="margin-bottom: 5px">Thời gian nộp bài:
                    {{$labdeatail->deadlinetime}} - {{$labdeatail->deadline}}</button>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</section>
@endsection