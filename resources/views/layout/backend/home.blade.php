
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MKsaoverseas LTD</title>
		<link rel="shortcut icon" type="image/x-icon" href="{{url('frontend/images/favicon.png')}}" />

		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{url('backend/plugins/fontawesome-free/css/all.min.css')}}">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Tempusdominus Bootstrap 4 -->
		<link rel="stylesheet" href="{{url('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
		<!-- iCheck -->
		<link rel="stylesheet" href="{{url('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

		<!-- Theme style -->
		<link rel="stylesheet" href="{{url('backend/dist/css/adminlte.min.css')}}">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="{{url('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="{{url('backend/plugins/daterangepicker/daterangepicker.css')}}">
		<!-- summernote -->
		<link rel="stylesheet" href="{{url('backend/plugins/summernote/summernote-bs4.min.css')}}">

		<!-- DataTables -->
		<link rel="stylesheet" href="{{url('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
		<link rel="stylesheet" href="{{url('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
		<link rel="stylesheet" href="{{url('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

		<!-- Theme style -->
		<link rel="stylesheet" href="{{url('backend/dist/css/adminlte.min.css')}}">
		<!-- summernote -->
		<link rel="stylesheet" href="{{url('backend/plugins/summernote/summernote-bs4.min.css')}}">
		<!-- fullCalendar -->
		<link rel="stylesheet" href="{{url('backend/plugins/fullcalendar/main.css')}}">

		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/r-2.2.9/datatables.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

	</head>
    <body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<!-- Navbar -->
			@include("layout.backend.navbar")
			<!-- /.navbar -->

			<!-- Main Sidebar Container -->
			@include("layout.backend.mainsidebar")

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->

				<!-- Main content -->
				<section class="content">
					@yield('page')
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<!-- Footer -->
            @include("layout.backend.footer")
			<!-- /Footer -->
        </div>
		<!-- /Main Wrapper -->
		<!-- jQuery -->
		<script src="{{url('backend/plugins/jquery/jquery.min.js')}}"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="{{url('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		$.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="{{url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- ChartJS -->
		<script src="{{url('backend/plugins/chart.js/Chart.min.js')}}"></script>
		<!-- JQVMap -->
		<script src="{{url('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
		<script src="{{url('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
		<!-- jQuery Knob Chart -->
		<script src="{{url('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
		<!-- daterangepicker -->
		<script src="{{url('backend/plugins/moment/moment.min.js')}}"></script>
		<script src="{{url('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="{{url('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
		<!-- Summernote -->
		<script src="{{url('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
		<!-- overlayScrollbars -->
		<script src="{{url('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
		<!-- AdminLTE App -->
		<script src="{{url('backend/dist/js/adminlte.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        @if (Session::has('success'))
            <script>
                toastr.options = {
                    'progressBar': true,
                    'closeButton': true,
                    'timeout': 120000, // Adjust the timeout as needed
                };
                toastr.success("{{ Session::get('success') }}");
            </script>
        @elseif (Session::has('error'))
            <script>
                toastr.options = {
                    'progressBar': true,
                    'closeButton': true,
                    'timeout': 120000, // Adjust the timeout as needed
                };
                toastr.error("{{ Session::get('error') }}", 'Error!');
            </script>
        @endif

		<!-- DataTables  & Plugins -->
		<script src="{{url('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{url('backend/plugins/jszip/jszip.min.js')}}"></script>
		<script src="{{url('backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
		<script src="{{url('backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
		<script src="{{url('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

		<!--jquery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" integrity="sha512-cJMgI2OtiquRH4L9u+WQW+mz828vmdp9ljOcm/vKTQ7+ydQUktrPVewlykMgozPP+NUBbHdeifE6iJ6UVjNw5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		@yield('scripts')
<script>
  $(function () {

	$(document).ready(function() {
  		$('.summernote').summernote();
	});

    // Summernote
    $('#summernote').summernote()

  })

	$(function () {
			$("#example1").DataTable({
			"responsive": true, "lengthChange": false, "autoWidth": false,
			"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
			}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
			$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>

<!-- sweetalert js-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
    $(function(){
        $(document).on('click','#delete',function(e){
            e.preventDefault();
            var link = $(this).attr("href");

            Swal.fire({
                title: 'Are you sure?',
                text: "Delete This Data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
        })

        });
    });
</script>
</body>
</html>
