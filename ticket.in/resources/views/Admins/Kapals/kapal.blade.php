@extends('Layouts.template') @section('content')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <a class="btn btn-success mr-2 mb-2" href="{{ route('addkapal') }}">Create Data</a>
            <a class="btn btn-default font-weight-bold mb-2" href="{{ route('pdfkapal') }}" target="_blank">Export PDF</a>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">Data Ships</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text font-weight-bold">Table Ships</h3>

                    <div class="card-tools">
                        <form action="{{ url()->current() }}" method="get">
                            <div
                                class="input-group input-group-sm"
                                style="width: 250px"
                            > 
                                <input
                                    type="search"
                                    name="search"
                                    class="form-control float-right"
                                    placeholder="Search"
                                />
                            
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 100%">
                    <table
                        class="table table-head-fixed text-nowrap"
                        style="font-size: 16px"
                    >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Seat</th>
                                <th class="text text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                            @foreach ($data as $item=>$row)
                            <tr>
                                    <td>{{ $item+1 }}</td>
                                    <td>{{ $row->nama_kapal }}</td>
                                    <td>{{ $row->tempat_duduk_kapal }}</td>
                                    <td class="text text-center">
                                        <a
                                            class="btn btn-primary mr-1 pt-1 pb-1"
                                            href="{{ route('readkapal', $row->id) }}"
                                            >Update</a
                                        >
                                        <a class="btn btn-danger pt-1 pb-1" href="{{ route('deletekapal', $row->id) }}"
                                            >Remove</a
                                        >
                                    </td>
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="5"><p class="text text-center">No results found.</p></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection