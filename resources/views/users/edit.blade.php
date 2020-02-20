@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>edit user > {{$user->name}} </h1>
                <form action="{{route('users.update',$user->id)}}" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" disabled class="form-control" value="{{$user->email}}">
                    </div>

                    <div class="form-group">
                        <label>Roles</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" >super admin
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" >
                                User
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection