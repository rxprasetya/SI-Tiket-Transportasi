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
                        <a href="{{ route('pegawai') }}">Data Officers</a>
                    </li>
                    <li class="breadcrumb-item">Create Officers</li>
                </ol>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Data Officer</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('insertpegawai') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_pegawai">Full Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nama_pegawai"
                            id="nama_pegawai"
                            placeholder="Enter Name"
                        />
                    </div>
                    <div class="form-group">
                        <label for="username_pegawai">Username</label>
                        <input
                            type="text"
                            class="form-control"
                            name="username_pegawai"
                            id="username_pegawai"
                            placeholder="Enter Username"
                        />
                    </div>
                    <div class="form-group">
                        <label for="password_peagawai">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password_pegawai"
                            id="password_peagawai"
                            placeholder="Enter Password"
                        />
                    </div>
                    <div class="form-group">
                        {{-- <label for="jabatan">Level</label> --}}
                        <input
                            type="hidden"
                            class="form-control"
                            name="jabatan"
                            id="jabatan"
                            value="Pegawai"
                            readonly
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
