@extends('admin.app')
@section('title_post')
<h3><strong>Add New User</strong></h3>
@endsection
@section('content')
@include('admin.errors.errors')
<div class="form" style="margin: 0 auto; width: 60%">
    <form class="form-horizontal" method="post" action="{{ route('user.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2"  for="username">Username: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="Enter username" value="{!! old('username') !!}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2"  for="email">Email: </label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{!! old('email') !!}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">          
                <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2">Role: </label>
            <div class="col-sm-10">
                <select class="form-control" name="is_admin" id="sel1">
                    <option value="0">Member</option>
                    <option value="1" style="color: red;font-weight: bold">Admin</option>
                </select>
            </div>
                
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success btn-sm" title="Lưu lại">Lưu lại</button>
                <button type="reset" value="reset" class="btn btn-default">Reset</button>
            </div>
        </div>
    </form>
</div>

@endsection