@extends('admin.layout.index')
@section('tieudetrang')
Danh sách bài nộp
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
                    <h3 class="m-0 font-weight-bold text-primary text-center">Danh sách bài nộp</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="background-color: cornflowerblue">
                                    <th class=" text-center text-dark">STT</th>
                                    <th class=" text-center text-dark">Mã bài nộp</th>
                                    <th class=" text-center text-dark">Tên bài nộp</th>
                                    <th class=" text-center text-dark">Sửa</th>
                                    <th class=" text-center text-dark">Xóa</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr style="background-color: cornflowerblue">
                                    <th class=" text-center text-dark">STT</th>
                                    <th class=" text-center text-dark">Mã bài nộp</th>
                                    <th class=" text-center text-dark">Tên bài nộp</th>
                                    <th class=" text-center text-dark">Sửa</th>
                                    <th class=" text-center text-dark">Xóa</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td class=" text-center">1</td>
                                    <td>PC001</td>
                                    <td>Edinburgh</td>
                                    <td class="text-center text-primary"><a href="admin/bainop/sua"><i class="fas fa-edit"></i></a></td>
                                    <td class="text-center text-primary"><a href=""><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class=" text-center">2</td>
                                    <td>PC002</td>
                                    <td>Tokyo</td>
                                    <td class="text-center text-primary"><a href="admin/bainop/sua"><i class="fas fa-edit"></i></a></td>
                                    <td class="text-center text-primary"><a href=""><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class=" text-center"> 3</td>
                                    <td>PC003</td>
                                    <td>San Francisco</td>
                                    <td class="text-center text-primary"><a href="admin/bainop/sua"><i class="fas fa-edit"></i></a></td>
                                    <td class="text-center text-primary"><a href=""><i class="fa fa-trash"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="admin/bainop/them" type="submit" class="btn btn-primary">Thêm bài nộp</a>
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
