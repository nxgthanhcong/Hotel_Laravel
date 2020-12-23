@extends('admin.theme.layout')
@section('content')
<form action="{{route('loaiphong.store')}}" method="POST" enctype="multipart/form-data" style="width:50%;">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="TenLoai">TenLoai:</label>
      <input type="text" class="form-control" name="TenLoai">
    </div>
    <div class="form-group">
      <label for="MoTa">Mo ta:</label>
      <textarea class="form-control" id="MoTa" name="Mota"></textarea>
      <script>CKEDITOR.replace('MoTa');</script>
    </div>
   <button type="submit" name="btn_addcategory"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
