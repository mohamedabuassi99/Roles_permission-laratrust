@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
    <h1> Users List</h1>
    <table class="table table-dark">
    <thead>
    <tr>
        <th>index</th>
        <th>name</th>
        <th>email</th>
        <th>roles</th>
        <th>edit</th>
    </tr>
    </thead>
        <tbody>
        @foreach($users as $index=>$user)
        <tr>
            <td>{{$index +1}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @foreach($user->roles as $role)
                    {{$role->display_name}}

                    @endforeach
            </td>
            <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-primary btn-sm">Edit</a> </td>
        </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
@endsection
