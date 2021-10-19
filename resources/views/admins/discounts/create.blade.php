@extends('layouts.admin-layout')

@section('admin-content')

<div class="card-header">
    <h3 class="h6 text-uppercase mb-0">Thêm Chương trình Ưu đãi</h3>
</div>
<div class="card-body">
    <form method="post">
        @csrf
        <div class="form-group row">
            <label class="col-md-3 form-control-label">Chọn Thể loại</label>
            <div class="col-md-9">
                <select id="inputHorizontalSuccess" class=" form-control form-control-success" name="category_discount">
                    <option value="0">Phim</option>
                    <option value="1">Bắp, nước</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Thông tin thêm</label>
            <div class="col-md-9 ">
                <input id="inputHorizontalSuccess" name="information" type="text" placeholder="Thông tin thêm" class="form-control form-control-success">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Chọn loại ưu đãi</label>
            <div class="col-md-9 ">
            <select id="inputHorizontalSuccess" class=" form-control form-control-success" name="discound_method">

                <option value="0">Đồng giá</option>
                <option value="1">Giảm giá(%)</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Giá trị</label>
            <div class="col-md-9 ">
                <input id="inputHorizontalSuccess" name="discount_value" type="number" placeholder="Giá trị của ưu đãi" class="form-control form-control-success">
            </div>
        </div>
        <div class="form-group row pl-auto">
            <div class="col-md-9 ml-auto">
                <input type="submit" value="Thêm" class="btn btn-primary">
                <a href="/admin/discounts" class="btn btn-secondary ms-auto">Trở lại</a>
            </div>

        </div>
    </form>
</div>
@endsection