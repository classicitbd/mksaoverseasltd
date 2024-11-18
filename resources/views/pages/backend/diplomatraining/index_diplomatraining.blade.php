@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Diploma Training Schedule</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Diploma Training</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    <!-- /Page Header -->
    <div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_diplomatraining"><i class="fa fa-plus"></i>Add Content</a> 
        </div>
	</div>
	<!-- /Page Header -->
    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Training Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Price</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Duration</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($diplomatraining as $diplomatraining)	
                    <tr class="odd">
                        <td>{{$diplomatraining-> id}}</td>
                        <td>{{$diplomatraining-> dt_name}}</td>
                        <td>{{$diplomatraining-> price}}</td>
                        <td>{{$diplomatraining-> duration}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
                                <a class="btn btn-info" href="#" data-toggle="modal" data-target="#view_diplomatraining"><i class="fas fa-eye"></i></a>&nbsp;
								<button type="button" value="{{$diplomatraining->id}}" class="btn btn-primary" id="editdiplomatraining" ><i class="fas fa-pencil-alt"></i> </button>&nbsp;
                                <button type="button" value="{{$diplomatraining->id}}" class="btn btn-danger" id="diplomatrainingDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Diploma-Training Modal -->
<div id="add_diplomatraining" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-edit">Add Content</i></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('diplomatraining.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Traing Schedule Name:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtDiplomaTraining" name="txtDiplomaTraining"required>
								</div>
							</div>
						</div>

                        <!-- /.card-header -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Traing Schedule Detail:</label>
								</div>
								<div class="col-sm-9">
									<textarea name="txtDiplomaTrainingDetails" id="txtDiplomaTrainingDetails" class="summernote"></textarea>
                            	</div>
                            </div>
                        </div>


                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
								<label class="col-form-label">Price:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtPrice" name="txtPrice"required>
								</div>
							</div>
						</div>


                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Duration:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtDuration" name="txtDuration"required>
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
<!-- /Add Diploma-Training Modal -->
<!-- Edit Diploma-Training Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Schedule</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('diplomatraining-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<input type="hidden" value="" id="cmbDiplomatrainingId" name="cmbDiplomatrainingId" >
								<div class="col-sm-3">
									<label class="col-form-label">Traing Schedule Name:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eDiplomaTraining" name="txtDiplomaTraining" required>
								</div>
							</div>
						</div>
							
						<div class="col-sm-12">
                            <div class="input-group mb-5">
								<div class="col-sm-3">
								`<label class="col-form-label">Traing Schedule Detail:&nbsp;</label>
								</div>
                                <div class="col-sm-9">
									<textarea class="summernote" id="eDiplomaTrainingDetails" name="txtDiplomaTrainingDetails"></textarea>
                           		 </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Price:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="ePrice" name="txtPrice" required>
								</div>
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Duration:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eDuration" name="txtDuration" required>
								</div>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Icon:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eIcon" name="txtIcon" required>
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
<!-- /Edit Diploma-Training Modal -->

<!-- Delete Diploma-Training Modal -->
<div class="modal custom-modal fade" id="delete_diplomatraining" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Content</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-diplomatraining')}}" method="post" >
								@csrf
								@method("DELETE")
								<input type="hidden" id="delete_diplomatrainingId" name="d_diplomatraining">
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
<!-- /Delete Diploma-Training Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#diplomatrainingDbtn',function(){
            // alart("ok");
			var diplomatraining_id=$(this).val();
			$('#delete_diplomatraining').modal('show');
			$('#delete_diplomatrainingId').val(diplomatraining_id);
		});

		$(document).on('click','#editdiplomatraining',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-diplomatraining/"+eid,
				success:function(response){
					// console.log(response.diplomatraining.brunch_id);	
					$('#cmbDiplomatrainingId').val(eid);		
					$('#eDiplomaTraining').val(response.diplomatraining.dt_name);
					$('#ePrice').val(response.diplomatraining.price);
					$('#eDuration').val(response.diplomatraining.duration);
					$('#eDiplomaTrainingDetails').summernote('code', response.diplomatraining.dt_details);
					$('#eIcon').val(response.diplomatraining.icon);
				}
			});
		});
    
	});

</script>

@endsection