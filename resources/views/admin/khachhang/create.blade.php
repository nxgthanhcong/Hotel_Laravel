@extends('admin.theme.layout')
@section('content')
<form action="{{route('khachhang.store')}}" method="POST" enctype="multipart/form-data" style="width:50%;">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="TenKH">TenKH:</label>
      <input type="text" class="form-control" name="TenKH">
    </div>
    <div class="form-group">
      <label for="DiaChi">DiaChi:</label>
      <input type="text" class="form-control" name="DiaChi">
    </div>
    <div class="form-group">
      <label for="Sdt">Sdt:</label>
      <input type="text" class="form-control" name="Sdt">
    </div>
   <button type="submit" name="btn_addcategory"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
