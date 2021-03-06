@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm mới thành viên</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông tin tài khoản
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <div class="@include('admin.status.createUser')">
                                    <label>Tên đăng nhập</label>
                                    <input class="form-control" placeholder="Nhập tên đăng nhập" name="txtUsername"
                                           value="{!! old('txtUsername') !!}" autofocus>
                                    <label class="control-label"
                                           for="inputError">{!! $errors->first('txtUsername') !!}</label>
                                </div>
                                <div class="@include('admin.status.createUser')">
                                    <label>Mật khẩu</label>
                                    <input type="password" class="form-control" placeholder="Nhập mật khẩu"
                                           name="txtPassword">
                                    <label class="control-label"
                                           for="inputError">{!! $errors->first('txtPassword') !!}</label>
                                </div>
                                <div class=" @include('admin.status.createUser')">
                                    <label>Mật khẩu xác nhận</label>
                                    <input type="password" class="form-control" placeholder="Nhập lại mật khẩu"
                                           name="txtRepassword">
                                    <label class="control-label"
                                           for="inputError">{!! $errors->first('txtRepassword') !!}</label>
                                </div>
                                <div class="@include('admin.status.createUser')">
                                    <label>Họ tên</label>
                                    <input class="form-control" placeholder="Nhập họ tên" name="txtFullname"
                                           value="{!! old('txtFullname') !!}">
                                    <label class="control-label"
                                           for="inputError">{!! $errors->first('txtFullname') !!}</label>
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    {{--Kiểm tra điều kiện hiển thị radio--}}
                                    @if(Auth::user()->level == 0)
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rdoLevel" id="optionsRadios1" value="0"
                                                       checked>Super Admin
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rdoLevel" id="optionsRadios1" value="1">Admin
                                            </label>
                                        </div>
                                    @else
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rdoLevel" id="optionsRadios1" value="1"
                                                       checked>Admin
                                            </label>
                                        </div>
                                    @endif
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="rdoLevel" id="optionsRadios2"
                                                   value="2">Member
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default">Thêm</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </form>
                        </div>

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection
