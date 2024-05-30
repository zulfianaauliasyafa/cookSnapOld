@extends('layoutadmin.template')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Total Products Card -->
            

            <!-- Total Orders Card -->
            <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">User</h5>
                            <div class="card-body">
                              <h5 class="card-title">{{ $totaluser }}</h5>
                              <p class="card-text">Feb 1 - Apr 1, Malang</p>
                              <p class="card-text text-success">18.2% increase since last month</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Resep</h5>
                            <div class="card-body">
                              <h5 class="card-title">{{ $totallagu }}</h5>
                              <p class="card-text">Feb 1 - Apr 1, malang</p>
                              <p class="card-text text-success">4.6% increase since last month</p>
                            </div>
                          </div>
                    </div>
                </div>

            <!-- Admin Login Card -->
            

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
