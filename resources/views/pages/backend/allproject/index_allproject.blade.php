@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">All Projects</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">All Projects</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_allproject"><i class="fa fa-plus"></i>Add Project</a> 
        </div>
	</div>

    	<!-- /Page Header -->
        <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
					  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
					  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Project Group</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Project Category</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Created Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($allproject as $allproject)
                    <tr class="odd">
                        <td>{{$allproject-> id}}</td>
						<td>{{$allproject-> title}}</td>
						<td>{{$allproject-> ap_group}}</td>
                        <td>{{$allproject-> ap_name}}</td>
                        <td>{{$allproject-> created_at}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
                                <a class="btn btn-info" href="#" data-toggle="modal" data-target="#view_allproject"><i class="fas fa-eye"></i></a>&nbsp;
								<button type="button" value="{{$allproject->id}}" class="btn btn-primary" id="editallproject" ><i class="fas fa-pencil-alt" ></i> </button>&nbsp;
                                <button type="button" value="{{$allproject->id}}" class="btn btn-danger" id="allprojectDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add All Project Modal -->
<div id="add_allproject" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Project</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('allproject.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Category of Project:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtCategoryOfProject" name="txtCategoryOfProject"required>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Project Group:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<select id="txtGroup" class="form-control" name="txtGroup" required>
										<option selected><------------Select Group----------------></option>
										<option value="1">Plumbing</option>
										<option value="2">Erection</option>
										<option value="3">Substation</option>
										<option value="4">Civil Work</option>
										<option value="5">Industrial Automation</option>
										<option value="6">Mechanical</option>
										<option value="7">Power Generation, Transmission & Distribution</option>
										<option value="8">Service & Support</option>
										<option value="9">Testing & Commissioning</option>
										<option value="10">Busbar Trunking System</option>
										<option value="11">Transmission Line Supervision</option>	
										<option value="12">Electrical Design</option>	
									</select>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Title:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtTitle" name="txtTitle"required>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">URL:&nbsp;</label>
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
									<input type="file" class="form-control" id="filePhoto" name="filePhoto" required>
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
<!-- /Add All Project Modal -->

<!-- Edit All Project Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Project</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('allproject-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbAllprojectId" name="cmbAllprojectId" >
								<div class="col-sm-3">
									<label class="col-form-label">Category of Project:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eAllproject" name="txtCategoryOfProject" required>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Project Group:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<select id="eGroup" class="form-control" name="txtGroup">
										<option value="1">Plumbing</option>
										<option value="2">Erection</option>
										<option value="3">Substation</option>
										<option value="4">Civil Work</option>
										<option value="5">Industrial Automation</option>
										<option value="6">Mechanical</option>
										<option value="7">Power Generation, Transmission & Distribution</option>
										<option value="8">Service & Support</option>
										<option value="9">Testing & Commissioning</option>
										<option value="10">Busbar Trunking System</option>
										<option value="11">Transmission Line Supervision</option>	
										<option value="12">Electrical Design</option>
									</select>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Title:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eTitle" name="txtTitle">
								</div>
							</div>


							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">URL:&nbsp;</label>
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
<!-- /Edit All Project Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#allprojectDbtn',function(){
            // alart("ok");
			var allproject_id=$(this).val();
			$('#delete_allproject').modal('show');
			$('#delete_allprojectId').val(allproject_id);
		});

		$(document).on('click','#editallproject',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-allproject/"+eid,
				success:function(response){
					// console.log(response.allproject.name);	
					$('#cmbAllprojectId').val(eid);			
					$('#eAllproject').val(response.allproject.ap_name);
					$('#eGroup').val(response.allproject.ap_group);
					$('#eTitle').val(response.allproject.title);
					$('#eURL').val(response.allproject.url);
					$("#eFilephoto").html(
                        `<img src="img/${response.allproject.image}" width="100" class="img-fluid img-thumbnail">`);
					
				}
			});
		});
    
	});

</script>
@endsection