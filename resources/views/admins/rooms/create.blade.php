@extends('layouts.admin-layout')

@section('admin-content')

<div class="card-header">
    <h3 class="h6 text-uppercase mb-0">Thêm Phòng chiếu</h3>
</div>
<div class="card-body">
    <form method="post">
        @csrf
        <div class="form-group row">
            <label class="col-md-3 form-control-label">Tên phòng chiếu</label>
            <div class="col-md-9">
                <input id="inputHorizontalSuccess" name="room_name" type="text" placeholder="Tên rạp phim" class="form-control form-control-success">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">Thuộc cụm rạp</label>
            <div class="col-md-9 ">
            <select id="inputHorizontalSuccess" class=" form-control form-control-success" name="cinema_id">
                @foreach($cinemas as $cinema)
                <option value="{{$cinema->id}}">{{$cinema->cinema_name}}</option>
                @endforeach
            </select>
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