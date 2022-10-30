@extends('admin.layout.index')
@section('tieudetrang')
Thêm lớp học
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Thêm lớp học</h3>
                </div>
                <div class="card-body">
                    <form action="/admin/lophoc/them" method="POST">
                        <div class="form-group">
                          <label>Tên lớp học</label>
                          <input type="text" class="form-control"placeholder="Lớp học" name="tenlh">
                        </div>
                        <div class="form-group">
                          <label>Mã lớp học</label>
                          <input type="text" class="form-control"placeholder="Lớp học" name="malh">
                        </div>
                        <div class="form-group">
                            <label>Môn học</label>
                            <select class="custom-select tm-select-accounts" name="monhoc" id="hocky">
                                @foreach ($monhoc as $mh)
                                <option value="{{$mh->subject_code}}">{{$mh->subject_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Giảng viên của lớp</label>
                            <select class="custom-select tm-select-accounts" name="user" >
                                @foreach ($user as $u)
                                    @if ($u->role == 0)
                                        <option value="{{$u->id}}">{{$u->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                        @csrf
                        <a href="admin/lophoc/ds" type="submit" class="btn btn-primary">Danh sách</a>
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
