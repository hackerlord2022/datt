@extends('student.layout.index')
@section('titel')
Xin nộp lại
@endsection
@section('main')
<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>Xin nộp lại bài</h1>
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
                    <p>Xin chào: {{Auth::User()->name}}</p>
                    <hr>
                    <p><a href="account">Tài khoản của tôi</a></p>
                    <hr>
                    <p><a href="myclass">Lớp học của tôi</a></p>
                    <hr>
                    <p><a href="reupload">Xin nộp lại bài</a></p>
                    <hr>
                </div>
            </div>
            <div id="course-content" class="col-md-9">
                    <h4><a href="/list_reupload" class="btn btn-warning">Danh sách yêu cầu xin nộp lại</a></h4>
                <div class="course-description">
                    <div class="edit-profile">
                        <!--  -->
                        @foreach ($Class as $item)
                        <div class="row course-list">
                            <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
                                <div class="shop-list-desc">
                                    <h4><a href="myclass_reupload/{{$item->class_code}}">{{$item->class_name}}</a></h4>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!--  -->
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection