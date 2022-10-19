@extends('admin.layout.index')
@section('tieudetrang')
Sửa môn học: A
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Sửa môn học: {{$monhoc->AcademicsName}}</h3>
                </div>
                <div class="card-body">
                    <form action="/admin/monhoc/sua/{{$monhoc->id}}" method="POST">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" class="form-control" disabled value=" {{$monhoc->id}}">
                          </div>
                        <div class="form-group">
                            <label>Mã môn học</label>
                            <input type="text" class="form-control" name="mamh" value=" {{$monhoc->AcademicsCode}}">
                          </div>
                        <div class="form-group">
                          <label>Tên môn học</label>
                          <input type="text" class="form-control"placeholder="môn học" name="tenmh" value=" {{$monhoc->AcademicsName}}">
                        </div>
                        <div class="form-group">
                            <label>Học kỳ</label>
                            <select class="custom-select tm-select-accounts" name="hocky" id="hocky">
                                @foreach ($hocky as $hk)
                                <option
                                @if ($monhoc->SemesterCode == $hk->id)
                                {{"selected"}}
                                @endif
                                value="{{$hk->id}}">{{$hk->SemesterName}}</option>
                                @endforeach
                            </select>
                          </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                        @csrf
                        <a href="admin/monhoc/ds" type="submit" class="btn btn-primary">Danh sách</a>
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
