@extends('admin.layout.index')
@section('tieudetrang')
Thêm người dùng
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
    <!-- Page Heading -->
    @if (session('thongbao'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="fa fa-check"></strong> {{session('thongbao')}}.
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Thêm người dùng</h3>
                </div>
                <div class="card-body">
                    <form action="admin/user/them" method="Post">
                        <div class="form-group">
                          <label>Họ Tên</label>
                          <input type="text" class="form-control"placeholder="Họ tên" name="hoten" required>
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control"placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control"placeholder="Pasword" name="password" required>
                        </div>
                        <div class="form-group ">
                            <label>Vai trò :</label><br>
                            <div class="form-check-inline">
                                <input name="role" value="0" class="form-check-input" checked="" type="radio">Giảng viên
                            </div>
                            <div class="form-check-inline">
                              <input name="role" value="1" class="form-check-input" checked="" type="radio">Sinh viên
                            </div>
                            <div class="form-check-inline">
                              <input name="role" value="2" class="form-check-input" checked="" type="radio">Admin
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                        @csrf
                        <a href="admin/user/ds" type="submit" class="btn btn-primary">Danh sách</a>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
@endsection
