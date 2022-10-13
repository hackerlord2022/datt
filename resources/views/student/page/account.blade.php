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
                        <form action="" method="post" role="form">
                            <div class="form-group">
                                <label>Họ tên</label>
                                <input type="text" class="form-control" placeholder="Amanda FOX">
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ mail</label>
                                <input type="email" class="form-control" placeholder="name@learnplus.com">
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" placeholder="************">
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" placeholder="************">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr class="invis">
    </div>
</section>
@endsection