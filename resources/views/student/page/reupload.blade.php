@extends('student.layout.index')
@section('titel')
    Xin nộp bài lại
@endsection
@section('main')
<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>Tài khoản cá nhân</h1>
            </div>
        </div>
    </div>
</section>
<section class="white section">
    <div class="container">
        <div class="row">
            <div id="course-left-sidebar" class="col-md-3">
                <div class="course-image-widget">
                    <img src="https://scontent.fvca1-1.fna.fbcdn.net/v/t39.30808-6/311382810_2257046454472957_445878385869231417_n.jpg?stp=dst-jpg_s640x640&_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=mKPkiIlWzH4AX-O1SFU&_nc_ht=scontent.fvca1-1.fna&oh=00_AT8bwKRmF2iw6-PvzW-MiyO_ry4HWAgZIfMpzV6No4qviA&oe=634CB245" alt="" class="img-responsive">
                </div>
                <div class="course-meta">
                    <p>Trần Chi Pha Ke</p>
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
                <div class="course-description">
                    <div class="edit-profile">
                        <form action="reupload" method="post" role="form">
                            @csrf
                            @if(session('alert'))
                               <section class='alert alert-success'>{{session('alert')}}</section>
                           @endif
                            <div class="form-group">
                                <label>Tên</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Bài lab xin nộp lại</label>
                                <input type="text" name="status" class="form-control" placeholder="">
                            </div>

                            <input type="hidden" name="user_code" class="form-control" placeholder="" value="{{(Auth()->User()->id)}}">
                            <div class="form-group">
                                <label>Lý do xin nộp lại</label>
                                <textarea name="content" id="" class="col-md-12"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary" style="margin-top: 5px">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr class="invis">
    </div>
</section>
@endsection