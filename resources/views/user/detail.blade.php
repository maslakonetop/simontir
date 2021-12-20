@extends('layout.template')

@section('konten')
    <div class="container">
    <section class="base">
        <h2>{{ $judul }} {{ $data->name }}</h2>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="name" class="col-sm-6 col-form-label text-dark">Nama Lengkap</label>
                    <div class="col-sm-6">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $data->name }}" autofocus readonly data-bs-toggle="tooltip" data-bs-placement="top" title="Isikan Nama Lengkap Anda">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                                
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-6 col-form-label text-dark">Nama Pengguna</label>
                    <div class="col-sm-6">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ $data->username }}" readonly data-bs-toggle="tooltip" data-bs-placement="top" title="Isikan Nama Pengguna yang Anda inginkan">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                                
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-6 col-form-label text-dark">Email</label>
                    <div class="col-sm-6">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $data->email }}" readonly data-bs-toggle="tooltip" data-bs-placement="top" title="Isikan Email yang sering Anda gunakan">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                                
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="is_admin" class="col-sm-6 col-form-label text-dark">Tipe Pengguna</label>
                    <div class="col-sm-6">
                        <select name="is_admin" id="is_admin" class="form-control @error('is_admin') is-invalid @enderror" readonly>
                            <option value="disable-selected">{{$data->is_admin}}</option>
                            <option value="0">User / Pengguna</option>
                            <option value="1">Administrator</option>
                        </select>
                        @error('is_admin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                                
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="photo" class="col-sm-6 col-form-label text-dark">Upload Foto Profil</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="file" id="formFile">
                        </div>
                </div>
                <div class="form-group row">
                    <a href="/user" class="btn btn-outline-primary ms-100"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                    <a href="/user/{{ $data->id }}/edit" class="btn btn-outline-info ms-auto"><i class="far fa-edit"></i> Edit</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection