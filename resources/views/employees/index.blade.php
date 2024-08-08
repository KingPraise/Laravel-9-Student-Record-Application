@extends('layouts.admin.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              
                <h1>Employees</h1>
                <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
                <div class="col-12">
                    <div class="card mb-4">
                      <div class="card-header pb-0">
                        @if (session('success'))
                        <div class="alert alert-success mt-2">
                            {{ session('success') }}
                        </div>
                    @endif
                        <h6>Employees table</h6>
                      </div>
                      <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                          <table class="table align-items-center mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employee Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status/Postion</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Salary</th>
                                <th class="text-secondary opacity-7"></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->position }}</td>
                                    <td>${{ $employee->salary }}</td>
                                    <td>
                                        <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                          
                              <tr>
                                <td>
                                  <div class="d-flex px-2 py-1">
                                    <div>
                                      <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                      <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                      <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <p class="text-xs font-weight-bold mb-0">Programtor</p>
                                  <p class="text-xs text-secondary mb-0">Developer</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                                </td>
                                <td class="align-middle">
                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
              
               
              
            </div>
        </div>
    </div>
@endsection
