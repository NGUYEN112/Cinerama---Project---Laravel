@extends('layouts.admin-layout')

@section('admin-content')

<div class="card-header">
    <h3 class="h6 text-uppercase mb-0">Thêm chương trình hot</h3>
</div>
<div class="card-body">
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label class="col-md-3 form-control-label">Chọn thể loại</label>
            <div class="col-md-9">
                <select id="inputHorizontalSuccess" class=" form-control form-control-success category-select" name="categories">
                    <option>Vui lòng chọn thể loại</option>
                    <option value="film">Phim</option>
                    <option value="combo">Bắp nước</option>
                    <option value="discount">Ưu đãi</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Chọn đối tượng</label>
            <div class="col-md-9 subject-list">
                <select id="inputHorizontalSuccess" class=" form-control form-control-success" name="film_id">
                   
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Ảnh dọc</label>
            <div class="col-md-9 ">
            <input id="inputHorizontalSuccess" name="poster" type="file" placeholder="Tên rạp phim" class="form-control form-control-success">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Ảnh ngang</label>
            <div class="col-md-9 ">
            <input id="inputHorizontalSuccess" name="banner" type="file" placeholder="Tên rạp phim" class="form-control form-control-success">
            </div>
        </div>
        <div class="form-group row pl-auto">
            <div class="col-md-9 ml-auto">
                <input type="submit" value="Thêm" class="btn btn-primary">
                <a href="/admin/remarkables" class="btn btn-secondary ms-auto">Trở lại</a>
            </div>

        </div>
    </form>
</div>
<script src="{{asset('/storage/js/remarkable.js')}}">
    
</script>
@endsection