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
                    <img src="https://scontent.fvca1-1.fna.fbcdn.net/v/t39.30808-6/311382810_2257046454472957_445878385869231417_n.jpg?stp=dst-jpg_s640x640&_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=mKPkiIlWzH4AX-O1SFU&_nc_ht=scontent.fvca1-1.fna&oh=00_AT8bwKRmF2iw6-PvzW-MiyO_ry4HWAgZIfMpzV6No4qviA&oe=634CB245"
                        alt="" class="img-responsive">
                </div>
                <div class="course-meta">
                <p>Trần Chi Pha Ke</p>
                    <hr>
                    <p><a href="teacher_account">Tài khoản của tôi</a></p>
                    <hr>
                    <p><a href="teacher_myclass">Lớp học của tôi</a></p>
                    <hr>
                    <p><a href="teacher_addclass">Thêm lớp học</a></p>
                    <hr>
                    <p><a href="teacher_reupload">Nộp lại bài</a></p>
                    <hr>
                </div>
            </div>
            <div id="course-content" class="col-md-9">
                <div class="course-description">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Xin nộp lại bài</h5>
                                <small>21/11/2022</small>
                            </div>
                            <p class="mb-1">Vì lý do nào đó liên quan đến tâm linh nên em nộp trể</p>
                            <small>Hà Quang DU</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Xin nộp lại bài</h5>
                                <small class="text-muted">21/11/2022</small>
                            </div>
                            <p class="mb-1">Vì lý do nào đó liên quan đến tâm linh nên em nộp trể</p>
                            <small class="text-muted">Hà Quang DU</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Xin nộp lại bài</h5>
                                <small class="text-muted">21/11/2022</small>
                            </div>
                            <p class="mb-1">Vì lý do nào đó liên quan đến tâm linh nên em nộp trể</p>
                            <small class="text-muted">Hà Quang DU</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="invis">
    </div>
</section>
@endsection