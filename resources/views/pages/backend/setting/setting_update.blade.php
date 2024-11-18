@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Site Settings</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Site Settings</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<div class="section-body">
        <form method="post" action="{{ route('update.settings') }}" enctype="multipart/form-data">
	    	@csrf
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Application Settings</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <label for="site_name" class="col-form-label" style="font-weight: bold;">Site Name :</label>
                                            <input type="hidden" name="types[]" value="site_name">
                                            <input class="form-control" type="text" name="site_name" id="site_name" placeholder="Write Site name" value="{{ get_setting('site_name')->value ?? 'Null' }}">
                                        </div>

                                        <div class="col-sm-6 mb-3">
                                            <label for="business_name" class="col-form-label" style="font-weight: bold;">Business Name :</label>
                                            <input type="hidden" name="types[]" value="business_name">
                                            <input class="form-control" type="text" name="business_name" id="business_name" placeholder="Write Site name" value="{{ get_setting('business_name')->value ?? 'Null' }}">
                                        </div>

                                        <div class="col-sm-6 mb-3">
                                            <label for="phone" class="col-form-label" style="font-weight: bold;">Phone :</label>
                                            <input type="hidden" name="types[]" value="phone">
                                            <input class="form-control" type="text" name="phone" id="phone" placeholder="Write phone" value="{{ get_setting('phone')->value ?? 'Null' }}">
                                        </div>

                                        <div class="col-sm-6 mb-3">
                                            <label for="email" class="col-form-label" style="font-weight: bold;">Email :</label>
                                            <input type="hidden" name="types[]" value="email">
                                            <input class="form-control" type="text" name="email" id="email" placeholder="Write email" value="{{ get_setting('email')->value ?? 'Null' }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <label for="business_hours" class="col-form-label" style="font-weight: bold;">Business Hours</label>
                                            <input type="hidden" name="types[]" value="business_hours">
                                            <input class="form-control" type="text" name="business_hours" placeholder="business hours" value="{{ get_setting('business_hours')->value ?? 'Null' }}">
                                        </div>

                                        <div class="col-sm-6 mb-3">
                                            <label for="copy_right" class="col-form-label" style="font-weight: bold;">Copy Right</label>
                                            <input type="hidden" name="types[]" value="copy_right">
                                            <input class="form-control" type="text" name="copy_right" placeholder="copy right" value="{{ get_setting('copy_right')->value ?? 'Null' }}">
                                        </div>

                                        <div class="col-sm-12 mb-3">
                                            <label for="business_address" class="col-form-label" style="font-weight: bold;">Address</label>
                                            <input type="hidden" name="types[]" value="business_address">
                                            <textarea class="form-control" id="business_address" cols="2" name="business_address" placeholder="Write address here">{{ get_setting('business_address')->value ?? 'Null' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h3>Social Link Settings</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <label for="facebook_url" class="col-form-label" style="font-weight: bold;">Facebook link :</label>
                                            <input type="hidden" name="types[]" value="facebook_url">
                                            <input class="form-control" type="text" name="facebook_url" id="facebook_url" placeholder="Write facebook url" value="{{ get_setting('facebook_url')->value ?? 'Null'}}">
                                        </div>

                                        <div class="col-sm-6 mb-3">
                                            <label for="twitter_url" class="col-form-label" style="font-weight: bold;">Twitter link :</label>
                                            <input type="hidden" name="types[]" value="twitter_url">
                                            <input class="form-control" type="text" name="twitter_url" id="twitter_url" placeholder="Write twitter url" value="{{ get_setting('twitter_url')->value ?? 'Null' }}">
                                        </div>

                                        <div class="col-sm-6 mb-3">
                                            <label for="linkedin_url" class="col-form-label" style="font-weight: bold;">Linkedin Link :</label>
                                            <input type="hidden" name="types[]" value="linkedin_url">
                                            <input class="form-control" type="text" name="linkedin_url" id="linkedin_url" placeholder="Write linkedin url" value="{{ get_setting('linkedin_url')->value ?? 'Null' }}">
                                        </div>

                                        <div class="col-sm-6 mb-3">
                                            <label for="youtube_url" class="col-form-label" style="font-weight: bold;">Youtube Link :</label>
                                            <input type="hidden" name="types[]" value="youtube_url">
                                            <input class="form-control" type="text" name="youtube_url" id="youtube_url" placeholder="Write youtube url" value="{{ get_setting('youtube_url')->value ?? 'Null' }}">
                                        </div>

                                        <div class="col-sm-6 mb-3">
                                            <label for="instagram_url" class="col-form-label" style="font-weight: bold;">Instagram Link :</label>
                                            <input type="hidden" name="types[]" value="instagram_url">
                                            <input class="form-control" type="text" name="instagram_url" id="instagram_url" placeholder="Write instagram url" value="{{ get_setting('instagram_url')->value ?? 'Null' }}">
                                        </div>

                                        <div class="col-sm-6 mb-3">
                                            <label for="pinterest_url" class="col-form-label" style="font-weight: bold;">Pinterest Link :</label>
                                            <input type="hidden" name="types[]" value="pinterest_url">
                                            <input class="form-control" type="text" name="pinterest_url" id="pinterest_url" placeholder="Write pinterest url" value="{{ get_setting('pinterest_url')->value ?? 'Null' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header mb-4">
                                    <h3>Logo Settings</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 mb-3">
                                            <div class="mb-2">
                                                <img id="showFavicon" class="rounded avatar-lg" src="{{ asset(get_setting('site_favicon')->value ?? 'Null') }}" alt="No Image" width="100px" height="50px;">
                                            </div>
                                            <div class="mb-2">
                                                <label for="site_favicon" class="col-form-label" style="font-weight: bold;">Site Favicon</label>

                                                <input name="site_favicon" class="form-control" type="file" id="site_favicon">
                                                @error('site_favicon')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12 mb-3">
                                            <div class="mb-2">
                                                <img id="showImage" class="rounded avatar-lg" src="{{ asset(get_setting('site_logo')->value ?? 'Null') }}" alt="No Image" width="180px" height="100px;">
                                            </div>
                                            <div class="mb-2">
                                                <label for="image" class="col-form-label" style="font-weight: bold;">Site Logo</label>

                                                <input name="site_logo" class="form-control" type="file" id="image">
                                                @error('site_logo')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12 mb-3">
                                            <div class="mb-2">
                                                <img id="showFooter" class="rounded avatar-lg" src="{{ asset(get_setting('site_footer_logo')->value ?? 'Null') }}" alt="No Image" width="180px" height="100px;">
                                            </div>
                                            <div class="mb-2">
                                                <label for="site_footer_logo" class="col-form-label" style="font-weight: bold;">Site Footer Logo</label>

                                                <input name="site_footer_logo" class="form-control" type="file" id="site_footer_logo">
                                                @error('site_footer_logo')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card //-->
                </div>
            </div>

            <div class="row mb-4 justify-content-sm-end">
				<div class="col-lg-3 col-md-4 col-sm-5 col-6">
					<input type="submit" class="btn btn-primary" value="Update">
				</div>
			</div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#site_favicon').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showFavicon').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

<!--Site footer logo Show -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#site_footer_logo').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showFooter').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection

