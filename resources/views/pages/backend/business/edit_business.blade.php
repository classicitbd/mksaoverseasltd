@extends('layout.backend.home')
@section('page')

<div class="card">
    <div class="card-body">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">What We Offer</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Our Offer</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Page Header -->
        <div class="row">
            <div class="col-auto float-right ml-auto pb-2">
                <a href="{{ route('business.index') }}" class="btn btn-success btn-block">
                    <i class="fa fa-plus"></i> Back
                </a>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Form -->
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('business.update', $business->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Business Unit Name -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Business Unit Name:&nbsp;</label>
                                </div>
                                <div class="col-sm-10">
                                    <select id="b_name" class="form-control" name="b_name" required>
                                        <option><---Select Business---></option>
                                        @foreach ($submenus as $submenu)
                                            <option value="{{ $submenu->id }}" 
                                                @if($business->b_name == $submenu->id) selected @endif>
                                                {{ $submenu->submenu_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Title -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Title:&nbsp;</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $business->title }}">
                                </div>
                            </div>
                        </div>

                        <!-- Heading -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Heading:&nbsp;</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="heading" value="{{ $business->heading }}">
                                </div>
                            </div>
                        </div>

                        <!-- URL -->
                        <div class="col-sm-12">
                            <div class="input-group mb-4">
                                <div class="col-sm-2">
                                    <label class="col-form-label">URL:&nbsp;</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="url" name="url" value="{{ $business->url }}">
                                </div>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Details:&nbsp;</label>
                                </div>
                                <div class="col-sm-10">
                                    <textarea class="summernote" id="details" name="details">{!! $business->details !!}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Other Title -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Other Title:&nbsp;</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="other_title" name="other_title" value="{{ $business->other_title }}">
                                </div>
                            </div>
                        </div>

                        <!-- Other Heading -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Other Heading:&nbsp;</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="other_heading" name="other_heading" value="{{ $business->other_heading }}">
                                </div>
                            </div>
                        </div>

                        <!-- Photo -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Photo:&nbsp;</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image" placeholder="image"><br>
                                    @if(isset($business->image))
                                        <img src="{{ asset('img/' . $business->image) }}" alt="" height="100px" width="100px">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="submit-section float-right">
                        <input class="btn btn-primary submit-btn" type="submit" name="btnUpdate" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
