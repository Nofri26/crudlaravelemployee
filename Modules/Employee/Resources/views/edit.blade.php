@extends('employee::layouts.master')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Edit Data Employee</h6>
            </div>
            <div class="card-body px-2 pt-0 pb-2">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form action="/employee/{{ $employees->id }}" method="POST">
                @method('put')
                @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama" value="{{ $employees->nama }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Alamat" value="{{ $employees->alamat }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email" value="{{ $employees->email }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">No Telp</label>
                <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan No Telp" value="{{ $employees->no_telp }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
          </div>
        </div>
</div>
@endsection