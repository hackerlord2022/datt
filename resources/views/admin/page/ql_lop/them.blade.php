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
                    <form>
                        <div class="form-group">
                          <label>Tên lớp học</label>
                          <input type="text" class="form-control"placeholder="Lớp học">
                        </div>
                        <div class="form-group">
                          <label>Mã lớp học</label>
                          <input type="text" class="form-control"placeholder="Lớp học">
                        </div>
                        <div class="form-group">
                            <label>Học kỳ</label>
                            <select class="custom-select tm-select-accounts" id="" name="">
                                <option value="">Fall 2022</option>
                                <option value="">Spring 2022</option>
                                <option value="">Summer 2022</option>
                              </select>
                        </div>
                        <div class="form-group">
                            <label>Giảng viên của lớp</label>
                            <select class="custom-select tm-select-accounts" id="" name="">
                                <option value="">Giảng viên 1</option>
                                <option value="">Giảng viên 2</option>
                                <option value="">Giảng viên 3</option>
                              </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
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
