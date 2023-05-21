<!-- employers/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Employers</h1>

    <a href="{{ route('employers.create') }}" class="btn btn-primary">Create Employer</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employers as $employer)
                <tr>
                    <td>{{ $employer->id }}</td>
                    <td>{{ $employer->name }}</td>
                    <td>{{ $employer->email }}</td>
                    <td>
                        <a href="{{ route('employers.show', $employer->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('employers.edit', $employer->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('employers.destroy', $employer->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employer?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
