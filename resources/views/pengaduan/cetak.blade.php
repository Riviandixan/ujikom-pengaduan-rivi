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
            <img src="{{ public_path('public/uploads/wikrama-logo.png') }}" width="100px" alt="">
            <h2>Layanan Pengaduan Masyarakat
                <h3>SMK Wikrama Bogor</h3>
            </h2>
        </div>
        <hr class="solid">
    </div>
    <div>
        <h6>Laporan Pengaduan</h6>
        <h6>{{ $pengaduan->tgl_pengaduan}}</h6>
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