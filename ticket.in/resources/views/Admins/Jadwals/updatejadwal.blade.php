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
                        <a href="{{ route('jadwal') }}">Data Schedules</a>
                    </li>
                    <li class="breadcrumb-item">Create Schedules</li>
                </ol>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Data Schedule</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('updatejadwal', $data ->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="dd">Departure Date</label>
                        <input
                            type="date"
                            class="form-control"
                            id="dd"
                            value="{{ $data->tanggal_berangkat }}"
                            name="tanggal_berangkat"
                        />
                    </div>
                    <div class="form-group">
                        <label for="cd">Coming Date</label>
                        <input
                            type="date"
                            class="form-control"
                            id="cd"
                            value="{{ $data->tanggal_datang }}"
                            name="tanggal_datang"
                        />
                    </div>
                    <div class="form-group">
                        <label for="dt">Departure Time</label>
                        <input
                            type="time"
                            class="form-control"
                            id="dt"
                            placeholder="Enter Time"
                            value="{{ $data->waktu_berangkat }}"
                            name="waktu_berangkat"
                        />
                    </div>
                    <div class="form-group">
                        <label for="ct">Coming Time</label>
                        <input
                            type="time"
                            class="form-control"
                            id="ct"
                            placeholder="Enter Time"
                            value="{{ $data->waktu_datang }}"
                            name="waktu_datang"
                        />
                    </div>
                    <div class="form-group">
                        <label for="sel">Schedule For</label>
                        <select id="sel" class="form-control" name="id_jadwal_untuk">
                        @foreach ($data_untuk as $row)
                            <option 
                                value="{{ $row->id }}" {{ $row->id == $data->id_jadwal_untuk ? 'selected' : '' }}>
                                {{ $row->nama_jadwal_untuk }}
                            </option>
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
