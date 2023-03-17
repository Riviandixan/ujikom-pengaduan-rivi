@extends('layouts.master')

@section('content')
<form action="{{ route('tanggapan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 offset-lg-2">
            <div class="card">
                <div class="card-header border-bottom p-1">
                    <div class="head-label">
                        <h4 class="mb-0">Berikan Tanggapan</h4>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tanggapan</strong>
                                <textarea class="form-control" name="tanggapan" id="tanggapan" rows="9"
                                    placeholder="Isi Tanggapan Anda" value={{ old('description') }} required></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <strong>Tanggal Tanggapan</strong>
                                <input type="date" name="tgl_tanggapan" class="form-control"
                                    placeholder="Tanggal Tanggapan" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <strong>Status</strong>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="pending">Pending</option>
                                    <option value="proses">Proses</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">
                        </div>

                    </div><br>
                    <button class="btn btn-primary data-submit mr-1">Tanggapi</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
