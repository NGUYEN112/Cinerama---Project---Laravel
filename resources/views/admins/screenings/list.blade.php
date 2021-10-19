@extends('layouts.admin-layout')

@section('admin-content')
<div class="card-header">
    <h6 class="text-uppercase mb-0">Quản Lý Lịch chiếu : {{auth()->user()->cinema->cinema_name}}</h6>
    <a href="screenings/create" title="Thêm mới" style="position: absolute;right: 35px;top: 22px;"><i class="fas fa-plus-square text-success" style="font-size: 24px"></i></a>
</div>
<div class="card-body">
    <table class="table table-hover card-text">
        <thead>
            <tr>
                <th>No.</th>
                <th>Ngày chiếu</th>
                <th>Giờ chiếu</th>
                <th>Phòng chiếu</th>
                <th>Phim</th>
                <th>Chức năng</th>

            </tr>
        </thead>
        <tbody>
            @foreach($screenings as $key => $screening)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$screening->date}}</td>
                <td>{{$screening->start_time}}</td>
                <td>{{$screening->room->room_name}}</td>
                <td>{{$screening->film->global_name}}</td>
                <td class="td-func">
                    <a style="padding: 0 15px;" href="/admin/screenings/edit/{{$screening->id}}">
                        <i class="fas fa-edit text-success"></i>
                    </a>
                    <form class="delete-form" action="/admin/screenings/delete/{{$screening->id}}" method="delete" onsubmit="return confirm('Chắc chắn muốn xóa ?')">
                        @csrf
                        <button type="submit" style="background-color: #ffffff00;border: none" title="Xóa"><i class="fas fa-trash-alt text-danger"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection