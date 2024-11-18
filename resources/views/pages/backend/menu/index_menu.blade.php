@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Menu</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Menu</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#"  class="btn btn-success btn-block" data-toggle="modal" data-target="#add_menu"><i class="fa fa-plus"></i>Add Menu</a> 
        </div>
	</div>
	<!-- /Page Header -->

    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Menu</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Created Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($menu as $key=> $menu)
                    <tr class="odd">
                        <td>{{$key+1}}</td>
                        <td>{{$menu-> m_name}}</td>
                        <td>{{$menu-> created_at}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
								<button type="button" value="{{$menu->id}}" class="btn btn-primary" id="editmenu" ><i class="fas fa-pencil-alt" ></i></button>&nbsp;
                                <button type="button" value="{{$menu->id}}" class="btn btn-danger" id="menuDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Menu Modal -->
<div id="add_menu" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Menu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('menu.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-2">
									<label class="col-form-label">Serial No:&nbsp;</label>
								</div>
								
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtSerialNo" name="txtSerialNo"required>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-2">
									<label class="col-form-label">Menu:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtName" name="txtName"required>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-2">
									<label class="col-form-label">URL:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtURL" name="txtURL"required>
								</div>
							</div>
						</div>


						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2"> 
									<label class="col-form-label">Icon:&nbsp;</label>
								</div>
								<div class="col-sm-10">
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
<!-- /Add Menu Modal -->

<!-- Edit Menu Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Menu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('menu-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbMenuId" name="cmbMenuId" >
								<div class="col-sm-2">
									<label class="col-form-label">Serial No:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="eSerialNo" name="txtSerialNo"required>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-2">
									<label class="col-form-label">Menu:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="eMenu" name="txtName" required>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-2">
									<label class="col-form-label">URL:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="eURL" name="txtURL" required>
								</div>
							</div>

							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Icon:&nbsp;</label>
								</div>
								<div class="col-sm-10">
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
<!-- /Edit Menu Modal -->
<!-- Delete Menu Modal -->
<div class="modal custom-modal fade" id="delete_menu" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Menu</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-menu')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_menuId" name="d_menu">
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
<!-- /Delete Menu Modal -->
<script>
	$(document).ready(function(){

        $(document).on('click','#menuDbtn',function(){
            // alart("ok");
			var menu_id=$(this).val();
			$('#delete_menu').modal('show');
			$('#delete_menuId').val(menu_id);
		});

		$(document).on('click','#editmenu',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-menu/"+eid,
				success:function(response){
					// console.log(response.menu.brunch_id);	
					$('#cmbMenuId').val(eid);
					$('#eSerialNo').val(response.menu.serial_no);		
					$('#eMenu').val(response.menu.m_name);
					$('#eURL').val(response.menu.url);
					$('#eStatus').val(response.menu.satus);
					$('#eIcon').val(response.menu.icon);
					
				}
			});
		});
    
	});

</script>

@endsection