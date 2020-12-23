@extends('admin.theme.layout')
@section('content')
<a href="{{ url(Request::route()->getPrefix()) }}" class="btn btn-primary">Quản lý</a>
<a href="{{route('dichvu.create')}}" class="btn btn-success">Thêm mới</a>
<table class="table table-hover" style="margin-top:10px">
  <thead>
    <th>MaDV</th>
    <th>TenDV</th>
    <th>MoTaDV</th>
    <th>GiaDV</th>
    <th>Edit</th>
    <th>Lock</th>
    <th>Delete</th>
  </thead>
  <tbody>
    @foreach($dvs ?? '' as $dv)
      <tr>
        <!-- <td><img src="{{asset('images/'. $dv->image)}}" width="40" /></td> -->
        <td>{{$dv->MaDV}} </td>
        <td>{{$dv->TenDV}} </td>
        <td>{{$dv->MoTaDV}} </td>
        <td>{{$dv->GiaDV}} </td>
        <td><a href="{{route('dichvu.edit', $dv->MaDV)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
        <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
        <td>
        <form action="{{route('dichvu.destroy', $dv->MaDV)}}" method="POST">
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
  