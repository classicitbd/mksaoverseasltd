@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Contact Us</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Contact Us</li>
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
                        <form action="{{url('contact-us/1')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="">Existing Image</label>
                                    <div>
                                        <img src="{{asset('img/'.$contactus->image ?? '')}}" alt="" sizes="" srcset="" height="200px" width="300px">
                                    </div>

                                    <div class="pt-3">
                                        <label for="">Image</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>

                                <div class="form-group col-6">
                                    <label>Title<span class="text-danger">*</span></label>
                                    <input type="text" name="txtTitle" id="txtTitle" class="form-control" value="{{$contactus->title}}">
                                </div>

            					<div class="form-group col-6">
                                    <label>Address 1<span class="text-danger">*</span></label>
                                    <input type="text" name="txtAddress1" id="txtAddress1" class="form-control" value="{{$contactus->address_1}}">
                                </div>

                                <div class="form-group col-6">
                                    <label>Address 2<span class="text-danger">*</span></label>
                                    <input type="text" name="txtAddress2" id="txtAddress2" class="form-control" value="{{$contactus->address_2}}">
                                </div>

                                <div class="form-group col-6">
                                    <label>Email<span class="text-danger">*</span></label>
                                    <input type="email" name="txtEmail" id="txtEmail" class="form-control" value="{{$contactus->email}}">
                                </div>

                                <div class="form-group col-6">
                                    <label>Phone<span class="text-danger">*</span></label>
                                    <input type="text" name="txtPhone" id="txtPhone" class="form-control" value="{{$contactus->phone}}">
                                </div>

                                 <div class="form-group col-12">
                                    <label>Details</label>
                                    <textarea class="summernote" id="txtDetails" name="txtDetails">{{$contactus->details}}</textarea>
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
