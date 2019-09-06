@extends('admin.layouts.layout')

@section('css')
    <style>
        .animated {
            -webkit-animation-fill-mode: none;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox-title">
                <h5>添加客户</h5>
            </div>
            <div class="ibox-content">
                <a class="menuid btn btn-primary btn-sm" href="javascript:history.go(-1)">返回</a>
                <a href="{{route('user.index')}}">
                    <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-plus-circle"></i> 客户管理
                    </button>
                </a>
                <div class="hr-line-dashed m-t-sm m-b-sm"></div>
                <form class="form-horizontal m-t-md" action="{{route('user.store')}}" method="POST">

                    <div class="hr-line-dashed m-t-sm m-b-sm"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">客户姓名：</label>
                        <div class="col-sm-3">
                            <input type="text" name="username" value="" class="form-control" required
                                   data-msg-required="请输入客户姓名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">客户电话：</label>
                        <div class="col-sm-3">
                            <input type="text" name="mobile" value="" class="form-control" required
                                   data-msg-required="请输入客户电话">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">客户邮箱：</label>
                        <div class="col-sm-3">
                            <input type="email" name="email" value="" class="form-control" required
                                   data-msg-required="请输入客户邮箱">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">客户QQ：</label>
                        <div class="col-sm-3">
                            <input type="text" name="qq" value="" class="form-control" required
                                   data-msg-required="请输入客户QQ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">客户微信：</label>
                        <div class="col-sm-3">
                            <input type="text" name="wechat" value="" class="form-control" required
                                   data-msg-required="请输入客户微信">
                        </div>
                    </div>

                    <div class="hr-line-dashed m-t-sm m-b-sm"></div>
                    <div class="form-group">
                        <div class="col-sm-12 col-sm-offset-2">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i>&nbsp;保 存</button>
                            <button class="btn btn-white" type="reset"><i class="fa fa-repeat"></i> 重 置</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
    <div id="functions" style="display: none;">
        @include('admin.rules.fonticon')
    </div>
@endsection
