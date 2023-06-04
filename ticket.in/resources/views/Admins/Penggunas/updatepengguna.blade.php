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
                        <a href="{{ route('pengguna') }}">Data Users</a>
                    </li>
                    <li class="breadcrumb-item">Update Users</li>
                </ol>
            </div>
        </div>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Data User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('updatepengguna', $data->id ) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="fname">Full Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="fname"
                            name="nama_pengguna"
                            value="{{ $data->nama_pengguna }}"
                            placeholder="Enter Name"
                        />
                    </div>
                    <div class="form-group">
                        <label for="uname">Username</label>
                        <input
                            type="text"
                            class="form-control"
                            id="uname"
                            name="username_pengguna"
                            value="{{ $data->username_pengguna }}"
                            placeholder="Enter Username"
                        />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email_pengguna"
                            value="{{ $data->email_pengguna }}"
                            placeholder="Enter Email"
                        />
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="pass"
                            name="password_pengguna"
                            value="{{ $data->password_pengguna }}"
                            placeholder="Enter Password"
                        />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input
                            type="tel"
                            class="form-control"
                            id="phone"
                            name="no_telp"
                            value="{{ $data->no_telp }}"
                            pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}"
                            placeholder="Enter Phone Number"
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
