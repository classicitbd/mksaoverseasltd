@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Why Choose Us</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Choose Section</li>
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
                        <form action="{{url('choosesection/1')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row"> 
                                <div class="form-group col-6">
                                    <label>SN<span class="text-danger">*</span></label>
                                    <input type="text" name="txtSn" id="txtSn" class="form-control" value="{{$choosesection->sn}}">
                                </div>

                                <div class="form-group col-6">
                                    <label>Title<span class="text-danger">*</span></label>
                                    <input type="text" name="txtTitle" id="txtTitle" class="form-control" value="{{$choosesection->title}}">
                                </div>

                                <div class="form-group col-6">
                                    <label>Detail<span class="text-danger">*</span></label>
                                    <input type="text" name="txtDetail" id="txtDetail" class="form-control" value="{{$choosesection->detail}}">
                                </div>
                                
                                <div class="form-group col-6">
    								<label class="col-form-label">Attach File:&nbsp;</label>
    								<input type="file" class="form-control" id="attach_file" name="attach_file">
    							</div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary">Update</button>
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