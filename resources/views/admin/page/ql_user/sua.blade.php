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
                    <h3 class="m-0 font-weight-bold text-primary text-center">Sửa người dùng : {{$user->name}}</h3>
                </div>
                <div class="card-body">
                    <form action="/admin/user/sua/{{$user->id}}" method="post">
                        <div class="form-group">
                            <label>Mã người dùng</label>
                            <input type="text" class="form-control" disabled value="{{$user->id}}">
                          </div>
                        <div class="form-group">
                          <label>Họ Tên</label>
                          <input type="text" class="form-control" placeholder="Họ tên" name="hoten" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" placeholder="Email" name="email" value="{{$user->email}}">
                        </div>
                        {{-- <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" placeholder="Pasword" name="password" value="{{$user->password}}">
                        </div> --}}
                        <div class="form-group ">
                            <label>Vai trò :</label><br>
                            <div class="form-check-inline">
                                <input name="role" value="0" @if ($user->role == 0)
                                {{"checked"}}
                                @endif
                                class="form-check-input" type="radio">Giảng viên
                            </div>
                            <div class="form-check-inline">
                              <input name="role" value="1" @if ($user->role == 1)
                              {{"checked"}}
                              @endif
                              class="form-check-input" type="radio">Sinh viên
                            </div>
                            <div class="form-check-inline">
                              <input name="role" value="2"
                              @if ($user->role == 2)
                                {{"checked"}}
                                @endif class="form-check-input"  type="radio">Admin
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
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
