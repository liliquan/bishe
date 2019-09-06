@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox-title">
                <h5>客户信息列表</h5>
            </div>
            <div class="ibox-content">
                <a href="{{route('user.create')}}" link-url="javascript:void(0)">
                    <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-plus-circle"></i> 添加客户</button>
                </a>
                <table class="table table-striped table-bordered table-hover m-t-md">
                    <thead>
                    <tr>
                        <th class="text-center">客户姓名</th>
                        <th class="text-center">联系电话</th>
                        <th class="text-center">联系邮箱</th>
                        <th class="text-center">QQ</th>
                        <th class="text-center">微信</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($users))
                        @foreach($users as $key => $item)
                            <tr>
                                <td class="text-center">{{$item->username}}</td>
                                <td class="text-center">{{$item->mobile}}</td>
                                <td class="text-center">{{$item->email}}</td>
                                <td class="text-center">{{$item->qq}}</td>
                                <td class="text-center">{{$item->wechat}}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{route('user.edit',$item->id)}}">
                                            <button class="btn btn-primary btn-xs" type="button"><i
                                                        class="fa fa-paste"></i>
                                                修改
                                            </button>
                                        </a>
                                        <form class="form-common" action="{{ route('user.destroy', $item->id) }}"
                                              method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger btn-xs" type="submit"><i
                                                        class="fa fa-trash-o"></i> 删除
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <div class="pull-right pagination m-t-no">
                    <div class="text-center">
                        {{$users->links()}}
                    </div>
                    <div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection