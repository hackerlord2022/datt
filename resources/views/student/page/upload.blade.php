@extends('student.layout.index')
@section('titel')
    Tải file lên
@endsection
@section('main')

<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>Đây là lớp: {{$className->class_name}} - {{$className->name}}</h1>
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
                    <form action="../uploadfile/{{$labdeatail->archives_code}}" method="post" enctype="multipart/form-data">
                    @csrf
                            @if ($labUploaded != null)
                                <div class="mb-3" style="margin-bottom: 5px">
                                        <label for="formFile" class="form-label">Tải lên file của bạn</label>
                                        <input class="form-control" name="file" type="text" placeholder="{{$labUploaded->submission}}" id="formFile" readonly>
                                    </div>
                                    <a href="#" class="btn btn-success col-md-12 col-md-12" style="margin-bottom: 5px">Bạn đã nộp bài</a>
                            @elseif ($dateNow <= $labdeatail->deadline AND $timeNow <= $labdeatail->deadlinetime)
                                <div class="mb-3" style="margin-bottom: 5px">
                                    <label for="formFile" class="form-label">Tải lên file của bạn</label>
                                    <input class="form-control" name="file" type="file" id="formFile" required>
                                </div>
                                <button type="submit" class="btn btn-success col-md-12 col-md-12" style="margin-bottom: 5px">Nộp
                            bài</button>
                            
                            @else
                                <div class="mb-3" style="margin-bottom: 5px">
                                    <label for="formFile" class="form-label">Đã hết thời gian nộp bài</label>
                                    <input class="form-control" type="text" id="formFile" readonly placeholder="Đã hết thời gian nộp bài">
                                </div>
                                <a href="#" class="btn btn-warning col-md-12 col-md-12" style="margin-bottom: 5px">Đã hết thời gian nộp bài</a>
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