@extends('student.layout.index')
@section('titel')
    Chỉnh sửa
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
                        <p>{{Auth::User()->name}}</p>
                        <hr>
                        <p><a href="../teacher">Tài khoản của tôi</a></p>
                        <hr>
                        <p><a href="../teacher_myclass">Lớp học của tôi</a></p>
                        <hr>
                        <p><a href="../teacher_addclass">Thêm lớp học</a></p>
                        <hr>
                        <p><a href="../teacher_reupload">Yêu cầu nộp bài của sinh viên</a></p>
                        <hr>
                    </div>
                </div>
                <div id="course-content" class="col-md-9">
                    @if(session('alert'))
                        <section class='alert alert-success'>{{session('alert')}}</section>
                    @endif
                    <div class="course-description">
                        <div class="edit-profile">
                            <form action="teacher" method="post" role="form">
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input type="text" class="form-control" name="name" value="{{Auth::User()->name}}">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ mail</label>
                                    <input type="email" class="form-control" name="email" value="{{Auth::User()->email}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <hr class="invis"> --}}
        </div>
    </section>
@endsection