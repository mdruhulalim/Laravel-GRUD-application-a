@extends('layouts.app')
@section('content')
<div class="container">
    <div class="mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $data->name }} meta data</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>id</td>
                                <td>{{ $data->id }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <td>Father name</td>
                                <td>{{ $data->fname }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $data->phone }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ $data->address }}</td>
                            </tr>
                        </table>
                        <a class="btn btn-primary btn-sm mb-2" href="{{ route('home') }}">Return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection