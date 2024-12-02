@extends('layout.backend.home')
@section('page')

    <style>
        img {
            border-radius: 50%;
        }
    </style>

    <div class="card-body">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Events</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">Event List</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- /Page Header -->
        <div class="row">
            <div class="col-auto float-right ml-auto pb-2" >
                <a href="{{ route('events.create') }}" class="btn btn-success btn-block"><i class="fa fa-plus"></i>Add Event</a>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                    <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No.</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Image</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Event Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Event Heading</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($event as $key=> $val)
                        <tr class="odd">
                            <td>{{ $key+1 }}</td>
                            <td>
                                @if(pathinfo($val->image, PATHINFO_EXTENSION) == 'pdf')
                                    <embed src="{{ asset('img/'.$val->image) }}" type="application/pdf" height="70px" width="70px" />
                                @else
                                    <img src="{{ asset('img/'.$val->image) }}" height="70px" width="70px" alt="File" />
                                @endif
                            </td>
                            <td>{{$val->title}}</td>
                            <td>{{$val->heading}}</td>
                            <td class="text-right py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('events.edit', $val->id) }}" class="btn btn-primary" style="margin-right: 5px"><i class="fas fa-pencil-alt" ></i></a>
                                    <button type="button" value="{{$val->id}}" class="ms-2 btn btn-danger" id="eventDbtn" ><i class="fas fa-trash"></i> </button>
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

    <!-- Delete Membership Modal -->
    <div class="modal custom-modal fade" id="delete_event" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header" style="text-align:center;">
                        <h3>Delete Event</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row float-right">
                            <div class="col-6">
                                <form action="{{url('delete-event')}}" method="post" >
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" id="delete_eventId" name="d_event">
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
    <!-- /Delete Event Modal -->

    <script>
        $(document).ready(function(){

            $(document).on('click','#eventDbtn',function(){
                var event_id=$(this).val();
                $('#delete_event').modal('show');
                $('#delete_eventId').val(event_id);
            });


        });

    </script>

@endsection
