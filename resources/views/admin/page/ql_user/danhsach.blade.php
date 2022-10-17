@extends('admin.layout.index')
@section('tieudetrang')
Danh sách Username
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
                    <h3 class="m-0 font-weight-bold text-primary text-center">Danh sách Username</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="background-color: cornflowerblue">
                                    <th class="text-center text-dark">STT</th>
                                    <th class="text-center text-dark">Mã Username</th>
                                    <th class="text-center text-dark">Họ tên</th>
                                    <th class="text-center text-dark">Email</th>
                                    <th class="text-center text-dark">Vai trò</th>
                                    <th class="text-center text-dark">Sửa</th>
                                    <th class="text-center text-dark" >Xóa</th>
                                </tr>

                            </thead>
                            <tfoot>
                                <tr style="background-color: cornflowerblue">
                                    <th class="text-center text-dark">STT</th>
                                    <th class="text-center text-dark">Mã Username</th>
                                    <th class="text-center text-dark">Họ tên</th>
                                    <th class="text-center text-dark">Email</th>
                                    <th class="text-center text-dark">Vai trò</th>
                                    <th class="text-center text-dark">Sửa</th>
                                    <th class="text-center text-dark">Xóa</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>PC01</td>
                                    <td>Doe</td>
                                    <td class="text-center">doe1234@gmail.com</td>
                                    <td class="text-center">Sinh viên</td>
                                    <td class="text-center text-primary"><a href="admin/user/sua"><i class="fas fa-edit"></i></a></td>
                                    <td class="text-center text-primary"><a href=""><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>PC01</td>
                                    <td>Jone</td>
                                    <td class="text-center">jone1234@gmail.com</td>
                                    <td class="text-center">Giảng viên</td>
                                    <td class="text-center text-primary"><a href="admin/user/sua"><i class="fas fa-edit"></i></a></td>
                                    <td class="text-center text-primary"><a href=""><i class="fa fa-trash"></i></a></td>
                                  </tr>
                            </tbody>
                        </table>
                        <a href="admin/user/them" type="submit" class="btn btn-primary">Thêm Username</a>
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













