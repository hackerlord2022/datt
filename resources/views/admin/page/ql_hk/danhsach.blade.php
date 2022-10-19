@extends('admin.layout.index')
@section('tieudetrang')
Danh sách học kỳ
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
                    <h3 class="m-0 font-weight-bold text-primary text-center">Danh sách học kỳ</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="background-color: cornflowerblue">
                                    <th class="text-center text-dark">STT</th>
                                    <th class="text-center text-dark">ID</th>
                                    <th class="text-center text-dark">Mã học kỳ</th>
                                    <th class="text-center text-dark">Tên học kỳ</th>
                                    <th class="text-center text-dark">Sửa</th>
                                    <th class="text-center text-dark">Xóa</th>
                                  </tr>

                            </thead>
                            <tfoot>
                                <tr style="background-color: cornflowerblue">
                                    <th class="text-center text-dark">STT</th>
                                    <th class="text-center text-dark">ID</th>
                                    <th class="text-center text-dark">Mã học kỳ</th>
                                    <th class="text-center text-dark">Tên học kỳ</th>
                                    <th class="text-center text-dark">Sửa</th>
                                    <th class="text-center text-dark">Xóa</th>
                                  </tr>

                            </tfoot>
                            <tbody>
                                @foreach ($hocky as $i=>$hk)
                                <tr>
                                    <td class="text-center">{{++$i}}</td>
                                    <td class="text-center">{{$hk->id}}</td>
                                    <td>{{$hk->SemesterCode}}</td>
                                    <td>{{$hk->SemesterName}}</td>
                                    <td class="text-center text-primary"><a href="admin/hocky/sua/{{$hk->id}}"><i class="fas fa-edit"></i></a></td>
                                    <td class="text-center text-primary"><a href="admin/hocky/xoa/{{$hk->id}}"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="admin/hocky/them" type="submit" class="btn btn-primary">Thêm học kỳ</a>
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








