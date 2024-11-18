@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Service Category</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Service Category</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#"  class="btn btn-success btn-block" data-toggle="modal" data-target="#add_category"><i class="fa fa-plus"></i>Add Category</a> 
        </div>
	</div>
	<!-- /Page Header -->
    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
					  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Sub-Menu</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Service Category</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Created Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($servicecategories as $servicecategories)
                    <tr class="odd">
                        <td>{{$servicecategories-> id}}</td>
						<td>{{$servicecategories-> m_name}}</td>
                        <td>{{$servicecategories-> sc_name}}</td>
                        <td>{{$servicecategories-> created_at}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
                                <a class="btn btn-info" href="#" data-toggle="modal" data-target="#view_servicecategories"><i class="fas fa-eye"></i></a>&nbsp;
								<button type="button" value="{{$servicecategories->id}}" class="btn btn-primary" id="editservicecategories" ><i class="fas fa-pencil-alt" ></i> </button>&nbsp;
                                <button type="button" value="{{$servicecategories->id}}" class="btn btn-danger" id="servicecategoriesDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Category Modal -->
<div id="add_category" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Category</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('servicecategories.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Sub-Menu:&nbsp;</label>
								</div>

								<div class="col-sm-9">
									<select id="txtSubMenu" class="form-control" name="txtSubMenu" required>
										<option selected><---Select Menu---></option>
										@foreach ($menus as $menu)
										<option value="{{ $menu->id }}">{{ $menu->m_name }}</option>
										@endforeach
									</select>
								</div>
							</div>


							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Category of Service:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtCategoryOfService" name="txtCategoryOfService"required>
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
<!-- /Add Category Modal -->
<!-- Edit Category Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Category</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('servicecategories-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbServicecategoriesId" name="cmbServicecategoriesId" >
								<div class="col-sm-3">
									<label class="col-form-label">Sub-Menu:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<select id="eSubmenu" class="form-control" name="txtSubMenu" required>
										<option selected><---Select Menu---></option>
										@foreach ($menus as $menu)
										<option value="{{ $menu->id }}">{{ $menu->m_name }}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Category of Service:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eServicecategories" name="txtCategoryOfService" required>
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
<!-- /Edit Service Category Modal -->

<!-- Delete Category Modal -->
<div class="modal custom-modal fade" id="delete_servicecategories" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Category</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-servicecategories')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_servicecategoriesId" name="d_servicecategories">
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

        $(document).on('click','#servicecategoriesDbtn',function(){
            // alart("ok");
			var servicecategories_id=$(this).val();
			$('#delete_servicecategories').modal('show');
			$('#delete_servicecategoriesId').val(servicecategories_id);
		});


		$(document).on('click','#editservicecategories',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-servicecategories/"+eid,
				success:function(response){
					// console.log(response.service.brunch_id);	
					$('#cmbServicecategoriesId').val(eid);
					$('#eSubmenu').val(response.servicecategories.sub_menu);		
					$('#eServicecategories').val(response.servicecategories.sc_name);
					$('#eURL').val(response.servicecategories.url);
					
				}
			});
		});
    
	});

</script>


@endsection