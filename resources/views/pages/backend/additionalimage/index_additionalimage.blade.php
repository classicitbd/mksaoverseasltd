@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Additional</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Additional</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_additionalimage"><i class="fa fa-plus"></i>Add Additional</a> 
        </div>
	</div>
	<!-- /Page Header -->
    	<!-- /Page Header -->
        <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Business Unit Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Image</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($additionalimage as $additionalimage)
                    <tr class="odd">
                        <td>{{$additionalimage-> id}}</td>
                        <td>{{$additionalimage-> submenu_name}}</td>
                        <td>{{$additionalimage-> title}}</td>
                        <td>
						<img src="{{asset('img/'.$additionalimage->image)}}" height="70px" width="70px" alt="">
						</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
                                <a class="btn btn-info" href="#" data-toggle="modal" data-target="#view_additionalimage"><i class="fas fa-eye"></i></a>&nbsp;
								<button type="button" value="{{$additionalimage->id}}" class="btn btn-primary" id="editadditionalimage" ><i class="fas fa-pencil-alt" ></i> </button>&nbsp;
                                <button type="button" value="{{$additionalimage->id}}" class="btn btn-danger" id="additionalimageDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- Add Additional Modal -->
<div id="add_additionalimage" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-edit">Add Additional</i></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('additionalimage.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Business Unit Name:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<select id="txtBusinessUnitName" class="form-control" name="txtBusinessUnitName" required>
										<option selected><---Select Business Unit---></option>
										@foreach ($submenus as $submenu)
										<option value="{{ $submenu->id }}">{{ $submenu->submenu_name }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Title:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtTitle" name="txtTitle"required>
								</div>
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Heading:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtHeading" name="txtHeading"required>
								</div>
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Url:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtUrl" name="txtUrl"required>
								</div>
							</div>
						</div>


						<!-- /.card-header -->
						<div class="col-sm-12">
                            <div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Details:&nbsp;</label>
								</div>
                                <div class="col-sm-9">
									<textarea name="txtDetails" id="txtDetails" class="summernote"></textarea>
                            	</div>
                            </div>
                        </div>

						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Icon:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtIcon" name="txtIcon"required>
								</div>
							</div>
						</div>


                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Photo:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="file" class="form-control" id="filePhoto" name="filePhoto"required>
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
<!-- /Add Additional Modal -->
<!-- Edit Additional Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Additional</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('additionalimage-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<input type="hidden" value="" id="cmbAdditionalimageId" name="cmbAdditionalimageId">
								<div class="col-sm-3">
									<label class="col-form-label">Business unit Name:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<select id="eBusinessUnitName" class="form-control" name="txtBusinessUnitName" required>
										<option ><---Select Business---></option>
										@foreach ($submenus as $submenu)
										<option value="{{ $submenu->id }}" >{{ $submenu->submenu_name }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Title:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eTitle" name="txtTitle">
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Heading:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eHeading" name="txtHeading">
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Url:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eUrl" name="txtUrl">
								</div>
							</div>
						</div>

						<div class="col-sm-12">
                            <div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Details:&nbsp;</label>
								</div>
                                <div class="col-sm-9">
									<textarea class="summernote" id="eDetails" name="txtDetails"></textarea>
                            	</div>
                            </div>
                        </div>


						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Icon:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eIcon" name="txtIcon">
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Photo:&nbsp;</label>
								</div>
								<div class="col-sm-9">
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
<!-- /Edit Additional Modal -->
<!-- Delete Additional Modal -->
<div class="modal custom-modal fade" id="delete_additionalimage" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Additional</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-additionalimage')}}" method="post" >
								@csrf
								@method("DELETE")
								<input type="hidden" id="delete_additionalimageId" name="d_additionalimage">
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
<!-- /Delete Additional Modal -->
<script>
	$(document).ready(function(){
        $(document).on('click','#additionalimageDbtn',function(){
            // alart("ok");
			var additionalimage_id=$(this).val();
			$('#delete_additionalimage').modal('show');
			$('#delete_additionalimageId').val(additionalimage_id);
		});

		$(document).on('click','#editadditionalimage',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-additionalimage/"+eid,
				success:function(response){
					// console.log(response.additionalimage.brunch_id);	
					$('#cmbAdditionalimageId').val(eid);		
					$('#eBusinessUnitName').val(response.additionalimage.bu_name);
					$('#eTitle').val(response.additionalimage.title);
					$('#eHeading').val(response.additionalimage.heading);
					$('#eUrl').val(response.additionalimage.url);
					$('#eDetails').summernote('code', response.additionalimage.details);
					$('#eIcon').val(response.additionalimage.icon);
					$("#eFilephoto").html(
                        `<img src="img/${response.additionalimage.image}" width="100" class="img-fluid img-thumbnail">`);
				}
			});
		});
    
	});	
</script>
@endsection