@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản trị thành viên</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Quản trị thành viên
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="well">
                        <h4>DataTables Usage Information</h4>
                        <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are
                            using a specialized version of DataTables built for Bootstrap 3. We have also customized
                            the table headings to use Font Awesome icons in place of images. For complete
                            documentation on DataTables, visit their website at <a target="_blank"
                                                                                   href="https://datatables.net/">https://datatables.net/</a>.
                        </p>
                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View
                            DataTables Documentation</a>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- DataTables JavaScript -->
    <script src="{!! asset('public/admin/vendor/datatables/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('public/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js') !!}"></script>
    <script src="{!! asset('public/admin/vendor/datatables-responsive/dataTables.responsive.js') !!}"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection