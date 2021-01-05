@extends('admin.theme.layout')
@section('content')
<a href="{{route('phong.index')}}" class="btn btn-primary">Quản lý</a>
<a href="{{route('phong.create')}}" class="btn btn-success">Thêm mới</a>
<table class="table table-hover" style="margin-top:10px">
  <thead>
    <th>MaPhong</th>
    <th>TenPhong</th>
    <th>LoaiPhong</th>
    <th>GiaPhong</th>
    <th>Số người</th>
    <th>Edit</th>
    <th>Lock</th>
    <th>Delete</th>
  </thead>
  <tbody>
    @foreach($ps ?? '' as $p)
      <tr>
        <!-- <td><img src="{{asset('images/'. $p->image)}}" width="40" /></td> -->
        <td>{{$p->MaPhong}} </td>
        <td>{{$p->TenPhong}} </td>
        <td>{{$p->LoaiPhong}} </td>
        <td>{{$p->GiaPhong}} </td>
        <td>{{$p->Songuoi}} </td>
        <td><a href="{{route('phong.edit', $p->MaPhong)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
        <td><a  href="" class="btn btn-warning lock"><i class="fa fa-lock"></i></a></td>
        <td>
        <form action="{{route('phong.destroy', $p->MaPhong)}}" method="POST">
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
  