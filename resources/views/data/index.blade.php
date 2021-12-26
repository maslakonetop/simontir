@extends('layout.template')

@section('konten')
<h2 class="text-lg-center">List Nomor Rekening</h2>
<hr class="style8">
<div class="row">
    <div class="col-md-6">
        <form action="/cari/rekening/" method="get">
            @csrf
            <div class="form-group row">
                <label for="koderekening" class="col-sm-4 col-form-label text-dark">Cari Rekening</label>
                <div class="col-sm-4">
                    {{-- <select name="rekening" id="rekening" class="form-control">
                        <option value="disabled-selected">--Pilih No Rekening--</option>
                        @foreach ($cari as $item)
                        <option value="{{ $item->id }}">{{ $item->koderekening }}</option>            
                        @endforeach
                    </select> --}}
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-outline-info" type="submit"><i class="fas fa-search"></i></button>                    
                </div>
            </div>
        </form>
    </div>
</div>
<hr class="style2">
<div class="row">
    <div class="col">
        <div class="table-responsive">
            <table class="table table-hover table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="bg-info">ID</th>
                        <th scope="col" class="bg-info">Kode Rekening</th>
                        <th scope="col" class="bg-info">Sub Kegiatan</th>
                        <th scope="col" class="bg-info">Bidang</th>
                        <th scope="col" class="bg-info">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>                            
                        <td>
                            {{ $row->id }}
                        </td>
                        <td>
                            {{ $row->koderekening }}
                        </td>
                        <td>
                            {{ $row->subkegiatan }}
                        </td>
                        <td>
                            {{ $row->bidang }}
                        </td>
                        <td>
                            <a href="/data/lanjut{{ $row->id }}" class="button btn-success"><i class="far fa-caret-square-right"></i></i></a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection