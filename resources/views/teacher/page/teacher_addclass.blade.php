@extends('student.layout.index')
@section('titel')
    Thêm lớp học mới
@endsection
@section('main')
    <section class="grey page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>Thêm lớp học mới</h1>
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
                            <form action="teacher_addclass" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Mã lớp học</label>
                                    <input type="text" class="form-control" name="class_code" placeholder="Mã lớp học">
                                </div>
                                <div class="form-group">
                                    <label>Tên lớp học</label>
                                    <input type="text" class="form-control" name="class_name" placeholder="Tên lớp học">
                                </div>
                                <div class="form-group">
                                    <label>Môn học</label>
                                    <select name="subject_code" class="form-control">
                                        @foreach ($hk as $item)
                                        <option value="{{$item->subject_code}}">{{$item->subject_code}} - {{$item->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Giáo viên</label>
                                    <input type="text" class="form-control" name="teacher_code" value="{{Auth()->User()->name}}" readonly>
                                </div>
                                <button type="submit" class="btn btn-primary">Tạo lớp học</button>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="invis">
        </div>
    </section>
@endsection