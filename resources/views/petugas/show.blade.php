@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 offset-lg-2">
        <div class="card">
            <div class="card-header border-bottom p-1">
                <div class="head-label">
                    <h4 class="mb-0">Show Petugas</h4>
                </div>
                <a href="{{ route('petugas.index') }}" class="dt-button create-new btn btn-warning">
                    <i data-feather="chevrons-left"></i>Back
                </a>
            </div>
            <div class="card-body pt-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama :</strong>
                            {{ $petugas->name  }}
                        </div>
                        <div class="form-group">
                            <strong>Username :</strong>
                            {{ $petugas->username }}
                        </div>
                        <div class="form-group">
                            <strong>Nik :</strong>
                            {{ $petugas->nik }}
                        </div>
                        <div class="form-group">
                            <strong>Phone : </strong>
                            {{ $petugas->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Role :</strong>
                            <span class="badge badge-sm bg-gradient-secondary">{{ $petugas->role }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
