@extends('admin.theme.layout')
@section('content')
<form action="{{route("thue.update", $thue->MaThue)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="MaKH">MaKH:</label>
      <input type="text" class="form-control" name="MaKH" value="{{$thue->MaKHf}}">
    </div>
    <div class="form-group">
     <label for="MaPhong">Phòng:</label>
        <select name="MaPhong" class="form-control">
            <option value=''>---Vui lòng chọn phòng---</option>>
              @foreach ($ps as $key =>$cat)
            <option value="{{$cat->MaPhong}}" <?php
              if($thue->MaPhongf == $cat->MaPhong){
                echo 'selected';
              }
            ?>
            >{{$cat->TenPhong}}</option>   
            @endforeach
        </select>
   </div>
    <div class="form-group">
      <label for="NgayDen">NgayDen:</label>
      <input type="date" class="form-control" name="NgayDen" value="{{$thue->NgayDen}}">
    </div>
    <div class="form-group">
      <label for="NgayDi">NgayDi:</label>
      <input type="date" class="form-control" name="NgayDi" value="{{$thue->NgayDi}}">
    </div>
    <div class="form-group">
      <label for="ThanhTien">ThanhTien:</label>
      <input type="text" class="form-control" name="ThanhTien" value="{{$thue->ThanhTien}}">
    </div>
    

   <button type="submit" name="btn_editcategory"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
