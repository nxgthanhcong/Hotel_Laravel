@extends('admin.theme.layout')
@section('content')
<form action="{{route('phong.store')}}" method="POST" enctype="multipart/form-data" style="width:50%;">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="TenPhong">TenPhong:</label>
      <input type="text" class="form-control" name="TenPhong">
    </div>
    <div class="form-group">
     <label for="LoaiPhong">Loại phòng:</label>
        <select name="LoaiPhong" class="form-control">
            <option value=''>---Vui lòng chọn loại phòng---</option>>
            @foreach ($lps as $key =>$cat)
            <option value="{{$cat->MaLoai}}">{{($key+1).'. '.$cat->TenLoai}}</option>   
            @endforeach
        </select>
   </div>
    <div class="form-group">
      <label for="GiaPhong">GiaPhong:</label>
      <input type="text" class="form-control" name="GiaPhong">
    </div>
   <button type="submit" name="btn_addcategory"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
