@extends('employee::layouts.master')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tabel Employee</h6>
              <a href="/employee/create" class="btn btn-primary">Tambah Data Employee</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No_telp</th>
                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($employees as $employees)
                    <tr>
                        <td>{{ $employees->nama }}</td>
                        <td>{{ $employees->alamat }}</td>
                        <td>{{ $employees->email }}</td>
                        <td>{{ $employees->no_telp }}</td>
                        <td>
                            <a href="/employee/{{$employees->id}}/edit" class="btn btn-warning">Edit</a>
                            <form action="/employee/{{$employees->id}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
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
