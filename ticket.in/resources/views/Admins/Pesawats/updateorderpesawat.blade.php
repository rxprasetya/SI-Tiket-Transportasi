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
                        <a href="{{ route('orderpesawat') }}">Data Order Planes</a>
                    </li>
                    <li class="breadcrumb-item">Create Order Plane</li>
                </ol>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Data Order Plane</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('updateorderpesawat', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_tiket_pesawat">Ticket</label>
                        <select id="id_tiket_pesawat" class="form-control" name="id_tiket_pesawat">
                        <option value="">--Select--</option>
                        @foreach ($data_tiket as $row)
                            <option value="{{ $row->id }}" {{ $row->id == $data->id_tiket_pesawat ? 'selected' : '' }}>{{ $row->id_kota_asal }} - {{ $row->id_kota_tujuan }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pesan_pesawat">Order Date</label>
                        <input
                            type="date"
                            class="form-control"
                            id="tanggal_pesan_pesawat"
                            name="tanggal_pesan_pesawat"
                            value="{{ $data->tanggal_pesan_pesawat }}"
                        />
                    </div>
                    <div class="form-group">
                        <label for="jumlah_pesan_pesawat">Quantity</label>
                        <input
                            type="number"
                            class="form-control"
                            id="jumlah_pesan_pesawat"
                            name="jumlah_pesan_pesawat"
                            placeholder="Enter Quantity"
                            value="{{ $data->jumlah_pesan_pesawat }}"
                        />
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
