<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Dashboard</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Patient Number</th>
                <th>Patient Type</th>
                <th>Emergency Contact</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $patient->user->first_name }}</td>
                    <td>{{ $patient->user->middle_name }}</td>
                    <td>{{ $patient->user->last_name }}</td>
                    <td>{{ $patient->user->email }}</td>
                    <td>{{ $patient->user->phone_number }}</td>
                    <td>{{ $patient->user->gender }}</td>
                    <td>{{ $patient->user->address }}</td>
                    <td>{{ $patient->patient_number }}</td>
                    <td>{{ $patient->patient_type }}</td>
                    <td>{{ $patient->emergency_contact }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
