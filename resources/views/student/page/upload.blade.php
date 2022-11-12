@extends('student.layout.index')
@section('titel')
Tải file lên
@endsection
@section('main')

<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>Đây là lớp: {{$className->class_name}} || Giảng viên: {{$className->name}}</h1>
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
                    @if(session('alert'))
                        <section class='alert alert-success'>{{session('alert')}}</section>
                    @endif
                    <h4><a href="#">{{$labdeatail->archives_name}}</a></h4>
                    <p>{{$labdeatail->note}}</p>
                    <form action="../uploadfile/{{$labdeatail->archives_code}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @if ($labUploaded != null)
                        <div class="mb-3" style="margin-bottom: 5px">
                            @if (strtotime($timeNow) <= strtotime($labdeatail->deadlinetime.' '.$labdeatail->deadline))
                            <label class="form-label">File bạn đã nộp:</label>
                                <div class="row">
                                    <div class="col-md-8">
                                        <input class="form-control" name="file" type="text" value="{{$labUploaded->submission}}"  required>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="/student_deletelab/{{$labUploaded->submission_code}}" class="btn btn-default btn-xs m-r-5" style="font-size:20px;" role="button" data-original-title="Delete">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                @else
                                {{-- <a href="#" class="btn btn-default btn-xs m-r-5" style="font-size:20px;" role="button" data-original-title="Delete">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a> --}}

                            @endif
                        </div>
                        <div class="mb-3" style="margin-bottom: 5px">
                            <label for="formFile" class="form-label">Tải lên file của bạn</label>
                            <input class="form-control" name="file" type="text"
                                placeholder="{{$labUploaded->submission}}" id="formFile" readonly>
                        </div>
                        <a href="#" class="btn btn-success col-md-12 col-md-12" style="margin-bottom: 5px">Bạn đã nộp bài</a>

                        @elseif ( strtotime($timeNow) <= strtotime($labdeatail->deadlinetime.' '.$labdeatail->deadline))
                                <div class="mb-3" style="margin-bottom: 5px">
                                    <label for="formFile" class="form-label">Tải lên file của bạn</label>
                                    <input class="form-control" name="file" type="file" id="formFile" required>
                                </div>
                                <button type="submit" class="btn btn-success col-md-12 col-md-12"
                                    style="margin-bottom: 5px">Nộp bài</button>

                                @else
                                <div class="mb-3" style="margin-bottom: 5px">
                                    <label for="formFile" class="form-label">Đã hết thời gian nộp bài</label>
                                    <input class="form-control" type="text" id="formFile" readonly
                                        placeholder="Đã hết thời gian nộp bài">
                                </div>
                                <a href="#" class="btn btn-warning col-md-12 col-md-12" style="margin-bottom: 5px">Đã
                                    hết thời gian nộp bài</a>
                                @endif
                    </form>

                    <hr>
                    <button class="btn btn-warning col-md-12 col-md-12" style="margin-bottom: 5px">Thời gian nộp bài:
                        {{$labdeatail->deadlinetime}} - {{date('d-m-Y',strtotime($labdeatail->deadline))}}</button>
                </div>
            </div>
        </div>
        <!--  -->
        @if($checkResubmit != null)
        <div class="row course-list">
            <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
                <div class="shop-list-desc">
                    <h4><a href="#">{{$labdeatail->archives_name}}</a></h4>
                    <p>{{$labdeatail->note}}</p>

                    <form action="../uploadfile/{{$labdeatail->archives_code}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @if ($labUploaded != null)
                        <div class="mb-3" style="margin-bottom: 5px">
                            <label for="formFile" class="form-label">Phần này xuất hiện khi bạn đã xin nộp bài lại</label>
                            <label for="formFile" class="form-label">Bạn đã nộp lại bài</label>
                            <input class="form-control" name="file" type="text"
                                placeholder="{{$labUploaded->submission}}" id="formFile" readonly>
                        </div>
                        <a href="#" class="btn btn-success col-md-12 col-md-12" style="margin-bottom: 5px">Bạn đã nộp
                            bài</a>

                        @else
                        <label for="formFile" class="form-label">Phần này xuất hiện khi bạn đã xin nộp bài lại</label>
                        <div class="mb-3" style="margin-bottom: 5px">
                            <label for="formFile" class="form-label">Tải lên file của bạn, lưu ý, bài này sẽ được tính là nộp lại</label>
                            <input class="form-control" name="file" type="file" id="formFile" required>
                        </div>
                        <button type="submit" class="btn btn-success col-md-12 col-md-12" style="margin-bottom: 5px">Nộp
                            bài lại</button>
                        @endif
                    </form>

                    <hr>
                    <button class="btn btn-warning col-md-12 col-md-12" style="margin-bottom: 5px">Thời gian nộp bài:
                        {{$labdeatail->deadlinetime}} - {{$labdeatail->deadline}}</button>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
