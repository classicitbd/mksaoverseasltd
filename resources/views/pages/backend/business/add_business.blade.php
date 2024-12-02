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
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Our Offer</li>
                        </ol>
                    </div>
                </div>
            </div>
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

        <!-- Form Section -->
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('business.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Business Unit Name -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Business Unit Name:</label>
                                </div>
                                <div class="col-sm-10">
                                    <select id="txtBusinessUnitName" class="form-control" name="txtBusinessUnitName" required>
                                        <option selected><---Select Business---></option>
                                        @foreach ($submenus as $submenu)
                                            <option value="{{ $submenu->id }}">{{ $submenu->submenu_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Title -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Title:</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtTitle" name="txtTitle" required>
                                </div>
                            </div>
                        </div>

                        <!-- Heading -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Heading:</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtHeading" name="txtHeading" required>
                                </div>
                            </div>
                        </div>

                        <!-- URL -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">URL:</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtURL" name="txtURL" required>
                                </div>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Details:</label>
                                </div>
                                <div class="col-sm-10">
                                    <textarea name="txtDetails" id="txtDetails" class="summernote"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Other Title -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Other Title:</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtOtherTitle" name="txtOtherTitle" required>
                                </div>
                            </div>
                        </div>

                        <!-- Other Heading -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Other Heading:</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtOtherHeading" name="txtOtherHeading" required>
                                </div>
                            </div>
                        </div>

                        <!-- Photo -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Photo:</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="filePhoto" name="filePhoto" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="submit-section float-right">
                        <input class="btn btn-primary submit-btn" type="submit" name="btnCreate" style="width: 80px;" value="Add">
                    </div>
                </form>
            </div>
        </div>
        <!-- /Form Section -->
    </div>
</div>

@endsection
