@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Slider Create</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Slider Create</li>
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
                        <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="form-group col-6">
									<label>Slider Name<span class="text-danger">*</span></label>
									<input type="text" name="name" id="name" class="form-control">
								</div>

                                <div class="form-group col-6">
									<label>Url<span class="text-danger">*</span></label>
									<input type="text" name="url" id="url" class="form-control">
								</div>

								<div class="form-group col-6">
									<label>Slider Image<span class="text-danger">*</span></label>
									<input type="file" name="slider_image" class="form-control">
								</div>

								<div class="form-group col-6">
									<label>Status<span></span></label>
									<select class="form-control" name="status">
										<option value="1">Active</option>
										<option value="0">Inactive</option>
									</select>
								</div>
								<div class="form-group col-12">
									<label>Description</label>
									<textarea class="summernote" id="details" name="details"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<button type="submit" class="btn btn-primary">Add Slider</button>
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
