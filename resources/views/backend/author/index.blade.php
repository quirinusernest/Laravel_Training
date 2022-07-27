@extends('backend.layout.base')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">
                List Data Author
            </h2>
            <div class="card-tools">
                <a href="{{ route('admin.author-create') }}" class="btn-primary btn">
                    Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Nomor Telfon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_authors as $authors)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $authors->nama }}</td>
                            <td>{{ $authors->tempat_lahir }}</td>
                            <td>{{ $authors->nomor_telfon }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.author-edit', [$authors->id]) }}"
                                    class=" btn btn-primary btn-sm">Edit</a>
                                <a href="javascript:;"
                                    onclick="if(confirm('Yakin Hapus Data?')){
                                return window.location.href='{{ route('admin.author-delete', [$authors->id]) }}'
                            }"
                                    class="btn btn-danger btn-sm"> Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="pull-right">
                {{ $list_authors->links() }}
            </div> --}}
        </div>
        <div class="card-footer">
            Showing
                {{ $list_authors->firstItem() }}
                to
                {{ $list_authors->lastItem() }}
                entries
                {{ $list_authors->total() }}
            <div class="card-tools">
                {!! $list_authors->links() !!}
            </div>
        </div>
    </div>
@endsection
