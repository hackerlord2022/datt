@extends('admin.layout.index')
@section('tieudetrang')
Thêm học kỳ
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
    @if (session('thongbao'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
       {{session('thongbao')}}.
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Thêm học kỳ</h3>
                </div>
                <div class="card-body">
                    <form action="admin/hocky/them" method="post">
                        <div class="form-group">
                            <label>Mã học kỳ</label>
                            <input type="text" class="form-control" placeholder="Nhập mã học kỳ" name="mahk" required>
                          </div>
                        <div class="form-group">
                          <label>Tên học kỳ</label>
                          <input type="text" class="form-control" placeholder="Nhập tên học kỳ" name="tenhk" required>
                        </div>
                        <button type="submit"  class="btn btn-primary">Thêm</button>
                        @csrf
                        <a href="admin/hocky/ds" type="submit" class="btn btn-primary">Danh sách</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
