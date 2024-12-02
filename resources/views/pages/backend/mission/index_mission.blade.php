@extends('layout.backend.home')
@section('page')
    <div class="card-body">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mission</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">Mission Info</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('mission/1')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="">Existing Image</label>
                                        <div>
                                            @if(isset($mission->image))
                                            <img src="{{asset('img/'.$mission->image)}}" alt="" sizes="" srcset="" height="200px" width="300px">
                                            @endif
                                        </div>

                                        <div class="pt-3">
                                            <label for="">Image</label>
                                            <input type="file" name="image">
                                        </div>
                                    </div>


                                    <div class="form-group col-12">
                                        <label for="">Existing Multiple Images</label>
                                        <div class="d-flex flex-wrap">
                                            @if(isset($mission->multi_image) && is_array(json_decode($mission->multi_image, true)))
                                                @foreach(json_decode($mission->multi_image, true) as $image)
                                                    <div class="me-2">
                                                        <img src="{{ asset('img/'.$image) }}" alt="Image" height="100px" width="150px">
                                                    </div>
                                                @endforeach
                                            @else
                                                <p>No images found.</p>
                                            @endif
                                        </div>

                                        <div class="pt-3">
                                            <label for="">Upload Images</label>
                                            <input type="file" name="multi_image[]" multiple>
                                        </div>
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Heading<span class="text-danger">*</span></label>
                                        <input type="text" name="heading" id="" class="form-control" value="{{$mission->heading ?? ''}}">
                                    </div>

                                    <div class="form-group col-6">
                                        <label>Title One<span class="text-danger">*</span></label>
                                        <input type="text" name="title_one" id="title_one" class="form-control" value="{{$mission->title_one ?? ''}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Title Two<span class="text-danger">*</span></label>
                                        <input type="text" name="title_two" id="title_two" class="form-control" value="{{$mission->title_two ?? ''}}">
                                    </div>

                                    <div class="form-group col-6">
                                        <label>Short Description<span class="text-danger">*</span></label>
                                        <textarea class="summernote" id="short_description" name="short_description">{{$mission->short_description ?? ''}}</textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Long Description<span class="text-danger">*</span></label>
                                        <textarea class="summernote" id="long_description" name="long_description">{{$mission->long_description}}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
