@extends('admin.theme.layout')
@section('content')
<a href="{{ url(Request::route()->getPrefix()) }}" class="btn btn-primary">Quản lý</a>
<a href="{{route('loaiphong.create')}}" class="btn btn-success">Thêm mới</a>
<table class="table table-hover" style="margin-top:10px">
  <thead>
    <th>MaLoai</th>
    <th>TenLoai</th>
    <th>MoTa</th>

    <th>Edit</th>
    <th>Lock</th>
    <th>Delete</th>
  </thead>
  <tbody>
    @foreach($lps ?? '' as $lp)
      <tr>
        <!-- <td><img src="{{asset('images/'. $lp->image)}}" width="40" /></td> -->
        <td>{{$lp->MaLoai}} </td>
        <td>{{$lp->TenLoai}} </td>
        <td>{{$lp->Mota}} </td>
        <td><a href="{{route('loaiphong.edit', $lp->MaLoai)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
        <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
        <td>
        <form action="{{route('loaiphong.destroy', $lp->MaLoai)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
       
        </form>
      </tr>
      @endforeach
  </tbody>
</table>
@stop
  