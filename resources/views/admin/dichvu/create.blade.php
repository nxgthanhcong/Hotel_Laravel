@extends('admin.theme.layout')
@section('content')
<form action="{{route('dichvu.store')}}" method="POST" enctype="multipart/form-data" style="width:50%;">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="TenDV">TenDV:</label>
      <input type="text" class="form-control" name="TenDV">
    </div>
    <div class="form-group">
      <label for="MoTaDV">Mo ta:</label>
      <textarea class="form-control" id="NoiDMoTaDVungDV" name="MoTaDV"></textarea>
      <script>CKEDITOR.replace('MoTaDV');</script>
    </div>
    <div class="form-group">
      <label for="GiaDV">GiaDV:</label>
      <input type="text" class="form-control" name="GiaDV">
    </div>
    <div class="form-group">
      <label for="NoiDungDV">Content:</label>
      <textarea class="form-control" id="NoiDungDV" name="NoiDungDV"></textarea>
      <script>CKEDITOR.replace('NoiDungDV');</script>
    </div>
   <button type="submit" name="btn_addcategory"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
