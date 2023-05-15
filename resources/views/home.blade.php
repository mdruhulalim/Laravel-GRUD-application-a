@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h2>User meta data</h2>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/usermeta') }}" method="GET">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Inter your name</label>
                                    <input class="form-control" type="text" name="name">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="fname">Inter your father name</label>
                                    <input class="form-control" type="text" name="fname">
                                    @error('fname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="phone">Inter your phone number</label>
                                    <input class="form-control" type="tel" name="phone">
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="address">Inter your address</label>
                                    <textarea class="form-control" name="address"></textarea>
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <input class="btn btn-success" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <table class="table">
                        @if (session('successdelete'))
                                <div class="alert alert-danger">
                                    {{ session('successdelete') }}
                                </div>
                            @endif
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($datas as $data)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $data->name }}</th>
                                <th>{{ $data->fname }}</th>
                                <th>{{ $data->phone }}</th>
                                <th>{{ $data->address }}</th>
                                <th>
                                    <a class="btn btn-primary btn-sm mb-2" href="{{ route('userview',$data->id) }}">View</a>
                                    <a class="btn btn-primary btn-sm mb-2" href="{{ route('useredite',$data->id) }}">Edite</a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('userdelete',$data->id) }}">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection