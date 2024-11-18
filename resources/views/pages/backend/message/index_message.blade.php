@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Message</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Message</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Email</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($message as $message)
                    <tr class="odd">
                        <td>{{$message-> id}}</td>
                        <td>{{$message-> name}}</td>
                        <td>{{$message-> email}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
								<button type="button" value="{{$message->id}}" class="btn btn-info" id="messageshBtn" ><i class="fas fa-eye" ></i> </button>&nbsp;
                                <!-- <a class="btn btn-info" href="#" data-toggle="modal" data-target="#view_message"><i class="fas fa-eye"></i></a>&nbsp; -->
                                <button type="button" value="{{$message->id}}" class="btn btn-danger" id="messageDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- show Message Modal -->
<div id="show___message" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Show Employee Details</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group mb-5">
							<label class="col-form-label">Name:&nbsp;</label>
							<div class="" id="ShName"></div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group mb-5">
							<label class="col-form-label">Email:&nbsp;</label>
							<div class="" id="ShEmail"></div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group mb-5">
							<label class="col-form-label">Message:&nbsp;</label>
							<div class="" id="ShMessage"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /show Message Modal -->

<!-- Delete Message Modal -->
<div class="modal custom-modal fade" id="delete_message" role="dialog">
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
							<form action="{{url('delete-message')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_messageId" name="d_message">
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
<!-- /Delete Message Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#messageDbtn',function(){
            // alart("ok");
			var message_id=$(this).val();
			$('#delete_message').modal('show');
			$('#delete_messageId').val(message_id);
		});



		$(document).on('click','#messageshBtn',function(){
			//  alert("ok");

			var messagesh_id=$(this).val();
			// alert(messagesh_id);

			$('#show___message').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-message/"+messagesh_id,
				success:function(response){
					console.log(response);
					// let employee=JSON.parse(response);
					$('#cmbmessageSHId').html(messagesh_id);
					$('#ShName').html(response.message.name);
					$('#ShEmail').html(response.message.email);
					$('#ShMessage').html(response.message.message);

				}
			});
		});
    
	});

</script>
@endsection