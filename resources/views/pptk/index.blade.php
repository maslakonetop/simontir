@extends('layout.template')

@section('konten')
<div class="container-fluid">
    <h5 class="text-center text-primary">{{ $judul }}</h5>
    <hr>
    <a href="/rekening/create" class="btn btn-outline-info"><i class="fas fa-plus-circle"></i> Data Baru</a>
    <hr>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">PPTK</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>                            
                            <td>
                                {{ $row->id }}
                            </td>
                            <td>
                                {{ $row->pptk }}
                            </td>
                            <td>
                                <a href="/pptk/{{ $row->id }}" class="badge bg-success"><i class="fas fa-info-circle"></i></a>
                                <a href="/pptk/{{ $row->id }}/edit" class="bg badge-warning"><i class="fas fa-pen-square"></i></a>
                                <a href="/pptk/{{ $row->id }}" class="badge bg-danger"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection