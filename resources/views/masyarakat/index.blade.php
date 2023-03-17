@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header border-bottom p-1">
        <div class="head-label">
            <h4 class="mb-0">Data Masyarakat</h4>
        </div>
    </div>
    <div class="card-body pt-2">
        <div class="table-responsive">
            <table class="table table-bordered zero-configuration">
                <thead>
                    <tr>
                        <th width='50px' class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Nik</th>
                        <th width='150px' class="text-center">No Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($masyarakats as $masyarakat)
                        <tr>
                            <td width='50px' class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $masyarakat->name }}</td>
                            <td class="text-center">{{ $masyarakat->nik }}</td>
                            <td width='150px' class="text-center">{{ $masyarakat->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
