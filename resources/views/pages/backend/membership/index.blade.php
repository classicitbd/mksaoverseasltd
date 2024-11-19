@extends('layout.backend.home')
@section('page')

<style>
	img {
  border-radius: 50%;
}
</style>

<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">All Membership</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Membership</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_membership"><i class="fa fa-plus"></i>Add Membership</a>
        </div>
	</div>
	<!-- /Page Header -->
    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Image</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Membership Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Membership Heading</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($membership as $key=> $val)
                    <tr class="odd">
                        <td>{{ $key+1 }}</td>
						<td>
						<img src="{{asset('img/'.$val->image)}}" height="70px" width="70px" alt="">
						</td>
                        <td>{{$val-> title}}</td>
                        <td>{{$val-> heading}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
								<button type="button" value="{{$val->id}}" class="btn btn-primary" id="editmembership" ><i class="fas fa-pencil-alt" ></i> </button>&nbsp;
                                <button type="button" value="{{$val->id}}" class="btn btn-danger" id="membershipDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Membership Modal -->
<div id="add_membership" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-edit">Add Membership</i></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('all-membership.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Membership Name:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtTitle" name="txtTitle"required>
								</div>
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Membership Heading:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtHeading" name="txtHeading"required>
								</div>
							</div>
						</div>

                        <!-- /.card-header -->
						<div class="col-sm-12">
                            <div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Details:&nbsp;</label>
								</div>
                                <div class="col-sm-10">
									<textarea name="txtDetails" id="txtDetails" class="summernote"></textarea>
                            	</div>
                            </div>
                        </div>


                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Image:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="file" class="form-control" id="filePhoto" name="filePhoto">
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
<!-- /Add Membership Modal -->
<!-- Edit Membership Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Membership</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('membership-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<input type="hidden" value="" id="cmbmembershipId" name="cmbmembershipId" >
								<div class="col-sm-2">
									<label class="col-form-label">Membership Name:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="eTitle" name="txtTitle" required>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Membership Heading:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="eHeading" name="txtHeading" required>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
                            <div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Details:&nbsp;</label>
								</div>
                                <div class="col-sm-10">
									<textarea class="summernote" id="eDetails" name="txtDetails"></textarea>
                            	</div>
                            </div>
                        </div>


						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Image:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="file" class="form-control" name="filePhoto"  placeholder="image"><br>
									<div class="input-group mb-5" id="eFilephoto"></div>
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
<!-- /Edit Membership Modal -->

<!-- Delete Membership Modal -->
<div class="modal custom-modal fade" id="delete_membership" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Membership</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-membership')}}" method="post" >
								@csrf
								@method("DELETE")
								<input type="hidden" id="delete_membershipId" name="d_membership">
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
<!-- /Delete Membership Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#membershipDbtn',function(){
            // alart("ok");
			var membership_id=$(this).val();
			$('#delete_membership').modal('show');
			$('#delete_membershipId').val(membership_id);
		});

		$(document).on('click','#editmembership',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-membership/"+eid,
				success:function(response){
					$('#cmbmembershipId').val(eid);
					$('#eTitle').val(response.membership.title);
					$('#eHeading').val(response.membership.heading);
					$('#eDetails').summernote('code', response.membership.details);
					$("#eFilephoto").html(
                        `<img src="img/${response.membership.image}" width="100" class="img-fluid img-thumbnail">`);
				}
			});
		});

	});

</script>

@endsection
