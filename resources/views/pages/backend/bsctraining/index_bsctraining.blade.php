@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Bsc Training Schedule</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Bsc Training</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    
    <!-- /Page Header -->
    <div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_bsctraining"><i class="fa fa-plus"></i>Add Content</a> 
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
                    @forelse ($bsctraining as $bsctraining)	
                    <tr class="odd">
                        <td>{{$bsctraining-> id}}</td>
                        <td>{{$bsctraining-> bt_name}}</td>
                        <td>{{$bsctraining-> price}}</td>
                        <td>{{$bsctraining-> duration}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
                                <a class="btn btn-info" href="#" data-toggle="modal" data-target="#view_bsctraining"><i class="fas fa-eye"></i></a>&nbsp;
								<button type="button" value="{{$bsctraining->id}}" class="btn btn-primary" id="editbsctraining" ><i class="fas fa-pencil-alt"></i> </button>&nbsp;
                                <button type="button" value="{{$bsctraining->id}}" class="btn btn-danger" id="bsctrainingDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add BSC-Training Modal -->
<div id="add_bsctraining" class="modal custom-modal fade" role="dialog">
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
				<form action="{{route('bsctraining.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<label class="col-form-label">Traing Schedule Name:&nbsp;</label>
								<input type="text" class="form-control" id="txtBscTraining" name="txtBscTraining"required>
							</div>
						</div>

                        <!-- /.card-header -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Traing Schedule Detail:</label>
								<textarea name="txtBscTrainingDetails" id="txtBscTrainingDetails" class="summernote"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<label class="col-form-label">Price:&nbsp;</label>
								<input type="text" class="form-control" id="txtPrice" name="txtPrice"required>
							</div>
						</div>


                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<label class="col-form-label">Duration:&nbsp;</label>
								<input type="text" class="form-control" id="txtDuration" name="txtDuration"required>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="input-group mb-5">
								<label class="col-form-label">Icon:&nbsp;</label>
								<input type="text" class="form-control" id="txtIcon" name="txtIcon"required>
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
<!-- /Add BSC-Training Modal -->

<!-- Edit BSC-Training Modal -->
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
				<form action="{{url('bsctraining-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<input type="hidden" value="" id="cmbBsctrainingId" name="cmbBsctrainingId" >
								<label class="col-form-label">Traing Schedule Name:&nbsp;</label>
								<input type="text" class="form-control" id="eBscTraining" name="txtBscTraining" required>
							</div>
						</div>
							
					    <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Traing Schedule Detail:</label>
								<textarea name="txtBscTrainingDetails" id="eBscTrainingDetails" class="summernote"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<label class="col-form-label">Price:&nbsp;</label>
								<input type="text" class="form-control" id="ePrice" name="txtPrice" required>
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<label class="col-form-label">Duration:&nbsp;</label>
								<input type="text" class="form-control" id="eDuration" name="txtDuration" required>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<label class="col-form-label">Icon:&nbsp;</label>
								<input type="text" class="form-control" id="eIcon" name="txtIcon" required>
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
<!-- /Edit BSC-Training Modal -->

<!-- Delete BSC-Training Modal -->
<div class="modal custom-modal fade" id="delete_bsctraining" role="dialog">
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
							<form action="{{url('delete-bsctraining')}}" method="post" >
								@csrf
								@method("DELETE")
								<input type="hidden" id="delete_bsctrainingId" name="d_bsctraining">
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
<!-- /Delete BSC-Training Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#bsctrainingDbtn',function(){
            // alart("ok");
			var bsctraining_id=$(this).val();
			$('#delete_bsctraining').modal('show');
			$('#delete_bsctrainingId').val(bsctraining_id);
		});

		$(document).on('click','#editbsctraining',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-bsctraining/"+eid,
				success:function(response){
					// console.log(response.bsctraining.brunch_id);	
					$('#cmbBsctrainingId').val(eid);		
					$('#eBscTraining').val(response.bsctraining.bt_name);
					$('#ePrice').val(response.bsctraining.price);
					$('#eDuration').val(response.bsctraining.duration);
					$('#textarea').html(response.bsctraining.bt_details);
					$('#eBscTrainingDetails').summernote('code', response.bsctraining.bt_details);
					$('#eIcon').val(response.bsctraining.icon);
				}
			});
		});
    
	});

</script>

@endsection