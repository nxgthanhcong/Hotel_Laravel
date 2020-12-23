@extends('admin.theme.layout')
@section('content')
<form action="{{route("dichvu.update", $dv->MaDV)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="TenDV">TenDV:</label>
      <input type="text" class="form-control" name="TenDV" value="{{$dv->TenDV}}">
    </div>
    <div class="form-group">
      <label for="MoTaDV">Content:</label>
      <textarea class="form-control" id="NoiDMoTaDVungDV" name="MoTaDV" value="{{$dv->MoTaDV}}"></textarea>
      <script>CKEDITOR.replace('MoTaDV');</script>
    </div>
    <div class="form-group">
      <label for="GiaDV">GiaDV:</label>
      <input type="text" class="form-control" name="GiaDV" value="{{$dv->GiaDV}}">
    </div>
    <div class="form-group">
      <label for="NoiDungDV">Content:</label>
      <textarea class="form-control" id="NoiDungDV" name="NoiDungDV" value="{{$dv->NoiDungDV}}"></textarea>
      <script>CKEDITOR.replace('NoiDungDV');</script>
    </div>
   <button type="submit" name="btn_editcategory"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
