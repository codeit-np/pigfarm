@extends('backend.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/feedtype/create" class="btn btn-primary btn-sm">Feed Types</a>
                </div>
                <div class="card-body">
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                {{-- <th>User Id</th> --}}

                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($feedtype  as $index=> $item)

                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $item->name }}</td>

                                {{-- <td>{{ $item->user_id }}</td> --}}
                                <td>
                                    <a href="/feedtype/{{ $item->id }}/edit" class="badge bg-info">Edit</a>
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
