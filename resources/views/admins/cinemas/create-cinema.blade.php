@extends('layouts.admin-layout')

@section('admin-content')

<div class="card-header">
    <h3 class="h6 text-uppercase mb-0">Thêm Rạp Phim</h3>
</div>
<div class="card-body">


    <form method="post">
        @csrf
        <!-- <div class="alert alert-danger" *ngIf="addCinemaForm.invalid">
            Vui lòng điền đầy đủ thông tin
        </div> -->
        <div class="form-group row">
            <label class="col-md-3 form-control-label">Tên rạp</label>
            <div class="col-md-9">
                <input id="inputHorizontalSuccess" name="cinema_name" type="text" placeholder="Tên rạp phim" class="form-control form-control-success">
                <!-- <div class="invalid-feedback col-md-2">
							Ngu
						  </div> -->
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Địa chỉ</label>
            <div class="col-md-9">
                <textarea class="form-control " placeholder="Địa chỉ rạp phim" name="address" rows="5" id="ttrap"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Thông tin rạp</label>
            <div class="col-md-9">
                <textarea class="form-control " placeholder="Thông tin rạp" name="information" rows="5" id="ttrap"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-9 m-auto">
                <input type="submit" value="Thêm" class="btn btn-primary">
                <a href="/admin/cinemas" class="btn btn-secondary ms-auto">Trở lại</a>
            </div>
            
        </div>
    </form>
</div>
@endsection