@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox-title">
                <h5>添加角色</h5>
            </div>
            <div class="ibox-content">
                <a class="menuid btn btn-primary btn-sm" href="javascript:history.go(-1)">返回</a>
                <a href="{{route('user.index')}}">
                    <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-plus-circle"></i> 客户管理</button>
                </a>
                <div class="hr-line-dashed m-t-sm m-b-sm"></div>
                <form class="form-horizontal m-t-md" action="{{route('user.update',$user->id)}}" method="post">
                    {!! csrf_field() !!}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">客户名称：</label>
                        <div class="input-group col-sm-2">
                            <input type="text" class="form-control" name="username" value="{{$user->username}}" required
                                   data-msg-required="请输入客户名称">
                            @if ($errors->has('username'))
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i>{{$errors->first('username')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">联系电话：</label>
                        <div class="input-group col-sm-2">
                            <input type="text" class="form-control" name="mobile" value="{{$user->mobile}}" required
                                   data-msg-required="请输入联系电话">
                            @if ($errors->has('mobile'))
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i>{{$errors->first('mobile')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">联系邮箱：</label>
                        <div class="input-group col-sm-2">
                            <input type="text" class="form-control" name="email" value="{{$user->email}}" required
                                   data-msg-required="请输入联系邮箱">
                            @if ($errors->has('email'))
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i>{{$errors->first('email')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">QQ：</label>
                        <div class="input-group col-sm-2">
                            <input type="text" class="form-control" name="qq" value="{{$user->qq}}" required
                                   data-msg-required="请输入客户名称">
                            @if ($errors->has('qq'))
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i>{{$errors->first('qq')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">微信：</label>
                        <div class="input-group col-sm-2">
                            <input type="text" class="form-control" name="wechat" value="{{$user->wechat}}" required
                                   data-msg-required="请输入客户名称">
                            @if ($errors->has('wechat'))
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i>{{$errors->first('wechat')}}</span>
                            @endif
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
                </form>
            </div>
        </div>
    </div>
@endsection