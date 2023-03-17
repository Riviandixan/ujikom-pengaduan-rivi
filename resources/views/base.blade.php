<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
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
                        <h3 class="text-center mb-4">Sign In</h3>
                        <form method="POST" action="{{ route('login') }}" class="login-form">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <input type="text" name="username" class="form-control rounded-left"
                                    placeholder="Username" required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" name="password" class="form-control rounded-left"
                                    placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="form-control btn btn-primary rounded submit px-3">Login</button>
                            </div>
                        </form>
                        <div class="member">
                            Not a member? <a href="register">Register Now</a>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      @if (Session::has('success'))
          var msg = "{{ session('success') }}";
          Swal.fire(
              'Success!',
              msg,
              'success'
          )
        @endif
        @if (Session::has('error'))
          var msg = "{{ session('error') }}";
          Swal.fire(
              'Error!',
              msg,
              'error'
          )
        @endif
    </script>

</body>

</html>


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

{{--  --}}
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">DASHBOARD
                    <br><p class="title-dashboard">PENGADUAN MASYARAKAT</p>
                </h3>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card border-primary">
            <div class="card-body">
                <div class="media">
                    <div class="avatar bg-light-primary mr-2">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                              </svg>
                        </div>
                    </div>
                    <div class="media-body my-auto">
                        <h4 class="font-weight-bold mb-0">{{ $petugas }}</h4>
                        <p class="card-text font-small-3 mb-0">Petugas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
        <div class="card border-primary">
            <div class="card-body">
                <div class="media">
                    <div class="avatar bg-light-info mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                          </svg>
                    </div>
                    <div class="media-body my-auto">
                        <h4 class="font-weight-border mb-0">{{ $masyarakat }}</h4>
                        <p class="card-text font-small-3 mb-0">Masyarakat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
        <div class="card border-success">
            <div class="card-body">
                <div class="media">
                    <div class="avatar bg-light-info mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path
                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                    </div>
                    <div class="media-body my-auto">
                        <h4 class="font-weight-border mb-0">{{ $selesai }}</h4>
                        <p class="card-text font-small-3 mb-0">Pengaduan Success</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card border-danger">
            <div class="card-body">
                <div class="media">
                    <div class="avatar bg-light-danger mr-2">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                              </svg>
                        </div>
                    </div>
                    <div class="media-body my-auto">
                        <h4 class="font-weight-bold mb-0">{{ $proses }}</h4>
                        <p class="card-text font-small-3 mb-0">Pengaduan Proses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- laporan id--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <style>
        img{
            height: 100px;
        }
        hr.solid{
            border-top: 2px solid #3B82F6;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="title text-center mb-5">
            <h2>Layanan Pengaduan Masyarakat Online</h2>
        </div>
        <hr class="solid">
    </div>
    <div>
        <h6>Laporan Pengaduan</h6>
        <h6>{{ $pengaduan->created_at->format('l, d F Y') }}</h6>
    </div>
    <hr class="solid">

    <div class="mt-3 mb-3">
        <h6>Nama : {{ $pengaduan->users->name }}</h6>
        <h6>Nik : {{ $pengaduan->user_nik }}</h6>
        <h6>No. Telepon : {{ $pengaduan->users->phone }}</h6>
    </div>

    <table class="table table-bordered">
        <thead class="thead">
            <tr>
                <th class="scope">Laporan Pengaduan</th>
                <th class="scope">Status</th>
            </tr>
        </thead>
        <tbody>
            <td>{{ $pengaduan->isi_laporan }}</td>
            <td>{{ $pengaduan->status }}</td>
        </tbody>
    </table>
</body>
</html>


{{-- laporan --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .thead{
            background-color: #3B82F6;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="title text-center mb-5">
            <h2>Laporan Layanan Pengaduan Online</h2>
        </div>
        <table class="table table-bordered">
            <thead class="thead">
                <tr>
                    <th class="col">No</th>
                    <th class="col">Nik</th>
                    <th class="col">Nama</th>
                    <th class="col">Isi Laporan</th>
                    <th class="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->user_nik }}</td>
                        <td>{{ $item->users->name }}</td>
                        <td>{{ $item->isi_laporan }}</td>
                        <td>{{ $pengaduan->created_at->format('l, d F Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
