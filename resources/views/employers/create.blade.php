<!-- employers/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Employer</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>


        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" id="company" class="form-control" value="{{ old('email') }}" required>
        </div>

        <!-- Add other fields as needed -->
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
