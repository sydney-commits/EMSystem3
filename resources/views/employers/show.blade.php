<!-- employers/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Employer Details</h1>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $employer->id }}</td>
            </tr>

        </tbody>
    </table>


    @endsection

