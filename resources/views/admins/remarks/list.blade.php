@extends('layouts.admin-layout')

@section('admin-content')
<div class="card-header">
    <h6 class="text-uppercase mb-0">Quản Lý Chương trình nổi bật </h6>
    <a href="remarkables/create" title="Thêm mới" style="position: absolute;right: 35px;top: 22px;"><i class="fas fa-plus-square text-success" style="font-size: 24px"></i></a>
</div>
<div class="card-body">
    <table class="table table-hover card-text">
        <thead>
            <tr>
                <th>No.</th>
                <th>Thể loại</th>
                <th>Tên</th>
                <th>Trạng thái</th>
                <th>Chức năng</th>

            </tr>
        </thead>
        <tbody>
            @foreach($remarkables as $key => $remarkable)
            <tr>
                <th>{{$key+1}}</th>
                <td>
                    @if($remarkable->categories == 'film')
                    Phim
                    @elseif($remarkable->categories == 'combo')
                    Bắp, nước
                    @else
                    Ưu đãi
                    @endIf
                </td>
                <td>
                    @if($remarkable->categories == 'film')
                    {{$remarkable->film->global_name}}
                    @elseif($remarkable->categories == 'combo')
                    {{$remarkable->combo->product_name}}
                    @else
                    {{$remarkable->discount->information}}
                    @endIf
                </td>
                <td>
                    <label class="switch">
                        <input class="checkbox" value="{{$remarkable->id}}" type="checkbox" {{$remarkable->status == 1 ? "checked" : ""}} >
                        <span class="slider round"></span>
                        <!-- <input class="subject-id" hidden type="number" value="{{$remarkable->id}}"> -->
                    </label>
                </td>
                <td class="td-func">
                    <a style="padding: 0 15px;" href="/admin/remarkables/edit/{{$remarkable->id}}">
                        <i class="fas fa-edit text-success"></i>
                    </a>
                    <form class="delete-form" action="/admin/remarkables/delete/{{$remarkable->id}}" method="delete" onsubmit="return confirm('Chắc chắn muốn xóa ?')">
                        @csrf
                        <button type="submit" style="background-color: #ffffff00;border: none" title="Xóa"><i class="fas fa-trash-alt text-danger"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="{{asset('/storage/js/remarkable.js')}}">
</script>
@endsection