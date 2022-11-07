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
                                    <th class=" text-center text-dark">Tình trạng</th>
                                    <th class=" text-center text-dark">Nội dung</th>
                                    <th class=" text-center text-dark">Mã Kho nộp</th>
                                    <th class=" text-center text-dark">Tên người nộp lại</th>
                                    <th class=" text-center text-dark">Xóa</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr style="background-color: cornflowerblue">
                                    <th class=" text-center text-dark">STT</th>
                                    <th class=" text-center text-dark">Mã bài nộp lại</th>
                                    <th class=" text-center text-dark">Tình trạng</th>
                                    <th class=" text-center text-dark">Nội dung</th>
                                    <th class=" text-center text-dark">Mã Kho nộp</th>
                                    <th class=" text-center text-dark">Tên người nộp lại</th>
                                    <th class=" text-center text-dark">Xóa</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($bainop as $i=>$bn)
                                <tr>
                                    <td class=" text-center">{{$i++}}</td>
                                     <td>{{$bn->resubmit_code}}</td>
                                    <td>{{$bn->status}}</td>
                                    <td>{{$bn->content}}</td>
                                    <td>{{$bn->archives_code}}</td>
                                    <td>
                                        @foreach ($user as $u)
                                        @if ($bn->user_code == $u->id)
                                            {{$u->name}}
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class=" text-center">
                                        <a href="admin/bainop/xoa/{{$bn->id}}"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
