@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Submenu</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Submenu</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#"  class="btn btn-success btn-block" data-toggle="modal" data-target="#add_submenu"><i class="fa fa-plus"></i>Add Submenu</a> 
        </div>
	</div>
	<!-- /Page Header -->
    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Menu Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Submenu Name</th>
                      <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Icon</th> -->
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($submenu as $submenu)
                    <tr class="odd">
                        <td>{{$submenu-> id}}</td>
                        <td>{{$submenu-> m_name}}</td>
                        <td>{{$submenu-> submenu_name}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
                                <a class="btn btn-info" href="#" data-toggle="modal" data-target="#view_submenu"><i class="fas fa-eye"></i></a>&nbsp;
								<button type="button" value="{{$submenu->id}}" class="btn btn-primary" id="editsubmenu" ><i class="fas fa-pencil-alt" ></i></button>&nbsp;
                                <button type="button" value="{{$submenu->id}}" class="btn btn-danger" id="submenuDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Submenu Modal -->
<div id="add_submenu" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Submenu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('submenu.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Menu Name:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<select id="txtMenuId" class="form-control" name="txtMenuId" required>
										<option selected><---Select Menu---></option>
										@foreach ($menus as $menu)
										<option value="{{ $menu->id }}">{{ $menu->m_name }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Submenu Name:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtSubmenuName" name="txtSubmenuName"required>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">URL:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtURL" name="txtURL"required>
								</div>
							</div>
						</div>


						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Icon:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="file" class="form-control" id="fileIcon" name="fileIcon">
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<label class="container">Status
								<input type="checkbox" checked="checked">
								<span class="checkmark"></span>
							</label>
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
<!-- /Add Submenu Modal -->
<!-- Edit Submenu Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Submenu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('submenu-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbSubmenuId" name="cmbSubmenuId" >
								<div class="col-sm-3">
									<label class="col-form-label">Menu Name:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<select id="eMenuId" class="form-control" name="txtMenuId" required>
										<option ><---Select Menu---></option>
										@foreach ($menus as $menu)
										<option value="{{ $menu->id }}">{{ $menu->m_name }}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Submenu Name:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eSubmenuName" name="txtSubmenuName" required>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">URL:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eURL" name="txtURL" required>
								</div>
							</div>

							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Icon:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="file" class="form-control" id="eIcon" name="fileIcon">
								</div>
							</div>

							<div class="input-group mb-5">
								<label class="container">Status
									<input type="checkbox" id="eStatus" checked="checked">
									<span class="checkmark"></span>
								</label>
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
<!-- /Edit Submenu Modal -->
<!-- Delete Menu Modal -->
<div class="modal custom-modal fade" id="delete_submenu" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Submenu</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-submenu')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_submenuId" name="d_submenu">
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
<!-- /Delete Submenu Modal -->
<script>
	$(document).ready(function(){

        $(document).on('click','#submenuDbtn',function(){
            // alart("ok");
			var submenu_id=$(this).val();
			$('#delete_submenu').modal('show');
			$('#delete_submenuId').val(submenu_id);
		});

		$(document).on('click','#editsubmenu',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-submenu/"+eid,
				success:function(response){
					// console.log(response.submenu.brunch_id);	
					$('#cmbSubmenuId').val(eid);
					$('#eMenuId').val(response.submenu.menu_id);		
					$('#eSubmenuName').val(response.submenu.submenu_name);
					$('#eURL').val(response.submenu.submenu_url);
					$('#eStatus').val(response.submenu.satus);
					$('#eIcon').val(response.submenu.icon);
					
				}
			});
		});
    
	});

</script>
@endsection