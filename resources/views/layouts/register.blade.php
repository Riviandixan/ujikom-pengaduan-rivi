<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/login/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		{{-- {{dd(Illuminate\Support\Facades\Hash::make('12345'))}} --}}
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign Up</h3>
			  <form method="POST" action="{{ route('register.store') }}" class="login-form">
				@csrf
				@method('POST')
                <div class="form-group">
					<input type="text" name="name" class="form-control rounded-left" placeholder="Name" required>
				</div>
                <div class="form-group">
					<input type="number" name="nik" class="form-control rounded-left" placeholder="Nik" required>
				</div>
				<div class="form-group">
					<input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
				</div>
	            <div class="form-group d-flex">
	              <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
                <div class="form-group">
					<input type="text" name="role" class="form-control rounded-left" placeholder="Role" value="masyarakat" hidden>
				</div>
                <div class="form-group">
					<input type="number" name="phone" class="form-control rounded-left" placeholder="Telepon" required>
				</div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Register</button>
	            </div>
	          </form>
              <div class="member">
                Already a member? <a href="login">Login Now</a>
              </div>
	        </div>
				</div>
			</div>
		</div>
	</section>

    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>