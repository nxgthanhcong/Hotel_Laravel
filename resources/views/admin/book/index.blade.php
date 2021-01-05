@extends('admin.theme.layout')
@section('content')
<a href="{{route('thue.index')}}" class="btn btn-primary">Quản lý</a>

<table class="table table-hover" style="margin-top:10px">
  <thead>
    <th>MaThue</th>
    <th>MaKH</th>
    <th>MaPhong</th>
    <th>NgayDen</th>
    <th>Edit</th>
    <th>Lock</th>
    <th>Delete</th>
  </thead>
  <tbody>
    @foreach($thues ?? '' as $thue)
      <tr>
        
        <td>{{$thue->MaThue}} </td>
        <td>{{$thue->MaKHf}} </td>
        <td>{{$thue->MaPhongf}} </td>
        <td>{{$thue->NgayDen}} </td>
        <td><a href="{{route('thue.edit',$thue->MaThue)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
        <td><a href="" class="btn btn-warning lock"><i class="fa fa-lock"></i></a></td>
        <td>
        <form action="{{route('thue.delete',$thue->MaThue)}}" method="POST">
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
  