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
                        <a href="{{ route('orderkereta') }}">Data Order Trains</a>
                    </li>
                    <li class="breadcrumb-item">Create Order Train</li>
                </ol>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Data Order Train</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('updateorderkereta', $data->id ) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_tiket_kereta">Ticket</label>
                        <select id="id_tiket_kereta" class="form-control" name="id_tiket_kereta">
                        <option value="">--Select--</option>
                        @foreach ($data_tiket as $row)
                            <option value="{{ $row->id }}" {{ $row->id == $data->id_tiket_kereta ? 'selected' : '' }}>{{ $row->id_kota_asal }} - {{ $row->id_kota_tujuan }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pesan_kereta">Order Date</label>
                        <input
                            type="date"
                            class="form-control"
                            id="tanggal_pesan_kereta"
                            name="tanggal_pesan_kereta"
                            value="{{ $data->tanggal_pesan_kereta }}"
                        />
                    </div>
                    <div class="form-group">
                        <label for="jumlah_pesan_kereta">Quantity</label>
                        <input
                            type="number"
                            class="form-control"
                            id="jumlah_pesan_kereta"
                            name="jumlah_pesan_kereta"
                            placeholder="Enter Quantity"
                            value="{{ $data->jumlah_pesan_kereta }}"
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
