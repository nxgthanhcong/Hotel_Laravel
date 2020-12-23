@extends('admin.theme.layout')

@section('content')
    <form action="{{route('user.postadd')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="txtname">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="txtemail">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="txtpassword">
            </div>
            <button type="submit" name="btnregister"class="btn btn-primary">Thực Hiện</button>
    </form>
@endsection