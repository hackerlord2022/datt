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
                    <h3 class="m-0 font-weight-bold text-primary text-center">Sửa môn học: A</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Mã môn học</label>
                            <input type="text" class="form-control" disabled>
                          </div>
                        <div class="form-group">
                          <label>Tên môn học</label>
                          <input type="text" class="form-control"placeholder="môn học">
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
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
