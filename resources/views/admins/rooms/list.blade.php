@extends('layouts.admin-layout')

@section('admin-content')
<div class="card-header">
    <h6 class="text-uppercase mb-0">Quản Lý Phòng chiếu</h6>
    <a href="rooms/create" title="Thêm mới" style="position: absolute;right: 35px;top: 22px;"><i class="fas fa-plus-square text-success" style="font-size: 24px"></i></a>
</div>
<div class="card-body">
    <table class="table table-hover card-text">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tên phòng chiếu</th>
                <th>Thuộc cụm rạp</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $key => $room)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$room->room_name}}</td>
                <td>{{$room->cinema->cinema_name}}</td>
                <td class="td-func">
                    <a style="padding: 0 15px;" href="/admin/rooms/edit/{{$room->id}}">
                        <i class="fas fa-edit text-success"></i>
                    </a>
                    <form class="delete-form" action="/admin/rooms/delete/{{$room->id}}" method="delete" onsubmit="return confirm('Chắc chắn muốn xóa ?')">
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