@extends('backend.layout.base')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">
                List Data Buku
            </h2>
            <div class="card-tools">
                <a href="{{ route('admin.books-create') }}" class="btn-primary btn">
                    Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Author</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_books as $books)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td align="center"><img src="{{ asset($books->gambar) }}" height="80" alt=""></td>
                            <td>{{ $books->judul }}</td>
                            <td>{{ $books->author->nama }}</td>
                            <td>{{ $books->deskripsi }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.books-edit', [$books->id]) }}"
                                    class=" btn btn-primary btn-sm">Edit</a>
                                <a href="javascript:;"
                                    onclick="if(confirm('Yakin Hapus Data?')){
                                return window.location.href='{{ route('admin.books-delete', [$books->id]) }}'
                            }"
                                    class="btn btn-danger btn-sm"> Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="pull-right">
                {{ $list_books->links() }}
            </div> --}}
        </div>
        {{-- <div class="card-footer">
            Showing
                {{ $list_books->firstItem() }}
                to
                {{ $list_books->lastItem() }}
                entries
                {{ $list_books->total() }}
            <div class="card-tools">
                {!! $list_books->links() !!}
            </div>
        </div> --}}
    </div>
@endsection
