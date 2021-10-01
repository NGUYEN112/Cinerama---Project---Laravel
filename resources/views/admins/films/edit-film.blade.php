@extends('layouts.admin-layout')
@section('admin-content')
<div class="card-header">
    <h3 class="h6 text-uppercase mb-0">Chỉnh Sửa Phim</h3>
</div>
<div class="card-body">
    <form method="post" enctype="multipart/form-data">
        @csrf
        <!-- <div class="alert alert-danger" *ngIf="editFilmForm.invalid">
            Vui lòng điền đầy đủ thông tin
        </div> -->
        <div class="form-group row">
            <label class="col-md-3 form-control-label">Tên Phim</label>
            <div class="col-md-9">
                <input value="{{$film->film_name}}" id="inputHorizontalSuccess" name="film_name" type="text" placeholder="Tên phim" class="form-control form-control-success" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Tên Quốc Tế</label>
            <div class="col-md-9">
                <input id="inputHorizontalWarning" value="{{$film->global_name}}" name="global_name" type="text" placeholder="Tên Quốc Tế" class="form-control form-control-warning" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Ảnh Phim</label>
            <div class="col-md-9">
                <input placeholder="Url ảnh" id="inputHorizontalWarning" name="poster" type="file" class="form-control form-control-warning" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Ảnh bìa Phim</label>
            <div class="col-md-9">
                <input placeholder="Url ảnh" id="inputHorizontalWarning" name="banner" type="file" class="form-control form-control-warning" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Nhà Sản Xuất</label>
            <div class="col-md-9">
                <input id="inputHorizontalWarning" name="producer" value="{{$film->producer}}" type="text" placeholder="Nhà sản xuất" class="form-control form-control-warning " required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Thể loại</label>
            <div class="col-md-9">
                <input id="inputHorizontalWarning" name="categories" value="{{$film->categories}}" type="text" placeholder="Thể loại" class="form-control form-control-warning " required>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Đạo Diễn</label>
            <div class="col-md-9">
                <input id="inputHorizontalWarning" name="director" value="{{$film->director}}" type="text" placeholder="Đại diễn" class="form-control form-control-warning " required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Diễn Viên</label>
            <div class="col-md-9">
                <input id="inputHorizontalWarning" name="caster" value="{{$film->caster}}" type="text" placeholder="Diễn viên" class="form-control form-control-warning " required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Thời lượng</label>
            <div class="col-md-9">
                <input id="inputHorizontalWarning" name="duration" value="{{$film->duration}}" type="number" placeholder="Thời lượng" class="form-control form-control-warning " required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Ngày Khởi Chiếu</label>
            <div class="col-md-9">
                <input id="inputHorizontalWarning" name="release_date" value="{{$film->release_date}}" type="date" class="form-control form-control-warning " required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Trạng Thái</label>
            <div class="col-md-9">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="radio1"  name="status" value="1" class="custom-control-input" {{$film->status == 1 ? 'checked' : ''}}>
                    <label for="radio1" class="custom-control-label">Phim Đang Chiếu</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="radio2"  name="status" value="0" class="custom-control-input" {{$film->status == 0 ? 'checked' : ''}}>
                    <label for="radio2" class="custom-control-label">Phim Sắp Chiếu</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Định dạng</label>
            <div class="col-md-9">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="2d"  name="format_id" value="1" class="custom-control-input" {{$film->format_id == 1 ? 'checked' : ''}}>
                    <label for="2d" class="custom-control-label">2D</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="3d"  name="format_id" value="2" class="custom-control-input" {{$film->format_id == 2 ? 'checked' : ''}}>
                    <label for="3d" class="custom-control-label">3D</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Trailer</label>
            <div class="col-md-9">
                <textarea class="form-control " name="trailer"  rows="5" id="trailerYT">{{$film->trailer}}</textarea><small class="form-text text-muted ml-3">Chú ý : Lấy mã nhúng video của YouTube</small>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Nội Dung</label>
            <div class="col-md-9">
                <textarea class="form-control " name="description"  rows="5" id="noidung">{{$film->description}}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-9 m-auto">
                <input type="submit" value="CHỈNH SỬA" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
@endsection