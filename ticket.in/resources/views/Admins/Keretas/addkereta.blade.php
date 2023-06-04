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
                        <a href="{{ route('kereta') }}">Data Trains</a>
                    </li>
                    <li class="breadcrumb-item">Create Trains</li>
                </ol>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Data Train</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('insertkereta') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_kereta">Train Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nama_kereta"
                            name="nama_kereta"
                            placeholder="Enter Name"
                        />
                    </div>
                    <div class="form-group">
                        <label for="tempat_duduk_kereta">Seat</label>
                        <input
                            type="text"
                            class="form-control"
                            id="tempat_duduk_kereta"
                            name="tempat_duduk_kereta"
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
