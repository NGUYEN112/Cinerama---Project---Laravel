@extends('layouts.admin-layout')

@section('admin-content')

<div class="card-header">
    <h3 class="h6 text-uppercase mb-0">Thêm Suất chiếu : {{auth()->user()->cinema->cinema_name}}</h3>
</div>
<div class="card-body">
    <form method="post">
        @csrf
        <div class="form-group row">
            <label class="col-md-3 form-control-label">Chọn phòng chiếu</label>
            <div class="col-md-9">
                <select id="inputHorizontalSuccess" class=" form-control form-control-success" name="room_id">
                    @foreach($rooms as $room)
                    <option value="{{$room->id}}">{{$room->room_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Chọn phim</label>
            <div class="col-md-9 ">
                <select id="inputHorizontalSuccess" class=" form-control form-control-success" name="film_id">
                    @foreach($films as $film)
                    <option value="{{$film->id}}">{{$film->global_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Chọn ngày chiếu</label>
            <div class="col-md-9 ">
            <input id="inputHorizontalSuccess" name="date" type="date" placeholder="Tên rạp phim" class="form-control form-control-success">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Chọn ngày chiếu</label>
            <div class="col-md-9 ">
            <input id="inputHorizontalSuccess" name="start_time" type="time" placeholder="Tên rạp phim" class="form-control form-control-success">
            </div>
        </div>
        <div class="form-group row pl-auto">
            <div class="col-md-9 ml-auto">
                <input type="submit" value="Thêm" class="btn btn-primary">
                <a href="/admin/rooms" class="btn btn-secondary ms-auto">Trở lại</a>
            </div>

        </div>
    </form>
</div>
@endsection