@extends('Layouts.template') @section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 mb-2">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('tiketkapal') }}">Data Ticket Ships</a>
                    </li>
                    <li class="breadcrumb-item">Update Ticket Ship</li>
                </ol>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Data Ticket Ship</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('updatetiketkapal', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_kapal">Ship Name</label>
                        <select id="id_kapal" class="form-control" name="id_kapal">
                        <option value="">--Select--</option>
                        @foreach ($data_kapal as $row)
                            <option value="{{ $row->id }}" {{ $row->id == $data->id_kapal ? 'selected' : '' }}>{{ $row->nama_kapal }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_jadwal">Schedule</label>
                        <select id="id_jadwal" class="form-control" name="id_jadwal">
                        <option value="">--Select--</option>
                        @foreach ($data_jadwal as $row)
                            <option value="{{ $row->id }}" {{ $row->id == $data->id_jadwal ? 'selected' : '' }}>{{ $row->tanggal_berangkat }} to {{ $row->tanggal_datang }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga_tiket_kapal">Price</label>
                        <input
                            type="text"
                            class="form-control"
                            id="harga_tiket_kapal"
                            name="harga_tiket_kapal"
                            value="{{ $data->harga_tiket_kapal }}"
                            placeholder="Enter Price"
                        />
                    </div>
                    <div class="form-group">
                        <label for="id_kota_asal">Home Town</label>
                        <select id="id_kota_asal" class="form-control" name="id_kota_asal">
                        <option value="">--Select--</option>
                        @foreach ($data_kota_asal as $row)
                            <option value="{{ $row->id }}" {{ $row->id == $data->id_kota_asal ? 'selected' : '' }}>{{ $row->nama_kota }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_kota_tujuan">Destination City</label>
                        <select id="id_kota_tujuan" class="form-control" name="id_kota_tujuan">
                        <option value="">--Select--</option>
                        @foreach ($data_kota_tujuan as $row)
                            <option value="{{ $row->id }}" {{ $row->id == $data->id_kota_tujuan ? 'selected' : '' }}>{{ $row->nama_kota }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div
                        class="card-footer bg-white pt-0"
                    >
                        <button
                            type="submit"
                            class="btn btn-primary float-left"
                            style="width: 45%;"
                        >
                            Submit
                        </button>
                        <button
                            type="reset"
                            class="btn btn-default float-right"
                            style="width: 45%"
                        >
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
