@extends('backend.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if (empty($setting))
                        <a href="/setting/create" class="btn btn-primary btn-sm">General Setting</a>
                    @else
                        <h5>General Setting</h5>
                    @endif

                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Company Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        @if (!empty($setting))
                            <tbody>
                                <tr>
                                    <td><img src="{{ asset($setting->logo) }}" width="32" alt=""></td>
                                    <td>{{ $setting->name }}</td>
                                    <td>{{ $setting->address }}</td>
                                    <td>{{ $setting->contact }}</td>
                                    <td>{{ $setting->email }}</td>
                                    <td>
                                        <a href="/setting/{{ $setting->id }}/edit" class="badge bg-info">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        @endif
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
