@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Events</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Event Edit</li>
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
                        <form action="{{route('events.update', $event->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="">Existing Image</label>
                                    <div>

                                        @if(pathinfo($event->image, PATHINFO_EXTENSION) == 'pdf')
                                            <embed src="{{ asset('img/'.$event->image) }}" type="application/pdf" height="200px" width="200px" />
                                        @else
                                        <img src="{{asset('img/'.$event->image)}}" alt="" sizes="" srcset="" height="200px" width="300px">
                                        @endif
                                    </div>

                                    <div class="pt-3">
                                        <label for="">Image</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>

            					<div class="form-group col-6">
                                    <label>Title<span class="text-danger">*</span></label>
                                    <input type="text" name="txtTitle" id="txtTitle" class="form-control" value="{{$event->title}}">
                                </div>

        						<div class="form-group col-6">
                                    <label>Heading<span class="text-danger">*</span></label>
                                    <input type="text" name="txtHeading" id="txtHeading" class="form-control" value="{{$event->heading}}">
                                </div>

                                 <div class="form-group col-12">
                                    <label>Details<span class="text-danger">*</span></label>
                                    <textarea class="summernote" id="txtDetails" name="txtDetails">{{$event->details}}</textarea>
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
