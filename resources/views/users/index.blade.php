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
                                    <th scope="col">password</th>
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
                                        <td>{{ $user->password }}</td>
                                        
                                        <td>{{ $user->created_at }}</td>
                                        <td class="text-center">
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

@section('scripts')
<script>
    //message with sweetalert
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'BERHASIL',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000
        });
    @elseif(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'GAGAL!',
            text: '{{ session('error') }}',
            showConfirmButton: false,
            timer: 2000
        });
    @endif
</script>
@endsection
