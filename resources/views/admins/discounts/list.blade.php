@extends('layouts.admin-layout')

@section('admin-content')
<div class="card-header">
    <h6 class="text-uppercase mb-0">Quản Lý Ưu đãi </h6>
    <a href="discounts/create" title="Thêm mới" style="position: absolute;right: 35px;top: 22px;"><i class="fas fa-plus-square text-success" style="font-size: 24px"></i></a>
</div>
<div class="card-body">
    <table class="table table-hover card-text">
        <thead>
            <tr>
                <th>No.</th>
                <th>Đối tượng</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Loại</th>
                <th>Giá trị</th>
                <th>Chức năng</th>

            </tr>
        </thead>
        <tbody>
            @foreach($discounts as $key => $discount)
            <tr>
                <th>{{$key+1}}</th>
                <td>
                    @if($discount->category_discount == 0)
                    Phim
                    @else
                    Bắp, nước
                    @endIf
                </td>
                <td>{{$discount->start_time}}</td>
                <td>{{$discount->end_time}}</td>
                <td>@if($discount->discount_method == 0)
                    Đồng giá
                    @else
                    Giảm giá
                    @endif
                </td>
                <td>{{$discount->discount_value}}</td>
                <td class="td-func">
                    <a style="padding: 0 15px;" href="/admin/discounts/edit/{{$discount->id}}">
                        <i class="fas fa-edit text-success"></i>
                    </a>
                    <form class="delete-form" action="/admin/discounts/delete/{{$discount->id}}" method="delete" onsubmit="return confirm('Chắc chắn muốn xóa ?')">
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