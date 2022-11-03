@extends('admin.layout.index')
@section('tieudetrang')
Thêm người dùng
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
<<<<<<< HEAD
    <div class="toast__container">
        <div class="toast__cell">
        <div class="toast toast--green">
          <div class="toast__icon">
            <svg version="1.1" class="toast__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
        <g><g><path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0    c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7    C514.5,101.703,514.499,85.494,504.502,75.496z"></path>
            </g></g>
            </svg>
          </div>
          <div class="toast__content">
            <p class="toast__type">Success</p>
             @if(session('thongbao'))
            <p class="toast__message"> {{session ('thongbao')}}</p>
             @endif
          </div>
          <div class="toast__close">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.642 15.642" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 15.642 15.642">
          <path fill-rule="evenodd" d="M8.882,7.821l6.541-6.541c0.293-0.293,0.293-0.768,0-1.061  c-0.293-0.293-0.768-0.293-1.061,0L7.821,6.76L1.28,0.22c-0.293-0.293-0.768-0.293-1.061,0c-0.293,0.293-0.293,0.768,0,1.061  l6.541,6.541L0.22,14.362c-0.293,0.293-0.293,0.768,0,1.061c0.147,0.146,0.338,0.22,0.53,0.22s0.384-0.073,0.53-0.22l6.541-6.541  l6.541,6.541c0.147,0.146,0.338,0.22,0.53,0.22c0.192,0,0.384-0.073,0.53-0.22c0.293-0.293,0.293-0.768,0-1.061L8.882,7.821z"></path>
        </svg>
          </div>
        </div>
        </div>
=======
    <!-- Page Heading -->
    @if (session('thongbao'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> {{session('thongbao')}}.
>>>>>>> 6bf538d46a847e87c724ed230819ad19ccac4836
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
                        @if(session('alert'))
                        <section class='alert alert-success'>{{session('alert')}}</section>
                    @endif
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control"placeholder="Email" name="email"required>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control"placeholder="Pasword" name="password"required>
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
