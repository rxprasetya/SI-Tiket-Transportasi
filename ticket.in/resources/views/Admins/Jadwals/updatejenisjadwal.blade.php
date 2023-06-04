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
                        <a href="{{ route('jenisjadwal') }}">Data Schedules</a>
                    </li>
                    <li class="breadcrumb-item">Update Schedules</li>
                </ol>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Data Schedule</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('updatejenisjadwal', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_jadwal_untuk">Jadwal Untuk</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nama_jadwal_untuk"
                            name="nama_jadwal_untuk"
                            value="{{ $data->nama_jadwal_untuk }}"
                            placeholder="Enter Schedule For"
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
