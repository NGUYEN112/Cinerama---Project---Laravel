@extends('layouts.admin-layout')

@section('admin-content')

<div class="page-holder w-100 d-flex flex-wrap">
	<div class="container-fluid px-xl-5">
		<section class="py-5">
			<div class="row">
				
				<div class="col-lg-12 mb-4">

					<!-- <form class="input-group" method="POST" action="/admin/managefilm">
						@csrf
						<input type="text" class="form-control col-sm-3 form-control-label" placeholder="Keyword" aria-label="Search Keyword" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-warning" type="submit">Search</button>
						</div>
					</form> -->

					<div class="card">
						<div class="card-header">
							<h6 class="text-uppercase mb-0">Quản Lý Phim</h6>
							<a href="/admin/films/create" title="Thêm mới" style="position: absolute;right: 35px;top: 22px;"><i class="fas fa-plus-square text-success" style="font-size: 24px"></i></a>
						</div>
						<div class="card-body">
							<table class="table table-hover card-text" id="tablephim">
								<thead>
									<tr>
										<th>No.</th>
										<th>Tên Phim</th>
										<th>Thể loại</th>
										<th>Thời Lượng</th>
										<th>Ngày Khởi chiếu</th>
										<th>Trạng thái</th>
										<th>Định dạng</th>
										<th>Chức năng</th>
									</tr>
								</thead>
								<tbody id="tbphim">
									@php
									$stt=0;
									if (isset($_GET['page'])) {
									$a=$_GET['page'];
									}
									else{
									$a=1;
									}
									$stt=($a-1)*10;
									@endphp

									@foreach ($films as $film)
									@php
									$stt++;
									@endphp
									<tr>
										<td>{{$stt}}</td>
										<td>{{$film->global_name}}</td>
										<td>{{$film->categories}}</td>
										<td>{{$film->duration}}</td>
										<td>{{$film->release_date}}</td>
										<td>@if ($film->status == '1')
											Đang Chiếu
											@else
											Sắp Chiếu
											@endif</td>
										<td>
										@if ($film->format_id == '1')
											2D
											@else
											3D
											@endif
										</td>

										<td class="td-func"><a href="/admin/films/edit/{{$film->id}}"><button style="background-color: #ffffff00;border: none" title="Sửa"><i class="fas fa-edit text-success"></i></button></a><br>
											<form class="delete-form" action="/admin/films/delete/{{$film->id}}" method="delete" onsubmit="return confirm('Chắc chắn muốn xóa ?')">
												@csrf
												<button type="submit" style="background-color: #ffffff00;border: none" title="Xóa"><i class="fas fa-trash-alt text-danger"></i></button>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				
				</div>
			</div>
		</section>
	</div>
</div>

<script>
	// function loadAddPage() {
	// 	var url = `route('admin.addfilm.page')`;
	// 	$.ajax({
	// 		url: url,
	// 		success: function(xml) {
	// 			$('.py-5 .row').html(xml);
	// 		},
	// 		error: function(error) {
	// 			console.log("Xảy ra lỗi: " + error.message)
	// 		}
	// 	})
	// }
</script>

@endsection