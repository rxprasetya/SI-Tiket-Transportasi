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
                        <a href="{{ route('tiketkereta') }}">Data Ticket Trains</a>
                    </li>
                    <li class="breadcrumb-item">Create Ticket Train</li>
                </ol>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Data Ticket Train</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('updatetiketkereta', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_kereta">Train Name</label>
                        <select id="id_kereta" class="form-control" name="id_kereta">
                        <option value="">--Select--</option>
                        @foreach ($data_kereta as $row)
                            <option value="{{ $row->id }}" {{ $row->id == $data->id_kereta ? 'selected' : '' }}>{{ $row->nama_kereta }}</option>
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
                        <label for="harga_tiket_kereta">Price</label>
                        <input
                            type="text"
                            class="form-control"
                            id="harga_tiket_kereta"
                            name="harga_tiket_kereta"
                            value="{{ $data->harga_tiket_kereta }}"
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
