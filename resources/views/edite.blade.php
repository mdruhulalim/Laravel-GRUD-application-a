@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h2>Edite {{ $data->name }} meta data</h2>@if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        </div>
                        <div class="card-body">
                            <form action="{{ route('usereupdate', $data->id) }}" method="GET">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Edite your name</label>
                                    <input class="form-control" type="text" name="name" value="{{ $data->name }}">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="fname">Edite your father name</label>
                                    <input class="form-control" type="text" name="fname" value="{{ $data->fname }}">
                                    @error('fname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="phone">Edite your phone number</label>
                                    <input class="form-control" type="tel" name="phone" value="{{ $data->phone }}">
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="address">Edite your address</label>
                                    <textarea class="form-control" name="address">{{ $data->address }}</textarea>
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <input class="btn btn-success" type="submit" value="Update">
                                </div>
                            </form>
                            <a class="btn btn-primary btn-sm mt-3" href="{{ route('home') }}">Return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection