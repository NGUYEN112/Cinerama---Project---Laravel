@extends('layouts.admin-layout')

@section('admin-content')
<div class="card-header">
    <h6 class="text-uppercase mb-0">Quản Lý Sản phẩm</h6>
    <a href="combos/create" title="Thêm mới" style="position: absolute;right: 35px;top: 22px;"><i class="fas fa-plus-square text-success" style="font-size: 24px"></i></a>
</div>
<div class="card-body">
    <table class="table table-hover card-text">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tên sản phẩm</th>
                <th>Thông tin sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($combos as $key => $combo)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$combo->product_name}}</td>
                <td>{{$combo->product_detail}}</td>
                <td>{{$combo->product_value}}</td>
                <td class="td-func">
                    <a style="padding: 0 15px;" href="/admin/rooms/combos/{{$combo->id}}">
                        <i class="fas fa-edit text-success"></i>
                    </a>
                    <form class="delete-form" action="/admin/combos/delete/{{$combo->id}}" method="delete" onsubmit="return confirm('Chắc chắn muốn xóa ?')">
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