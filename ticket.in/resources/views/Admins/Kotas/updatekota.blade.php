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
                        <a href="{{ route('kota') }}">Data Cities</a>
                    </li>
                    <li class="breadcrumb-item">Update Cities</li>
                </ol>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Data City</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('updatekota', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_kota">City Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nama_kota"
                            name="nama_kota"
                            value="{{ $data->nama_kota }}"
                            placeholder="Enter City"
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
