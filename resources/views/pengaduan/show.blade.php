@extends('layouts.master')

@section('content')
<div class="card">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card-body">
            <h2 class="text-center">Detail Pengaduan</h2>
        </div>
        <div class="card-body">
            @foreach ($pengaduan->details as $data)
            <h4>NIK: {{ $data->user_nik }}</h4>
            <h4>No Telepon: {{ $pengaduan->users->phone }}</h4>
            <h4>Tanggal: {{ date('d-M-Y', strtotime($pengaduan->tgl_pengaduan)) }}</h4>
            <h4>Status:
                @if ($data->status == 'pending')
                <span class="badge badge-sm bg-gradient-secondary">Pending</span>
                @elseif($data->status == 'proses')
                <span class="badge badge-sm bg-gradient-primary">Proses</span>
                @elseif($data->status == 'selesai')
                <span class="badge badge-sm bg-gradient-primary">Selesai</span>
                @endif

            </h4>
            <h4>Foto: <img src="{{ asset('public/uploads/' . $data->foto) }}" width="200px" alt="foto"></h4>
            <h3 class="text-center">Keterangan
                <p style="font-size: 16px;">{{ $data->isi_laporan }}</p>
            </h3><br>
            <h3 class="text-center">Tanggapan
                <p style="font-size: 16px;">
                    @if (empty($tanggapan->tanggapan))
                    Belum ada tanggapan
                    @else
                    {{ $tanggapan->tanggapan }}
                    @endif
                </p>
            </h3>
            @endforeach
        </div>
        @if (Auth::user()->role == 'admin')
        <div class="text-center my-2">
            <a href="{{ url('pengaduan/cetak', $pengaduan->id) }}" class="btn btn-danger">Export ke PDF</a>
        </div>
        <div class="text-center">
            <a href="{{ route('tanggapan.show', $pengaduan->id) }}" class="btn btn-primary">Berikan Tanggapan</a>
        </div>
        @elseif(Auth::user()->role == 'petugas')
        <div class="text-center my-2">
            <a href="{{ url('pengaduan/cetak', $pengaduan->id) }}" class="btn btn-danger">Export ke PDF</a>
        </div>
        <div class="text-center">
            <a href="{{ route('tanggapan.show', $pengaduan->id) }}" class="btn btn-primary">Berikan Tanggapan</a>
        </div>
        @elseif(Auth::user()->role == 'masyarakat')
        <div class="text-center my-2">
            <a href="{{ url('pengaduan/cetak', $pengaduan->id) }}" class="btn btn-danger">Export ke PDF</a>
        </div>
        @endif

    </div>
</div>
@endsection
