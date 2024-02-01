<!-- resources/views/admin/index.blade.php -->

@extends('admin.app')

@section('content')
    <div class="container mt-4">
        <h1>Halaman Admin</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($thanksgivings as $key => $thanksgiving)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $thanksgiving->name }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ url('/admin/thanksgiving/' . $thanksgiving->idDetail . '/edit') }}"
                                    class="btn btn-warning">Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
