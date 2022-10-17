@extends('admin.layout.index')
@section('tieudetrang')
Sửa bài nộp: A
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Sửa bài nộp: A</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Mã bài nộp</label>
                            <input type="text" class="form-control" disabled>
                          </div>
                        <div class="form-group">
                          <label>Bài nộp</label>
                          <input type="text" class="form-control"placeholder="Bài nộp">
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                        <a href="admin/bainop/ds" type="submit" class="btn btn-primary">Danh sách</a>
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
