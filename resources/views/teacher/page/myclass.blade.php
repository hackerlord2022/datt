@extends('teacher.layout.index')
@section('titel')
Lớp của tôi
@endsection
@section('main')
<section class="grey page-title">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 text-left">
                <h1>Lớp học</h1>
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
                    @if(session('alert'))
                        <section class='alert alert-success'>{{session('alert')}}</section>
                    @endif
                    <div class="course-description">
                    <div class="edit-profile">
                        <div class="row">
                            <div class="col-md-9">
                                <h4><a href="../teacher_addclass" class="btn btn-warning">Thêm lớp học mới</a></h4>
                            </div>
                            <div class="col-md-3">
                                <li class="nav-item dropdown hidden-caret submenu">
                                    <a class="nav-link1 dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-envelope"></i>
                                        <span class="notification">
                                            {{$count}}
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                                        <li>
                                            <div class="dropdown-title d-flex justify-content-between align-items-center submenu">
                                                Thông báo:
                                                <a href="#" class="small"> Nộp lại bài</a>
                                            </div>
                                        </li>
                                        @foreach ($resubmit as $r)
                                        <li>
                                            <div class="scroll-wrapper message-notif-scroll scrollbar-outer" style="position: relative;"><div class="message-notif-scroll scrollbar-outer scroll-content scroll-scrolly_visible" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 250px;">
                                                <div class="notif-center submenu">
                                                    <a href="/teacher_reupload_detail/{{$r->class_code}}">
                                                        <div class="notif-img ">
                                                            <img src="./images/a1a61ba9222de673bf3c.jpg" alt="Img Profile">
                                                        </div>
                                                        <div class="notif-content">
                                                            <span class="subject">
                                                                @foreach ($user as $u)
                                                                    @if ($r->user_code == $u->id)
                                                                        {{$u->name}}
                                                                    @endif
                                                                 @endforeach
                                                            </span>
                                                            <span class="an block">
                                                             {{$r->content}}
                                                            </span>
                                                            <span class="time">{{$r->created_at}}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div><div class="scroll-element scroll-x scroll-scrolly_visible">
                                                <div class="scroll-element_outer">
                                                    <div class="scroll-element_size"></div>
                                                    <div class="scroll-element_track"></div>
                                                    <div class="scroll-bar ui-draggable ui-draggable-handle" style="width: 86px;"></div>
                                                </div>
                                            </div>
                                            <div class="scroll-element scroll-y scroll-scrolly_visible">
                                                <div class="scroll-element_outer">
                                                    <div class="scroll-element_size"></div>
                                                <div class="scroll-element_track"></div>
                                                <div class="scroll-bar ui-draggable ui-draggable-handle" style="height: 194px; top: 0px;">
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </div>
                        </div>


                        <!--  -->
                        @foreach ($myClass as $item)
                            <div class="row course-list">
                                <div class="col-md-12 col-md-12" style="background-color: #f2f2f2; border-radius: 10px;">
                                    <div class="shop-list-desc">
                                        <h4>
                                            <div class="row" >
                                                <div class="col-md-10" style="margin-top:-3px">
                                                    <a href="/teacher_myclass_list/{{$item->class_code}}">{{$item->class_name}}</a>

                                                </div>
                                                    <div class="col-md-2">

                                                    <span >
                                                        <a href="teacher_listexercise/{{$item->class_code}}" class="btn btn-default btn-xs m-r-5" style="font-size:20px;" role="button" data-original-title="Edit">
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                        <a href="teacher_editclass/{{$item->class_code}}" class="btn btn-default btn-xs m-r-5" style="font-size:20px;" role="button" data-original-title="Edit">
                                                            <i class="fa fa-pencil font-20"></i>
                                                        </a>
                                                        <a href="teacher_deleteclass/{{$item->class_code}}" class="btn btn-default btn-xs m-r-5" style="font-size:20px;" role="button" data-original-title="Delete">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </span>
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

