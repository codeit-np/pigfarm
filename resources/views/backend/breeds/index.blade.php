@extends('backend.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/breed/create" class="btn btn-primary btn-sm">Breeds</a>
                </div>
                <div class="card-body">
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                            <tbody>
                                @foreach ($breed  as $index=> $item)

                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $item->name }}</td>

                                    <td>
                                        <a href="/breed/{{ $item->id }}/edit" class="badge bg-info">Edit</a>
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
