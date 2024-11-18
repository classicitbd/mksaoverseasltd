@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"><i class="fa fa-edit"></i>Counts</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Counts</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_count"><i class="fa fa-plus"></i>Add Count</a> 
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
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Clients</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Projects</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Support</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Workers</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($count as $count)
                    <tr class="odd">
                        <td>{{$count-> id}}</td>
                        <td>{{$count-> client_num}}</td>
                        <td>{{$count-> project_num}}</td>
                        <td>{{$count-> support_num}}</td>
                        <td>{{$count-> worker_num}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
                                <a class="btn btn-info" href="#" data-toggle="modal" data-target="#view_count"><i class="fas fa-eye"></i></a>&nbsp;
								<button type="button" value="{{$count->id}}" class="btn btn-primary" id="editcount" ><i class="fas fa-pencil-alt" ></i> </button>&nbsp;
                                <button type="button" value="{{$count->id}}" class="btn btn-danger" id="countDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Count Modal -->
<div id="add_count" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-edit">Add Count</i></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('count.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Clients:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="number" class="form-control" id="txtClient" name="txtClient"required>
								</div>
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Projects:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="number" class="form-control" id="txtProject" name="txtProject"required>
								</div>
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Support:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="number" class="form-control" id="txtSupport" name="txtSupport"required>
								</div>
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Workers:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="number" class="form-control" id="txtWorker" name="txtWorker"required>
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
<!-- /Add Count Modal -->

<!-- Edit Count Center Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-edit"></i>Edit Count</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('count-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<input type="hidden" value="" id="cmbCountId" name="cmbCountId" >
								<div class="col-sm-2">
									<label class="col-form-label">Clients:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="number" class="form-control" id="eClient" name="txtClient" required>
								</div>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Projects:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="number" class="form-control" id="eProject" name="txtProject" required>
								</div>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Support:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="number" class="form-control" id="eSupport" name="txtSupport">
								</div>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Workers:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="number" class="form-control" id="eWorker" name="txtWorker">
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
<!-- /Edit Count Modal -->

<!-- Delete Count Modal -->
<div class="modal custom-modal fade" id="delete_count" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Count</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-count')}}" method="post" >
								@csrf
								@method("DELETE")
								<input type="hidden" id="delete_countId" name="d_count">
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
<!-- /Delete Count Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#countDbtn',function(){
            // alart("ok");
			var count_id=$(this).val();
			$('#delete_count').modal('show');
			$('#delete_countId').val(count_id);
		});

		$(document).on('click','#editcount',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-count/"+eid,
				success:function(response){
					// console.log(response.count.brunch_id);	
					$('#cmbCountId').val(eid);		
					$('#eClient').val(response.count.client_num);
					$('#eProject').val(response.count.project_num);
					$('#eSupport').val(response.count.support_num);
					$('#eWorker').val(response.count.worker_num);

				}
			});
		});
    
	});

</script>
@endsection