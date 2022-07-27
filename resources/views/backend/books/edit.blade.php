@extends('backend.layout.base')
@section('content')
    <div class="card">
        <form action="{{ route('admin.books-update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="card-header">
                <h3 class="card-title">
                    {{ $page_title }}
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ old('judul', $data->judul) }}"></input>
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="gambar" value="{{ old('gambar', $data->gambar)  }}"></input>
                </div>
                <div class="form-group">
                    <label for="">Author</label>
                    <select name="author_id" id="" class="form-control">
                        <option value="{{ $data->author_id }}" selected>{{ $data->author->nama }}</option>
                        @foreach ($list_author as $author)
                            <option value="{{ $author->id }}">{{ $author->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control">{{ $data->deskripsi }}</textarea>
                </div>               
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.books') }}" class="btn-secondary btn">Back</a>
                <button type="submit" class="btn-primary btn">Simpan</button>
            </div>
        </form>
    </div>
@endsection
