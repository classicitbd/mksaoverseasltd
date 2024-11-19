@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Slider List</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Slider List</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    <div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="{{ route('slider-create')}}"  class="btn btn-success btn-block"><i class="fa fa-plus"></i>Add Slider</a>
        </div>
    </div>

    <div class="row">
    	<!-- /Page Header -->
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SL</th>
					  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Slider Image</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Slider Name</th>
					  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Status</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Created Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($sliders as $key=> $slider)
                    <tr class="odd">
                        <td>{{ $key+1 }}</td>
                        <td><img src="{{ asset('/img/slider/'. $slider->slider_image) }}" height="110px" width="150px" alt=""></td>
                        <td>{{$slider->name}}</td>
						<td>
							@if($slider->status == 1)
								<span class="badge rounded-pill alert-success">Active</span>
							@else
								<span class="badge rounded-pill alert-danger">Disable</span>
							@endif
						</td>
                        <td>{{$slider->created_at}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
							    <a type="button" href="{{route('slider.edit',$slider->id)}}" class="btn btn-primary"><i class="fas fa-pencil-alt" ></i> </a>&nbsp;
                                <a type="button" href="{{route('slider.delete',$slider->id)}}" class="btn btn-danger" id="delete"><i class="fas fa-trash" ></i> </a>&nbsp;
							</div>
                        </td>
                    </tr>
					@empty
						<div colspan="14">No records found</div>
					@endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
