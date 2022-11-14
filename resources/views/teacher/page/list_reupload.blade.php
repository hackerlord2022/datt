@extends('student.layout.index')
@section('titel')
Xin nộp bài lại
@endsection
@section('main')
<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>XIn nộp lại bài</h1>
            </div>
        </div>
    </div>
</section>
<section class="white section">
    <div class="container">
        <div class="row">
            <div id="course-left-sidebar" class="col-md-3">
                <div class="course-image-widget">
                    <img src="https://scontent.fvca1-1.fna.fbcdn.net/v/t39.30808-6/311382810_2257046454472957_445878385869231417_n.jpg?stp=dst-jpg_s640x640&_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=mKPkiIlWzH4AX-O1SFU&_nc_ht=scontent.fvca1-1.fna&oh=00_AT8bwKRmF2iw6-PvzW-MiyO_ry4HWAgZIfMpzV6No4qviA&oe=634CB245"
                        alt="" class="img-responsive">
                </div>
                <div class="course-meta">
                    <p>{{Auth::User()->name}}</p>
                    <hr>
                    <p><a href="../account">Tài khoản của tôi</a></p>
                    <hr>
                    <p><a href="../myclass">Lớp học của tôi</a></p>
                    <hr>
                    <p><a href="../reupload">Xin nộp lại bài</a></p>
                    <hr>
                </div>
            </div>
            
            <div id="course-content" class="col-md-9">
                <div class="course-description">
                    <div class="list-group">
                    @if(session('alert'))
                        <section class='alert alert-success'>{{session('alert')}}</section>
                    @endif
                        @foreach ($list_reupload as $item)
                        <div href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h4 class="mb-1">Yêu cầu xin nộp lại</h4>
                                <small>Ngày yêu cầu: {{$item->created_at}}</small>
                            </div>
                            <p class="mb-1">Lí do xin nộp lại: {{$item->content}}</p>
                            <small>Sinh viên: {{Auth::user()->name}}</small>
                            <p class="mb-1">Trạng thái yêu cầu: 
                                <?php 
                                    if($item->status == "0"){
                                        echo '<button class="btn btn-primary">Đang chờ Giáo viên duyệt</button>';
                                    }
                                    elseif ($item->status == "1") {
                                        echo '<button class="btn btn-primary">Giáo viên duyệt yêu cầu xin nộp lại</button>';
                                    }
                                    elseif ($item->status == "2") {
                                        echo '<button class="btn btn-primary">Giáo viên từ chối yêu cầu xin nộp lại</button>';
                                    }
                                ?>
                            </p>
                            
                            
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr class="invis">
    </div>
</section>
@endsection