@extends('admin.layout.index')
@section('tieudetrang')
Thêm môn học
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Thêm môn học</h3>
                </div>
                <div class="card-body">
                    <form action="/admin/monhoc/them" method="POST">
                        <div class="form-group">
                            <label>Học kỳ</label>
                            <select class="custom-select tm-select-accounts" name="hocky" id="hocky"required>
                                @foreach ($hocky as $mh)
                                <option value="{{$mh->id}}">{{$mh->semester_name}}</option>
                                @endforeach
                            </select>
                          </div>
                        <div class="form-group">
                          <label>Tên môn học</label>
                          <input type="text" class="form-control"placeholder="môn học" name="tenmh"required>
                        </div>
                        <div class="form-group">
                          <label>Mã môn học</label>
                          <input type="text" class="form-control"placeholder="môn học" name="mamh"required>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                        @csrf
                        <a href="admin/monhoc/ds" type="submit" class="btn btn-primary">Danh sách</a>
                      </form>
                      @if(session('thongbao'))
                        <section class='alert alert-success'>{{session('thongbao')}}</section>
                    @endif

                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
@endsection
<script>
    $(document).ready(function(){
        $("#hocky").change(function(){
            var idTheLoai = $(this).val()
            $.get("/them",function(data){
                // alert(data);
                $("#lophoc").html(data);
            });
        });
    });
</script>
