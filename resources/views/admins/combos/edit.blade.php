@extends('layouts.admin-layout')

@section('admin-content')

<div class="card-header">
    <h3 class="h6 text-uppercase mb-0">Chỉnh sửa Sản Phẩm</h3>
</div>
<div class="card-body">
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label class="col-md-3 form-control-label">Tên Sản phẩm</label>
            <div class="col-md-9">
                <input id="inputHorizontalSuccess" value="{{$combo->product_name}}" name="product_name" type="text" placeholder="Tên rạp phim" class="form-control form-control-success">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 form-control-label">Thông tin sản phẩm</label>
            <div class="col-md-9">
                <input id="inputHorizontalSuccess" value="{{$combo->product_detail}}" name="product_detail" type="text" placeholder="Tên rạp phim" class="form-control form-control-success">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 form-control-label">Ảnh sản phẩm</label>
            <div class="col-md-9">
                <input id="inputHorizontalSuccess" name="product_image" type="file" placeholder="Tên rạp phim" class="form-control form-control-success">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 form-control-label">Giá sản phẩm (Vnđ)</label>
            <div class="col-md-9">
                <input id="inputHorizontalSuccess" value="{{$combo->product_value}}" name="product_value" type="number" placeholder="Tên rạp phim" class="form-control form-control-success">
            </div>
        </div>
       
        <div class="form-group row pl-auto">
            <div class="col-md-9 ml-auto">
                <input type="submit" value="Chỉnh sửa" class="btn btn-primary">
                <a href="/admin/combos" class="btn btn-secondary ms-auto">Trở lại</a>
            </div>
            
        </div>
    </form>
</div>
@endsection