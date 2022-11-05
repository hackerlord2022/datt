@extends('teacher.layout.index')
@section('titel')
Lớp của tôi
@endsection
@section('main')
<section class="grey page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <h1>Bài Lab</h1>
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
                <section class="course-meta">
                    <p>{{Auth::User()->name}}</p>
                    <hr>
                        <p><a href="../teacher">Tài khoản của tôi</a></p>
                        <hr>
                        <p><a href="../teacher_myclass">Lớp học của tôi</a></p>
                        <hr>
                        <p><a href="../teacher_addclass">Thêm lớp học</a></p>
                        <hr>
                        <p><a href="../teacher_reupload">Nộp lại bài</a></p>
                        <hr>
                </section>
            </div>





            <div id="course-content" class="col-md-9">
                <div class="course-description">
                    @if(session('alert'))
                        <section class='alert alert-success'>{{session('alert')}}</section>
                    @endif
                    <div class="edit-profile">
                        <h4><a href="/teacher_addexercise/{{$class_code_class}}" class="btn btn-warning">Thêm lab mới</a></h4>
                        @foreach ($list as $item)
                            <div class="row course-list">
                                <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
                                    <div class="shop-list-desc">
                                        <h4>
                                            <div class="row">
                                                <div class="col-md-10" style="margin-top: -3px">
                                                    <a href="../teacher_list_exercise/{{$item->archives_code}}">{{$item->archives_name}} - Deadline:{{$item->deadline}}</a>
                                                    ||
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="../teacher_list_exercise/{{$item->archives_code}}" class="btn btn-default btn-xs m-r-5" role="button" data-original-title="Edit"><i class="fa fa-download" aria-hidden="true"></i></a>
                                                    <a href="../teacher_editexercise/{{$item->id}}" class="btn btn-default btn-xs m-r-5" role="button" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></a>
                                                    <a href="../teacher_deleteexercise/{{$item->id}}" class="btn btn-default btn-xs m-r-5" role="button" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i>    </a>
                                                </div>
                                            </div>
                                        </h4>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- <hr class="invis"> --}}
    </div>
</section>
@endsection
