@extends('backend.layout.base')
@section('content')
    <div class="card">
        <form action="{{ route('admin.author-update') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="card-header">
                <h3 class="card-title">
                    {{ $page_title }}
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ old('nama', $data->nama) }}"></input>
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir', $data->tempat_lahir) }}"></input>
                </div>
                <div class="form-group">
                    <label for="">Nomor Telepon</label>
                    <input type="number" class="form-control" name="nomor_telfon" value="{{ old('nomor_telfon', $data->nomor_telfon) }}"></input>
                </div>               
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.author') }}" class="btn-secondary btn">Back</a>
                <button type="submit" class="btn-primary btn">Simpan</button>
            </div>
        </form>
    </div>
@endsection
