@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">All Machineries</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">All Machineries</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
  <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_allmachine"><i class="fa fa-plus"></i>Add Machineries</a> 
        </div>
	</div>
	<!-- /Page Header -->
    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SL</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Machine Image</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Machine Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($allmachine as $allmachine)
                    <tr class="odd">
                        <td>{{$allmachine-> id}}</td>
                        <td><img src="{{asset('public/img/'.$allmachine->image)}}" height="110px" width="150px" alt=""></td>
                        <td>{{$allmachine-> am_name}}</td>
                        <td>{{$allmachine-> title}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
								<button type="button" value="{{$allmachine->id}}" class="btn btn-primary" id="editallmachine" ><i class="fas fa-pencil-alt" ></i> </button>&nbsp;
                                <button type="button" value="{{$allmachine->id}}" class="btn btn-danger" id="allmachineDbtn" ><i class="fas fa-trash"></i> </button>
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


<!-- Add All Machine Modal -->
<div id="add_allmachine" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Machine</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('all-machineries.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Machine Name:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtCategoryOfMachine" name="txtCategoryOfMachine">
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Machine Group:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<select id="txtGroup" class="form-control" name="txtGroup" required>
										<option selected><------------Select Group----------------></option>
										<option value="1">Printing Machineries</option>
									</select>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Title:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtTitle" name="txtTitle"required>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">URL:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtURL" name="txtURL"required>
								</div>
							</div>

							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Photo:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="file" class="form-control" id="filePhoto" name="filePhoto">
								</div>
							</div>
						</div>

					</div>

					<div class="submit-section float-right">
						<input class="btn btn-primary submit-btn" style="width:80px;" type="submit" name="btnCreate" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add All Machine Modal -->

<!-- Edit All Machine Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Machine</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('all-machineries-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbAllmachineId" name="cmbAllmachineId" >
								<div class="col-sm-3">
									<label class="col-form-label">Machine Name:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eAllMachine" name="txtCategoryOfMachine">
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Machine Group:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<select id="eGroup" class="form-control" name="txtGroup">
										<option value="1">Printing Machineries</option>
									</select>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Title:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eTitle" name="txtTitle">
								</div>
							</div>


							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">URL:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eURL" name="txtURL">
								</div>
							</div>

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
<!-- /Edit All Machine Modal -->

<!-- Delete All Machine Modal -->
<div class="modal custom-modal fade" id="delete_allmachine" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Machineries</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-all-machineries')}}" method="post" >
								@csrf
								@method("DELETE")
								<input type="hidden" id="delete_allmachineId" name="d_allmachine">
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
<!-- /Delete All Machine Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#allmachineDbtn',function(){
            // alart("ok");
			var allmachine_id=$(this).val();
			$('#delete_allmachine').modal('show');
			$('#delete_allmachineId').val(allmachine_id);
		});

		$(document).on('click','#editallmachine',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-all-machineries/"+eid,
				success:function(response){
					// console.log(response.allmachine.name);	
					$('#cmbAllmachineId').val(eid);			
					$('#eAllMachine').val(response.allmachine.am_name);
					$('#eGroup').val(response.allmachine.am_group);
					$('#eTitle').val(response.allmachine.title);
					$('#eURL').val(response.allmachine.url);
					$("#eFilephoto").html(
                        `<img src="public/img/${response.allmachine.image}" width="100" class="img-fluid img-thumbnail">`);
					
				}
			});
		});
    
	});

</script>
@endsection