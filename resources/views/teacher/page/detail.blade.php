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
                <h3>Lớp: WD16301</h3>
                <div class="course-description">
                <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                </div>
            </div>
        </div>
        <hr class="invis">
    </div>
</section>
@endsection