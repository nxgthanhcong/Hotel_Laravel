@extends('admin.theme.layout')
@section('content')
<form action="{{route("loaiphong.update", $lp->MaLoai)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') 
    <div class="form-group">
      <label for="TenLoai">TenLoai:</label>
      <input type="text" class="form-control" name="TenLoai" value="{{$lp->TenLoai}}">
    </div>
    <div class="form-group">
      <label for="Mota">Mo ta:</label>
      <textarea class="form-control" id="Mota" name="Mota" value="{{$lp->Mota}}"></textarea>
      <script>CKEDITOR.replace('Mota');</script>
    </div>
   <button type="submit" name="btn_editcategory"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
