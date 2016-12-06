@extends('admin.app')
@section('title_post')
<h3><strong>User Management</strong></h3>
<div class="alert alert-info alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
    <strong>Notifications!</strong> {{ Session::get('message') }}.
</div>
@endsection
@section('content')
<a href="{{route('user.create')}}" class="btn btn-success">Add New</a>

<table class="table table-hover table-responsive table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Is_admin</th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    @if($item->is_admin == 1)
                        <span style="color:red">Admin</span>
                    @else
                        <span>Member</span>
                    @endif
                </td>
                <td class="text-center"><a href="{{ route('user.edit', $item->id) }}"><span class="glyphicon glyphicon-pencil"></span>  Edit</a></td>
                <td class="text-center"><a href="{{ route('user.destroy', $item->id) }}" onclick="confirm('Do you want to delete this?')"><span class="glyphicon glyphicon-trash"></span>Delete</a></td>
            </tr>
        @endforeach
    </tbody>

    </table>
    <span class="pull-right">{{ $users->links() }}</span>
@endsection