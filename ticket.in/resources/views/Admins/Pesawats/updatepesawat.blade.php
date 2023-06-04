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
                        <a href="{{ route('kereta') }}">Data Planes</a>
                    </li>
                    <li class="breadcrumb-item">Update Planes</li>
                </ol>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Data Plane</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('updatepesawat', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_maskapai">Plane Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nama_maskapai"
                            name="nama_maskapai"
                            value="{{ $data->nama_maskapai }}"
                            placeholder="Enter Name"
                        />
                    </div>
                    <div class="form-group">
                        <label for="maks_kabin_maskapai">Cabin</label>
                        <input
                            type="text"
                            class="form-control"
                            id="maks_kabin_maskapai"
                            name="maks_kabin_maskapai"
                            value="{{ $data->maks_kabin_maskapai }}"
                            placeholder="Enter Cabin Weight"
                        />
                    </div>
                    <div class="form-group">
                        <label for="tempat_duduk_maskapai">Seat</label>
                        <input
                            type="text"
                            class="form-control"
                            id="tempat_duduk_maskapai"
                            name="tempat_duduk_maskapai"
                            value="{{ $data->tempat_duduk_maskapai }}"
                            placeholder="Enter Number of Seats"
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