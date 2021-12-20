@extends('layout.template')

@section('konten')
    <div class="container">
    <section class="base">
        <h2>{{ $judul }}</h2>
        <hr>
        <form action="/user" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="name" class="col-sm-6 col-form-label text-dark">Nama Lengkap</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" autofocus required data-bs-toggle="tooltip" data-bs-placement="top" title="Isikan Nama Lengkap Anda">
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
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username') }}" required data-bs-toggle="tooltip" data-bs-placement="top" title="Isikan Nama Pengguna yang Anda inginkan">
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                                
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-6 col-form-label text-dark">Kata Sandi</label>
                        <div class="col-sm-6">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required data-bs-toggle="tooltip" data-bs-placement="top" title="Minimal 7 karakter, 1 huruf besar, satu karakter khusus, satu angka">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                                
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-6 col-form-label text-dark">Email</label>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required data-bs-toggle="tooltip" data-bs-placement="top" title="Isikan Email yang sering Anda gunakan">
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
                            <select name="is_admin" id="is_admin" class="form-control @error('is_admin') is-invalid @enderror" required>
                                <option value="disable-selected">--Pilih Role--</option>
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
                    <div class="form-group row ms-auto">
                        <button type="submit" class="btn btn-outline-info">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
@endsection