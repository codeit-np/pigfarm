@extends('backend.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/pig/create" class="btn btn-primary btn-sm">New Pig</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Pig Name</th>
                                <th>Tag No</th>
                                <th>Weight</th>
                                <th>Gender</th>
                                <th>Pig Obtain by</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                            <thead>
                                @foreach ($pigs  as $index=> $item)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->tag_no }}</td>
                                    <td>{{ $item->weight }}</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->pig_obtain_by }}</td>
                                    <td>
                                        <a href="/pig/{{ $item->id }}/edit" class="badge bg-info">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </thead>

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
