@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Users List
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<style type="text/css">
	tr#data td{
		text-align: center;
		font-size: 20px;
		line-height: 90px;
	}
	tr#tableHead td{
		text-align: center;
	}
	a{
		cursor: pointer;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@stop
{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Admin</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li><a href="#"> Restaurants</a></li>
        <li class="active">Restaurants List</li>
    </ol>
</section>

<!-- Main content -->
	<div id="duongbao">
			<div class="alert alert-info"><h1>Restaurants Manager</h1></div>
			<div class="panel panel-primary">
				<div class="panel-heading">Restaurants list</div>
				<div class="panel-body">
					<table id="danhsach" class="table table-bordered table-strip table-hover">
						<thead>
							<tr class="danger" id="tableHead">
								
								<td width="10">ID</td>
								<td width="20">Loại nhà hàng</td>
								<td >Tên</td>
								<td >Image</td>
								<td>Địa chỉ</td>
								<td>SĐT</td>
								<td>Email</td>
								<td>Số bàn</td>
								<td>Ghi chú</td>
								@if(Sentinel::inRole('admin'))
								<td>Option</td>
								@endif
							</tr>
						</thead>
						<tbody>
							@foreach($data as $key => $value)
								<tr id="data" class="{{$key}}">
									
									<td>{{ $value-> id }}</td>
									<td>{{ $value-> tenlnh }}</td>
									<td>{{ $value-> ten }}</td>
									<td>
									@if($value->image)
										<img src="{{ URL::to('/uploads/restaurant/'.$value->image) }}" width="200px" height="90px" alt="No image!">
                                    @else
                                       	<img src="http://placehold.it/200x200" alt="profile pic">
                                    @endif
                                    </td>
                                   
									<td>{{ $value-> diachi }}</td>
									<td>{{ $value-> sdt }}</td>
									<td>{{ $value-> email }}</td>
									<td>{{ $value-> soban }}</td>
									<td>{{ $value-> ghichu }}</td>
									 @if(Sentinel::inRole('admin'))
									<td>
										 <a href="{{url('admin/restaurants/edit/'.$value->id)}}" class="btn btn-info">

											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
											Edit
										</a>
										&nbsp;&nbsp;&nbsp;
										<a href="{{route('admin.restaurants.delete_modal',$value->id)}}" data-toggle="modal" data-target="#delete_modal" 
										class="btn btn-danger">
											<i class="fa fa-trash-o" aria-hidden="true"></i> Delete
										</a>
									</td>
									@endif
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
	</div>
	
  	<div class="modal fade" id="delete_modal" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">      
    			<!-- Modal content-->
      		</div>
   		</div>
  	</div>

	<script>
  		$(function(){
      		$('body').on('hidden.bs.modal', '#delete_modal', function () {
         		 $(this).removeData('bs.modal');
      		});
  		});
	</script>


@stop