@extends('admin.layout.index')
@section('tieudetrang')
Danh sách lớp học
@endsection
@section('noidung')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Danh sách lớp học</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="background-color: cornflowerblue">
                                    <th class="text-center text-dark">STT</th>
                                    <th class="text-center text-dark">Mã lớp học</th>
                                    <th class="text-center text-dark">Tên lớp học</th>
                                    <th class="text-center text-dark">Mã môn học</th>
                                    <th class="text-center text-dark">Sửa</th>
                                    <th class="text-center text-dark">Xóa</th>
                                  </tr>

                            </thead>
                            <tfoot>
                                <tr style="background-color: cornflowerblue">
                                    <th class="text-center text-dark">STT</th>
                                    <th class="text-center text-dark">Mã lớp học</th>
                                    <th class="text-center text-dark">Tên lớp học</th>
                                    <th class="text-center text-dark">Mã Học kỳ</th>
                                    <th class="text-center text-dark">Sửa</th>
                                    <th class="text-center text-dark">Xóa</th>
                                  </tr>

                            </tfoot>
                            <tbody>
                                @foreach ($class as $i=>$lh)
                                <tr>
                                    <td class="text-center">{{$i++}}</td>
                                    <td>{{$lh->ClassCode}}</td>
                                    <td>{{$lh->ClassName}}</td>
                                    <td class="text-center ">{{$lh->SemesterCode}}</td>
                                    <td class="text-center text-primary"><a href="admin/lophoc/sua/{{$lh->id}}"><i class="fas fa-edit"></i></a></td>
                                    <td class="text-center text-primary"><a href="admin/lophoc/xoa/{{$lh->id}}"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="admin/lophoc/them" type="submit" class="btn btn-primary">Thêm lớp học</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
</div>
<!-- /.container-fluid -->
</div>
@endsection








