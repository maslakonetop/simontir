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
                        <label for="koderekening" class="col-sm-6 col-form-label text-dark">Kode Rekening</label>
                        <div class="col-sm-6">
                            <input type="number" value="{{ $norek + 1 }}" autofocus readonly data-bs-toggle="tooltip" >
                            <input type="hidden" name="koderekening" class="form-control @error('koderekening') is-invalid @enderror" id="koderekening" value="{{ $norek + 1 }}"  data-bs-toggle="tooltip" data-bs-placement="top" title="Nomer Rekening Anda">
                            @error('koderekening')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                                
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subkegiatan" class="col-sm-6 col-form-label text-dark">Sub Kegiatan</label>
                        <div class="col-sm-6">
                            <input type="text" name="subkegiatan" class="form-control @error('subkegiatan') is-invalid @enderror" id="subkegiatan" value="{{ old('subkegiatan') }}" autofocus required data-bs-toggle="tooltip" data-bs-placement="top" title="Isikan Nama Pengguna yang Anda inginkan">
                            @error('subkegiatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                                
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bidang" class="col-sm-6 col-form-label text-dark">Bidang</label>
                        <div class="col-sm-6">
                            <select name="bidang" id="bidang" class="form-control">
                                <option value="hidden-selected">--Pilih Bidang--</option>
                                @foreach ($bidangs as $bidang)
                                    <option value="{{ $bidang->bidang }}">{{ $bidang->bidang }}</option>                                    
                                @endforeach
                            </select>
                            @error('bidang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                                
                            @enderror
                        </div>
                    </div>
                    <hr>                    
                    <div class="form-group row ms-auto">
                        <button type="submit" class="btn btn-outline-info">Simpan</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="peringatan" class="text-warning">Nomor Rekening Terisi Otomatis</label>
                </div>
            </div>
        </form>
    </section>
</div>
@endsection