@extends('layout.template')

@section('konten')
<div class="container">
    <h2>{{ $judul }}</h2>
    <hr class="style17">
    <div class="row">
        <div class="col">
            <a href="/user/create" class="btn btn-outline-info">Registrasi Baru</a>
            <hr class="style17">
            <div class="table-responsive">                    
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->username }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->is_admin }}</td>
                            <td>
                                <a href="/user/{{ $row->id }}" class="btn btn-info"><i class="far fa-eye"></i> Detail</a>
                                <a href="/user/{{ $row->id }}/edit" class="btn btn-warning"><i class="fas fa-pen-square"></i> Edit</a>
                                <a href="#" class="btn btn-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>                               
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection