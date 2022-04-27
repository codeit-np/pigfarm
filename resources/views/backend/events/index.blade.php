@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/events/create" class="btn btn-primary btn-sm">Events</a>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Begins</th>
                                    <th>Ends</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($event as $index => $item)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->time_begin }}</td>
                                        <td>{{ $item->time_end }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>

                                            <form action="/event/{{ $item->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="/event/{{ $item->id }}/edit" class="badge bg-info">Edit</a>
                                                <button type="submit" class="btn badge bg-danger">Delete</button>
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
