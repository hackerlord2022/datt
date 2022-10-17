@extends('admin.layout.index')
@section('tieudetrang')
Sửa người dùng
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Sửa người dùng</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Mã người dùng</label>
                            <input type="text" class="form-control" disabled>
                          </div>
                        <div class="form-group">
                          <label>Họ Tên</label>
                          <input type="text" class="form-control" placeholder="Họ tên">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" placeholder="Pasword">
                        </div>
                        <div class="form-group ">
                            <label>Vai trò :</label><br>
                            <div class="form-check-inline">
                                <input name="noiBat" value="0" class="form-check-input" checked="" type="radio">Giảng viên
                            </div>
                            <div class="form-check-inline">
                              <input name="noiBat" value="1" class="form-check-input" checked="" type="radio">Sinh viên
                            </div>
                            <div class="form-check-inline">
                              <input name="noiBat" value="3" class="form-check-input" checked="" type="radio">Admin
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
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
