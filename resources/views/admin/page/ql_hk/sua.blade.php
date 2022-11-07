@extends('admin.layout.index')
@section('tieudetrang')
Sửa học kỳ: A
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
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
                    <h3 class="m-0 font-weight-bold text-primary text-center">Sửa học kỳ: {{$hocky->semester_name}}</h3>
                </div>
                <div class="card-body">
                    <form action="/admin/hocky/sua/{{$hocky->id}}" method="post">
                        <div class="form-group">
                            <label>Id</label>
                            <input type="text" class="form-control"disabled value="{{$hocky->id}}">
                        </div>
                        <div class="form-group">
                            <label>Mã học kỳ</label>
                            <input type="text" class="form-control"placeholder="Mã học kỳ" name="mahk" value="{{$hocky->semester_code}}">
                          </div>
                        <div class="form-group">
                          <label>Tên học kỳ</label>
                          <input type="text" class="form-control"placeholder="Học kỳ" name="tenhk" value="{{$hocky->semester_name}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Sửa</button>
                        @csrf
                        <a href="admin/hocky/ds" type="submit" class="btn btn-primary">Danh sách</a>
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
