@extends('admin.layout.index')
@section('tieudetrang')
Sửa lớp học: A
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
                    <h3 class="m-0 font-weight-bold text-primary text-center">Sửa lớp học:{{$lophoc->class_name}}</h3>
                </div>
                <div class="card-body">
                    <form action="/admin/lophoc/sua/{{$lophoc->id}}" method="POST">
                    <div class="form-group">
                          <label>Tên lớp học</label>
                          <input type="text" class="form-control"placeholder="Lớp học" name="tenlh" value="{{$lophoc->class_name}}">
                        </div>
                        <div class="form-group">
                          <label>Mã lớp học</label>
                          <input type="text" class="form-control"placeholder="Mã Lớp học" name="malh" value="{{$lophoc->class_code}}">
                        </div>
                        <div class="form-group">
                            <label>Môn học</label>
                            <select class="custom-select tm-select-accounts" id="" name="monhoc">
                                @foreach ($monhoc as $mh)
                                <option
                                @if ($lophoc->subject_code == $mh->id)
                                {{"selected"}}
                                @endif
                                value="{{$mh->subject_code}}">{{$mh->subject_name}}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="form-group">
                            <label>Giảng viên của lớp</label>
                            <select class="custom-select tm-select-accounts" id="" name="role">
                                @foreach ($user as $u)
                                    @if ($u->role == 0)
                                        <option
                                        @if ($lophoc->teacher_code == $u->id)
                                        {{"selected"}}
                                        @endif
                                        value="{{$u->id}}">{{$u->name}}</option>
                                    @endif
                                @endforeach
                              </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
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
