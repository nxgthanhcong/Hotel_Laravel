@extends('admin.theme.layout')
@section('content')
<form action="{{route("khachhang.update", $kh->MaKH)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') 
    <div class="form-group">
      <label for="TenKH">TenKH:</label>
      <input type="text" class="form-control" name="TenKH" value="{{$kh->TenKH}}">
    </div>
    <div class="form-group">
      <label for="DiaChi">DiaChi:</label>
      <input type="text" class="form-control" name="DiaChi" value="{{$kh->DiaChi}}">
    </div>
    <div class="form-group">
      <label for="Sdt">Sdt:</label>
      <input type="text" class="form-control" name="Sdt" value="{{$kh->Sdt}}">
    </div>
   <button type="submit" name="btn_editcategory"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
