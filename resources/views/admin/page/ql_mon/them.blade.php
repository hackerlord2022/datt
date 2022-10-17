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
                    <form>
                        <div class="form-group">
                            <label>Học kỳ</label>
                            <select class="custom-select tm-select-accounts" name="hocky" id="hocky">
                                <option value="">Fall 2022</option>
                                <option value="">Spring 2022</option>
                                <option value="">Summer 2022</option>
                              </select>
                          </div>
                          <div class="form-group">
                            <label>Lớp học</label>
                            <select class="custom-select tm-select-accounts" name="lophoc" id="lophoc">
                                <option value="">CNTT</option>
                                <option value="">DL-LH</option>
                                <option value="">ĐH</option>
                              </select>
                          </div>
                        <div class="form-group">
                          <label>Tên môn học</label>
                          <input type="text" class="form-control"placeholder="môn học">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
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
