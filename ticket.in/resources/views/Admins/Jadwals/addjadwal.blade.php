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
            <form action="{{ route('insertjadwal') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="dd">Departure Date</label>
                        <input
                            type="date"
                            class="form-control"
                            id="dd"
                            name="tanggal_berangkat"
                        />
                    </div>
                    <div class="form-group">
                        <label for="cd">Coming Date</label>
                        <input
                            type="date"
                            class="form-control"
                            id="cd"
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
                            name="waktu_datang"
                        />
                    </div>
                    <div class="form-group">
                        <label for="sel">Schedule For</label>
                        <select id="sel" class="form-control" name="id_jadwal_untuk">
                        <option value="">--Select--</option>
                        @foreach ($data as $row)
                            <option value="{{ $row->id }}">{{ $row->nama_jadwal_untuk }}</option>
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
