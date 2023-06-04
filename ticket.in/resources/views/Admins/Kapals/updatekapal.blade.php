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
                        <a href="{{ route('kapal') }}">Data Ships</a>
                    </li>
                    <li class="breadcrumb-item">Update Ships</li>
                </ol>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Data Ship</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('updatekapal', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_kapal">Ship Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nama_kapal"
                            name="nama_kapal"
                            value="{{ $data->nama_kapal }}"
                            placeholder="Enter Name"
                        />
                    </div>
                    <div class="form-group">
                        <label for="tempat_duduk_kapal">Seat</label>
                        <input
                            type="text"
                            class="form-control"
                            id="tempat_duduk_kapal"
                            name="tempat_duduk_kapal"
                            value="{{ $data->tempat_duduk_kapal }}"
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
