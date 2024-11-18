@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Site Logo</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Logo</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_frontlogo"><i class="fa fa-plus"></i>Add Logo</a> 
        </div>
	</div>
	<!-- /Page Header -->

    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Logo</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Created Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($frontlogo as $frontlogo)
                    <tr class="odd">
                        <td>{{$frontlogo-> id}}</td>
                        <td>
						<img src="{{asset('public/img/'.$frontlogo->logo_img)}}" height="70px" width="70px" alt="">
						</td>
                        <td>{{$frontlogo-> created_at}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
                                <!--<a class="btn btn-info" href="#" data-toggle="modal" data-target="#view_frontlogo"><i class="fas fa-eye"></i></a>&nbsp;-->
								<button type="button" value="{{$frontlogo->id}}" class="btn btn-primary" id="editfrontlogo" ><i class="fas fa-pencil-alt" ></i> </button>&nbsp;
                                <button type="button" value="{{$frontlogo->id}}" class="btn btn-danger" id="frontlogoDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- Add Logo Modal -->
<div id="add_frontlogo" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-edit">Add Logo</i></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('frontlogo.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
                        <div class="col-sm-6">
							<div class="input-group mb-5">
								<label class="col-form-label">Logo:&nbsp;</label>
								<input type="file" class="form-control" id="fileLogo" name="fileLogo"required>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="input-group mb-5">
								<img src="{{url('backend/assets/photo/av.jpg')}}" alt="" sizes="" srcset="">
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
<!-- /Add Logo Modal -->

<!-- Edit Logo Center Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Logo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('frontlogo-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-3">
								<input type="hidden" value="" id="cmbFrontlogoId" name="cmbFrontlogoId" >
								<label class="col-form-label">Logo:&nbsp;</label>
								<input type="file" class="form-control" name="fileLogo"  placeholder="logo" required><br>	
							</div>
							<div class="input-group mb-5  pl-5" id="eFilelogo"></div>
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
<!-- /Edit Logofrontlogo Center Modal -->

<!-- Delete Logo Modal -->
<div class="modal custom-modal fade" id="delete_frontlogo" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Logo</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-frontlogo')}}" method="post" >
								@csrf
								@method("DELETE")
								<input type="hidden" id="delete_frontlogoId" name="d_frontlogo">
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

        $(document).on('click','#frontlogoDbtn',function(){
            // alart("ok");
			var frontlogo_id=$(this).val();
			$('#delete_frontlogo').modal('show');
			$('#delete_frontlogoId').val(frontlogo_id);
		});

		$(document).on('click','#editfrontlogo',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-frontlogo/"+eid,
				success:function(response){
					// console.log(response.frontlogo.brunch_id);	
					$('#cmbFrontlogoId').val(eid);		
					$("#eFilelogo").html(
                        `<img src="public/img/${response.frontlogo.logo_img}" width="100" class="img-fluid img-thumbnail">`);
				}
			});
		});
    
	});

</script>

@endsection