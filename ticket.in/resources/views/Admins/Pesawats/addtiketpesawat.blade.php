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
                        <a href="{{ route('tiketpesawat') }}">Data Ticket Planes</a>
                    </li>
                    <li class="breadcrumb-item">Create Ticket Plane</li>
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
            <form action="{{ route('inserttiketpesawat') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_maskapai">Train Name</label>
                        <select id="id_maskapai" class="form-control" name="id_maskapai">
                        <option value="">--Select--</option>
                        @foreach ($data_pesawat as $row)
                            <option value="{{ $row->id }}">{{ $row->nama_maskapai }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_jadwal">Schedule</label>
                        <select id="id_jadwal" class="form-control" name="id_jadwal">
                        <option value="">--Select--</option>
                        @foreach ($data_jadwal as $row)
                            <option value="{{ $row->id }}">{{ $row->tanggal_berangkat }} to {{ $row->tanggal_datang }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga_tiket_pesawat">Price</label>
                        <input
                            type="text"
                            class="form-control"
                            id="harga_tiket_pesawat"
                            name="harga_tiket_pesawat"
                            placeholder="Enter Price"
                        />
                    </div>
                    <div class="form-group">
                        <label for="id_kota_asal">Home Town</label>
                        <select id="id_kota_asal" class="form-control" name="id_kota_asal">
                        <option value="">--Select--</option>
                        @foreach ($data_kota_asal as $row)
                            <option value="{{ $row->id }}">{{ $row->nama_kota }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_kota_tujuan">Destination City</label>
                        <select id="id_kota_tujuan" class="form-control" name="id_kota_tujuan">
                        <option value="">--Select--</option>
                        @foreach ($data_kota_tujuan as $row)
                            <option value="{{ $row->id }}">{{ $row->nama_kota }}</option>
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
