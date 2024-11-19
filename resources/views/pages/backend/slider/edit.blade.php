@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Slider Update</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Slider Update</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<div class="section-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('slider.update', $sliders->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Slider Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" value="{{ $sliders->name }}" id="name" class="form-control">
                                </div>

                                <div class="form-group col-6">
                                    <label>Url<span class="text-danger">*</span></label>
                                    <input type="text" name="url" value="{{ $sliders->url }}" id="url" class="form-control">
                                </div>

                                <div class="form-group col-6">
                                    <label>Slider Image<span class="text-danger">*</span></label>
                                    <input name="slider_image" class="form-control" type="file" id="image1">
                                    @if (!empty($sliders->slider_image))
                                        <img class="mt-2" src="{{ asset('/img/slider/'. $sliders->slider_image) }}" height="110px" width="150px" alt="">
                                    @else
                                        No Image Available
                                    @endif
                                </div>

                                <div class="form-group col-6">
                                    <label>Status<span></span></label>
                                    <select class="form-control" name="status">
                                        <option value="" disabled>Select a status</option>
                                        <option value="1" {{ $sliders->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $sliders->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label>Description<span class="text-danger">*</span></label>
                                    <textarea class="summernote" id="details" name="details">{{ $sliders->details }}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Update Slider</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
