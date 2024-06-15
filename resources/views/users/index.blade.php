@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('User') }}</div>

                <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2>Table User</h2>
                            <a href="#" class="btn btn-md btn-success mb-3">create</a>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">role</th>
                                    <th scope="col">Created At</th>                   
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $index => $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role_id }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <button class="btn btn-info btn-sm">Show</button>
                                            <button class="btn btn-warning btn-sm">Update</button>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
