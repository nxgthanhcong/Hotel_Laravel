@extends('admin.theme.layout')
@section('content')
<a href="{{ url(Request::route()->getPrefix()) }}" class="btn btn-primary">Quản lý</a>
<a href="{{route('khachhang.create')}}" class="btn btn-success">Thêm mới</a>
<table class="table table-hover" style="margin-top:10px">
  <thead>
    <th>MaKH</th>
    <th>TenKH</th>
    <th>DiaChi</th>
    <th>Sdt</th>
    <th>Edit</th>
    <th>Lock</th>
    <th>Delete</th>
  </thead>
  <tbody>
    @foreach($khs ?? '' as $kh)
      <tr>
        <!-- <td><img src="{{asset('images/'. $kh->image)}}" width="40" /></td> -->
        <td>{{$kh->MaKH}} </td>
        <td>{{$kh->TenKH}} </td>
        <td>{{$kh->DiaChi}} </td>
        <td>{{$kh->Sdt}} </td>
        <td><a href="{{route('khachhang.edit', $kh->MaKH)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
        <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
        <td>
        <form action="{{route('khachhang.destroy', $kh->MaKH)}}" method="POST">
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
  