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
                            <th>STT</th>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Level</th>
                            <th>Quản lý</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $key=>$item)
                            <tr class="odd gradeX">
                                <td>{!! ++$key !!}</td>
                                <td>{!! $item['username'] !!}</td>
                                <td>{!! $item['fullname'] !!}</td>

                                <td class="center">
                                    @if($item['level']==0)
                                        Super Admin
                                    @elseif($item['level']==1)
                                        Admin
                                    @else
                                        Member
                                    @endif
                                </td>
                                <td class="center">
                                    <a href="#">
                                        <img src="{!! asset('public/images/edit.png') !!}">
                                    </a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="#">
                                        <img src="{!! asset('public/images/delete.png') !!}">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
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
@endsection