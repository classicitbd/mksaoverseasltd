@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Gallery</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Gallery</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_galleries"><i class="fa fa-plus"></i>Add Gallery</a>
        </div>
	</div>
	<!-- /Page Header -->
    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Gallery Img</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Created Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($galleries as $key=> $galleries)
                    <tr class="odd">
                        <td>{{ $key+1 }}</td>
                        <td><img src="{{ asset('img/' . $galleries->image) }}" height="80px" width="120px" alt=""></td>
                        <td>{{$galleries-> title}}</td>
                        <td>{{$galleries-> created_at}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
								<button type="button" value="{{$galleries->id}}" class="btn btn-primary" id="editgalleries" ><i class="fas fa-pencil-alt" ></i> </button>&nbsp;
                                <button type="button" value="{{$galleries->id}}" class="btn btn-danger" id="galleriesDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Gallery Modal -->
<div id="add_galleries" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-edit">Add Gallery</i></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('galleries.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Title:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtTitle" name="txtTitle"required>
								</div>
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Photo:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<span class="text-danger">Max-height: 300px & Max-Width: 382px</span>
									<input type="file" class="form-control" id="filePhoto" name="filePhoto" required>
								</div>
							</div>
						</div>
					</div>

					<div class="submit-section float-right">
                        <button type="button" class="btn btn-secondary" style="width:80px;" data-dismiss="modal">Close</button>
						<input class="btn btn-primary submit-btn" type="submit" name="btnCreate" style="width:80px;" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Gallery Modal -->
<!-- Edit Gallery Center Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Gallery</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('galleries-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="row">
						<div class="col-sm-12">
						    <input type="hidden" value="" id="cmbGalleriesId" name="cmbGalleriesId" >
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Title:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="eTitle" name="txtTitle" required>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Photo:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<span class="text-danger">Max-height: 300px & Max-Width: 382px</span>
									<input type="file" class="form-control" name="filePhoto"  placeholder="image"><br>
									<div class="form-group" id="eFilephoto"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="submit-section float-right">
						<button type="button" class="btn btn-secondary" style="width:80px;" data-dismiss="modal">Cancle</button>
						<input class="btn btn-primary submit-btn" type="submit"  name="btnUpdate" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Gallery Center Modal -->

<!-- Delete Gallery Modal -->
<div class="modal custom-modal fade" id="delete_galleries" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Gallery</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-galleries')}}" method="post" >
								@csrf
								@method("DELETE")
								<input type="hidden" id="delete_galleriesId" name="d_galleries">
                                <button type="submit" class="btn btn-danger continue-btn">Delete</button>
							</form>
						</div>
						<div class="col-6">
							<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-info cancel-btn">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Category Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#galleriesDbtn',function(){
            // alart("ok");
			var galleries_id=$(this).val();
			$('#delete_galleries').modal('show');
			$('#delete_galleriesId').val(galleries_id);
		});


	$(document).on('click','#editgalleries',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-galleries/"+eid,
				success:function(response){
					// console.log(response.galleries.brunch_id);
					$('#cmbGalleriesId').val(eid);
					$('#eTitle').val(response.galleries.title);
					$("#eFilephoto").html(
                        `<img src="img/${response.galleries.image}" width="100" class="img-fluid img-thumbnail">`);

				}
			});
		});

	});

</script>
@endsection
