@extends('layouts.admin.main')

@section('content')
<div class="container">
    <h1>Employee Details</h1>

    <div class="card">
        <div class="card-header">
            {{ $employee->name }}
        </div>
        <div class="card-body">
            <p>Email: {{ $employee->email }}</p>
            <p>Position: {{ $employee->position }}</p>
        </div>
    </div>

    <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
