@extends('layoutadmin.template')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm">
                <i class="fas fa-download fa-sm text-warning-50"></i> Generate Report
            </a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Total Products Card -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-uppercase mb-1">Total Lagu</div>
                                <div class="h5 mb-0 font-weight-bold">{{ $totallagu }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-music fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Orders Card -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-uppercase mb-1">Total Alat Musik</div>
                                <div class="h5 mb-0 font-weight-bold">4 alat</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-drum fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Admin Login Card -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card bg-info text-white
                 shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-uppercase mb-1">User Login</div>
                                <div class="h5 mb-0 font-weight-bold">{{ $totaluser }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- User Aktif Table -->
    <div class="container mt-5">
        <h2 class="mb-4">User Aktif</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userall as $user)
                        <tr>
                            <td>{{ $user->user_id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
