<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('public/assets/admin/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('public/assets/admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('public/assets/admin/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('public/assets/admin/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('public/assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/admin/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('public/assets/admin/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/admin/css/icons.css') }}" rel="stylesheet">
	<title>Admin Register</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-4">
									<div class="mb-3 text-center">
										<!-- <img src="assets/images/logo-icon.png" width="60" alt="" /> -->
										<h3 class="text-primary">Pexpic</h3>
									</div>
									<l class="text-center mb-4">
										<h5 class="">Create An Account</h5>
										<p class="mb-0">Please fill the below details to create your account</p>
									</div>
									<div class="form-body">
										<form class="row g-3" action="{{ route('admin.register') }}" method="POST">
											@csrf
											<div class="col-12">
												<label for="inputName" class="form-label">Name</label>
												<input type="text" class="form-control border {{ $errors->has('input_name') ? 'border-danger' : '' }}" id="inputName" name="input_name" placeholder="Enter Your Name" value="{{ old('input_name') }}">
												@error('input_name')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control border {{ $errors->has('input_email') ? 'border-danger' : '' }}" id="inputEmailAddress" name="input_email" placeholder="example@gmail.com" value="{{ old('input_email') }}">
												@error('input_email')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0 border {{ $errors->has('password') ? 'border-danger' : '' }}" id="inputChoosePassword" name="password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
												@error('password')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Sign up</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Already have an account? <a href="{{ route('admin.login') }}">Sign in here</a></p>
												</div>
											</div>
										</form>
									</div>
									

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('public/assets/admin/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('public/assets/admin/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/assets/admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('public/assets/admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('public/assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{ asset('public/assets/admin/js/app.js') }}"></script>
</body>


</html>